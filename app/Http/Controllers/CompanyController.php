<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateCompany;
use App\Traits\ApiTrait;
// use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    use ApiTrait;

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $companies = $this -> getSymbols();
        
        // Keep only Symbol and Company name
        for($i=0; $i < count($companies); $i++){
           unset($companies[$i]['Financial Status']); 
           unset($companies[$i]['Market Category']); 
           unset($companies[$i]['Round Lot Size']); 
           unset($companies[$i]['Security Name']); 
           unset($companies[$i]['Test Issue']); 
        }
        
        return view('company', compact('companies'));
    }

public function getHistoryData(ValidateCompany $request) {
    // Validate incoming request data
    $validated = $request->validated();

    // Convert string to timestamp
    $start_date = strtotime($validated['start_date']);
    $end_date = strtotime($validated['end_date']);
    
    $quotes = $this->getHistoryQuotes($validated['company_symbol'], $start_date, $end_date);

    return  view('quotes_display', compact('quotes'));
}


}
