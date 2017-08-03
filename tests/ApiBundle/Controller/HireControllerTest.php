<?php

namespace Tests\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use GuzzleHttp\Client;

class HireControllerTest extends WebTestCase
{
    const URL_API = 'http://autocrm.loc';

    private $client;

    public function setUp()
    {
        $this->client = new Client(['base_uri' => self::URL_API]);
    }

    public function testGet()
    {
        $response = $this->client->request('GET', '/api/v1/hires');
        $this->assertEquals(200, $response->getStatusCode());
        $contentType = $response->getHeaders()["Content-Type"][0];
        $this->assertEquals("application/json", $contentType);
    }

    public function testCGet()
    {
        $response = $this->client->request('GET', '/api/v1/hires/1');
        $this->assertEquals(200, $response->getStatusCode());
    }


    public function testPost()
    {
        $data = ['json' => [
            'id' => '1',
            'startDate' => '01.09.2017',
            'endDate' => '01.09.2017',
            'status' => 0,
            'cost' => 2800,
            'car' => 1,
            'point' => 1,
            'customer' => 1,
            'worker' => 1
        ]];

        $response = $this->client->request('POST', '/api/v1/hires', $data);
        $this->assertEquals(201, $response->getStatusCode());
    }


    public function testPut()
    {
        $data = ['json' => [
            'id' => '1',
            'startDate' => '01.09.2017',
            'endDate' => '01.09.2017',
            'status' => 0,
            'cost' => 2800,
            'car' => 1,
            'point' => 1,
            'customer' => 1,
            'worker' => 1
        ]];

        $response = $this->client->request('PUT', '/api/v1/hires/1', $data);
        $this->assertEquals(204, $response->getStatusCode());
    }


    public function testPatch()
    {
        $data = ['json' => [
            'id' => '1',
            'startDate' => '01.09.2017',
            'endDate' => '01.09.2017',
            'status' => 0,
            'cost' => 2800,
            'car' => 1,
            'point' => 1,
            'customer' => 1,
            'worker' => 1
        ]];

        $response = $this->client->request('PATCH', '/api/v1/hires/1', $data);
        $this->assertEquals(204, $response->getStatusCode());
    }


    public function testDelete()
    {
        $response = $client->request('DELETE', '/api/v1/hires/1');
        $this->assertEquals(204, $response->getStatusCode());
    }

    public function testGetByCar()
    {
        $response = $this->client->request('GET', '/api/v1/hires/1/by/car');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testMarkAvgPoint()
    {
        $response = $this->client->request('GET', '/api/v1/hires/avgs/points/mark');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function tearDown()
    {
        $this->client = null;
    }
}

