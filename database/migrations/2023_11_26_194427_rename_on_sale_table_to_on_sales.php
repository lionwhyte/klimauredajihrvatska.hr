<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOnSaleTableToOnSales extends Migration
{
    public function up()
    {
        Schema::rename('on_sale', 'on_sales');
    }

    public function down()
    {
        Schema::rename('on_sales', 'on_sale');
    }
}
