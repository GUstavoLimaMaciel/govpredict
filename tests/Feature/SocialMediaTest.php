<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SocialMediaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListFilterName()
    {
        $response = $this->put('/social-media', ['personName' => 'Amorim']);

        $response->assertStatus(200)->assertJson([
            'socialNetworkId' => 1,
            'person' => 'Renato Amorim',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ]);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListFilterSocialNetwork()
    {
        $response = $this->put('/social-media', ['socialNetwork' => ]);

        $response->assertStatus(200)->assertJson([
            'socialNetworkId' => 1,
            'person' => 'Maria Lucia da Silva',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Renato Amorim',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Gustavo Maciel',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Alucard de Almeida Neto',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ]);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListFilterDate()
    {
        $response = $this->put('/social-media', ['minDate' => '2021-04-15']);

        $response->assertStatus(200)->assertJson([
            'socialNetworkId' => 1,
            'person' => 'Maria Lucia da Silva',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 2,
            'person' => 'Maria Lucia da Silva',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://twitter.com/jovemnerd/status/1383073849282064385'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Renato Amorim',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 2,
            'person' => 'Ricardo Lucio',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://twitter.com/jovemnerd/status/1383073849282064385'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Gustavo Maciel',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],
        [
            'socialNetworkId' => 2,
            'person' => 'Ana Paula Dias',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://twitter.com/jovemnerd/status/1383073849282064385'
        ],
        [
            'socialNetworkId' => 1,
            'person' => 'Alucard de Almeida Neto',
            'date' => Carbon::now()->timestamp,
            'postLink' => 'https://pt-br.facebook.com/pg/jovemnerd/posts/?ref=page_internal'
        ],);
    }
}
