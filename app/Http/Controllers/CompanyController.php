<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use App\Http\Requests\ValidateCompany;
use App\Traits\ApiTrait;

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

    public function validateSymbol(Request $request){
            $symbol = ($request->route('symbol'));
            $valid_symbols = array_column($this->getSymbols(), 'Symbol');
            
            if(!in_array($symbol, $valid_symbols)){
                return response("false", 200);
            } else{
                return response("true", 200);
            }
    }
}