<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotes;

class QuoteController extends Controller
{
    public function index() {
        return Quotes::all();
    }

    public function show(Request $request, $id) {
        $quote = Quotes::where('id', $id)->first();
        return $quote;
    }

    public function store(Request $request) {
        $quote = new Quotes();

        $quote->from  = $request->from;
        $quote->to    = $request->to;
        $quote->price = $request->price;
        
        $quote->save();

        return ['created' => true];
    }

    public function update() {

    }

    public function getCheaperQuote() {
        
    }

    public function destroy() {

    }
}
