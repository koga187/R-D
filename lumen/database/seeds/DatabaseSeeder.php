<?php

use Illuminate\Database\Seeder;
use App\Quotes;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('QuoteTableSeeder');
    }
}

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->delete();
        Quotes::create(array('from' => 'GRU', 'to' => 'BRC', 'price' => '10'));
        Quotes::create(array('from' => 'GRU', 'to' => 'SCL', 'price' => '18'));
        Quotes::create(array('from' => 'GRU', 'to' => 'ORL', 'price' => '56'));
        Quotes::create(array('from' => 'GRU', 'to' => 'CDG', 'price' => '75'));
        Quotes::create(array('from' => 'SCL', 'to' => 'ORL', 'price' => '20'));
        Quotes::create(array('from' => 'BRC', 'to' => 'SCL', 'price' => '5'));
        Quotes::create(array('from' => 'ORL', 'to' => 'CDG', 'price' => '5'));
    }
}