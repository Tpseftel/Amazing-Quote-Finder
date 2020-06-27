<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Http\Requests\ValidateCompany;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    protected $data;
    
    function __construct() {
        $this->data= Http::get('https://pkgstore.datahub.io/core/nasdaq-listings/nasdaq-listed_json/data/a5bc7580d6176d60ac0b2142ca8d7df6/nasdaq-listed_json.json');
    }


    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->data->json();
        
        // Keep only Certain fields 
        // FIXME: Refactor
        for($i=0; $i < count($companies); $i++){
           unset($companies[$i]['Financial Status']); 
           unset($companies[$i]['Market Category']); 
           unset($companies[$i]['Round Lot Size']); 
           unset($companies[$i]['Security Name']); 
           unset($companies[$i]['Test Issue']); 
        }
        
        return view('company', compact('companies'));
    }

public function getHistoryData(Request $request)
{
    $validator = Validator::make($request->all(), [
        'company_symbol' => [ 'required', 
            function ($attribute, $value, $fail) {
                // Get all valid symbols    
               $valid_symbols = array_column($this->data->json(), 'Symbol');
                // Check if user given symbol exists  in valid symbols
               if(!in_array($value, $valid_symbols)){
                    $fail($attribute.' is invalid.');
               }
            },
        ],
        'start_date' => [ 'required', 'date', 'before_or_equal:end_date', 'before_or_equal:today'],
        'end_date' => [ 'required', 'date', 'after_or_equal:start_date', 'before_or_equal:today'],
        'email' => ['required','email']
    ]);

   if ($validator->fails()) {
        $error = $validator->errors()->first();
        dd($error);
    }

    dump($validated);
    return 'History Data';
}


}
