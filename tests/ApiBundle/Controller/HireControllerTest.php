<?php

namespace Tests\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use GuzzleHttp\Client;

class HireControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);

        $data = [];
        $response = $client->request('GET', '/api/v1/hire', $data);

        $this->assertEquals(200, $response);
    }

    public function testCGet()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('GET', '/api/v1/hires');

        $this->assertEquals(200, $response);
    }


    public function testPost()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('POST', '/api/v1/hires');

        $this->assertEquals(201, $response);
    }

    public function testPut()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('PUT', '/api/v1/hires');

        $this->assertEquals(204, $response);
    }


    public function testPatch()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('PATCH', '/api/v1/hires');

        $this->assertEquals(204, $response);
    }

    public function testDelete()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('DELETE', '/api/v1/hires');

        $this->assertEquals(204, $response);
    }

    public function testGetByCar()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('GET', '/api/v1/hires');

        $this->assertEquals(200, $response);
    }

    public function testMarkAvgPoint()
    {
        $client = new Client(['base_uri' => 'http://autocrm.loc/']);
        $response = $client->request('GET', '/api/v1/hires');

        $this->assertEquals(200, $response);
    }
}

