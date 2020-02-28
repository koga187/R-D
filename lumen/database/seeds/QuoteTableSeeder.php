<?php

use Illuminate\Database\Seeder;
use App\Quotes;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quote')->delete();
        Quotes::create(array('form' => 'GRU', 'to' => 'BRC', 'price' => '10'));
        Quotes::create(array('form' => 'GRU', 'to' => 'SCL', 'price' => '18'));
        Quotes::create(array('form' => 'GRU', 'to' => 'ORL', 'price' => '56'));
        Quotes::create(array('form' => 'GRU', 'to' => 'CDG', 'price' => '75'));
        Quotes::create(array('form' => 'SCL', 'to' => 'ORL', 'price' => '20'));
        Quotes::create(array('form' => 'BRC', 'to' => 'SCL', 'price' => '5'));
        Quotes::create(array('form' => 'ORL', 'to' => 'CDG', 'price' => '5'));
    }
}









