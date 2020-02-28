<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model {

    protected $fillable = [
        'id', 
        'from', 
        'to', 
        'price'
    ];

    public static $rules = [
        "from" => "required|max:120",
        "to" => "required|max:120",
        "price" => "required|float:6,2",
        "created_at" => "required|timestamp"
    ];

}