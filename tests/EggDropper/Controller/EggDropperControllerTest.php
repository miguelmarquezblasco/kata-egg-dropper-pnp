<?php

namespace App\Tests\EggDropper\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EggDropperControllerTest extends WebTestCase
{
    /**
     * Visitamos la home y obtenemos un código 200 y el contenido esperado
     */
    public function testHome()
    {
        $content = '{"title":"Egg Dropper","values":{"basic":100,"intermediate":14,"hard":0}}';
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($content, $client->getResponse()->getContent());
    }

    /**
     * Visitamos la home pasando la cantidad de huevos y plantas y obtenemos
     * un código 200 y el contenido esperado
     */
    public function testHomeWithParams()
    {
        $content = '{"title":"Egg Dropper","values":{"basic":100,"intermediate":14,"hard":8}}';
        $client = static::createClient();
        $client->request('GET', '/2/30');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($content, $client->getResponse()->getContent());
    }

    /**
     * Visitamos la home pasando solo la cantidad de huevos (1er parámetro) y
     * obtenemos un código 200 y el contenido esperado
     */
    public function testHomeWithOnlyEggsParam() {
        $content = '{"title":"Egg Dropper","values":{"basic":100,"intermediate":14,"hard":0}}';
        $client = static::createClient();
        $client->request('GET', '/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($content, $client->getResponse()->getContent());
    }
}
