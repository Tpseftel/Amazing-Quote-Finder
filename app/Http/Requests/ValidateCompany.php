<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiTrait;

class ValidateCompany extends FormRequest
{
    use ApiTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'company_symbol' => [ 'required', 
                function ($attribute, $value, $fail) {
                    // Get all valid symbols    
                   $valid_symbols = array_column($this->getSymbols(), 'Symbol');
                    // Check if user given symbol exists  in valid symbols
                   if(!in_array($value, $valid_symbols)){
                        $fail($attribute.' is invalid.');
                   }
                },
            ],
            'start_date' => [ 'required', 'date', 'before_or_equal:end_date', 'before_or_equal:today'],
            'end_date' => [ 'required', 'date', 'after_or_equal:start_date', 'before_or_equal:today'],
            'email' => ['required','email']
        ];
    }
    
}
