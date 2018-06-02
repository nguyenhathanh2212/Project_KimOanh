<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('over_views', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('preview');
            $table->longText('position');
            $table->longText('investment');
            $table->longText('area');
            $table->longText('structure');
            $table->longText('utility_local');
            $table->longText('utility_link');
            $table->longText('contract');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('over_views');
    }
}
