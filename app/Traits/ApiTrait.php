<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

/**
 * Get Companie symbols via http api call
 */
trait ApiTrait {
    public function getSymbols()
    {
        $data = Http::get('https://pkgstore.datahub.io/core/nasdaq-listings/nasdaq-listed_json/data/a5bc7580d6176d60ac0b2142ca8d7df6/nasdaq-listed_json.json');

        return $data->json();
    }
    
}
