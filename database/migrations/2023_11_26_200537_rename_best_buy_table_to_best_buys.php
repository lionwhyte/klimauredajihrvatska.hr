<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameBestBuyTableToBestBuys extends Migration
{
    public function up()
    {
        Schema::rename('best_buy', 'best_buys');
    }

    public function down()
    {
        Schema::rename('best_buys', 'best_buy');
    }
}
