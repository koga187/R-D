<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Teesting\DatabaseTransactions;

class QuoteTest extends TestCase
{
    public function testV1GetQuoteById() {
        $this->json('GET', '/v1/quote/1')
             ->seeJson(
                [
                    'from' => 'BRC',
                    'to' => 'BA',
                    'price' => 10
                ]);
    }


    public function testV1GetQuotes() {
        $this->json('GET', '/v1/quote')
             ->seeJson(
                [
                    'from' => 'BRC',
                    'to' => 'BA',
                    'price' => 10
                ]);

        $this->json('GET', '/v1/quote')
             ->seeJson(
                [
                    'from' => 'GRU',
                    'to' => 'CDG',
                    'price' => 75
                ]);
    }


    /**
     * insert quote withou Price.
     *
     * @return void
     */
    public function testV1InsertQuoteWithoutPrice()
    {
        $this->json('POST', '/v1/quote/', [
            'from' => 'BRC',
            'to' => 'BA',
            'price' => 10])
             ->seeJson([
                'created' => true,
             ]);
    }
}
