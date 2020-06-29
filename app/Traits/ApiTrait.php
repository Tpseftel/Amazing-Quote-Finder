<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Http;

/**
 * Get Company symbols 
 */
trait ApiTrait {

    protected $api_key = '';



    public function getSymbols()
    {
        $data = Http::get('https://pkgstore.datahub.io/core/nasdaq-listings/nasdaq-listed_json/data/a5bc7580d6176d60ac0b2142ca8d7df6/nasdaq-listed_json.json');

        return $data -> json();
    }

    /**
     * Get Historical data for given period
     */
    public function getHistoryQuotes($symbol, $start_date,  $end_date)
    {
            try
            {
                $data = Http::withHeaders([
                    'X-RapidAPI-Key' => 'ace55acc59mshe927a71081ba0d1p189c85jsn6bc0cbfde889'
                ]) -> get('https://apidojo-yahoo-finance-v1.p.rapidapi.com/stock/v2/get-historical-data', [
                    'symbol' => $symbol,
                    'period1' => $start_date,
                    'period2' => $end_date
                    
                ]);
            }
            catch (Exception $t)
            {
                dd($t);
            }
        
            return $data->json();
    }
    
}
