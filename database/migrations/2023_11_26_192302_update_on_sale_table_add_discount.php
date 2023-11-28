<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOnSaleTableAddDiscount extends Migration
{
    public function up()
    {
        Schema::table('on_sale', function (Blueprint $table) {
            $table->decimal('discount', 5, 2)->nullable()->after('time_till_sale');
        });
    }

    public function down()
    {
        Schema::table('on_sale', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
}
