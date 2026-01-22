<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityAccessTest extends WebTestCase
{
    public function testAccessNewReservation(): void
    {
        $client = static::createClient();
        $client->request('GET', '/reservation/new');

        $this->assertResponseRedirects('/login');
    }
    // public function testAccessNewTrajet(){
    //     $cliet = static::createClient();
    //     $cliet->request('GET','/trajet/new');
    //     $this->assertResponseRedirects('/login');
    // }
}
