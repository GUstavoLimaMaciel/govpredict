<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class FillSocialMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('social_media')->insert(
            [
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
            ],
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
