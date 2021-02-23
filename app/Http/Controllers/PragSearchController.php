<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PragSearchController extends Controller
{
    public $prag_id;

    public function __construct($prag_id = null)
    {
        $this->prag_id = $prag_id;
    }

    public function search()
    {
        $url = implode('?', [
            'https://exist.ua/api/v1/catalogue/search-by-number',
            implode('=', [
                'product_id',
                $this->prag_id,
            ]),
        ]);

        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_ENCODING => '',
            CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        if ($response = json_decode($response, true)) {
            $response = $response['data'] ?? null;
            $response = $response['results'] ?? null;
        }

        return is_array($response) ? $response : null;
    }
}
