<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    private $client;

    public function setUp()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8080'
        ]);
    }

    public function testIndex()
    {
        $expected = 'Welcome to Hexlet!';
        $response = $this->client->get('/');
        $this->assertSame($expected, $response->getBody()->getContents());
    }
}
