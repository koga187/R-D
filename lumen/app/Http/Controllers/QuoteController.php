<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function getQuote(Request $request, $id = null) {
        if (!is_null($id)) {
            return  [
                'from' => 'BRC',
                'to' => 'BA',
                'price' => 10
            ];
        }

        return  [
            0 => [
                'from' => 'BRC',
                'to' => 'BA',
                'price' => 10
            ],
            1 => [
                'from' => 'GRU',
                'to' => 'CDG',
                'price' => 75
            ]
        ];
    }

    public function saveQuote() {
        return ['created' => true];
    }

    public function getCheaperQuote() {
        
    }

    public function deleteQuote() {

    }
}
