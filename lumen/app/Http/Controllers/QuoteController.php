<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function index() {
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

    public function show(Request $request, $id) {
        return  [
            'from' => 'BRC',
            'to' => 'BA',
            'price' => 10
        ];
    }

    public function store() {
        return ['created' => true];
    }

    public function update() {

    }

    public function getCheaperQuote() {
        
    }

    public function destroy() {

    }
}
