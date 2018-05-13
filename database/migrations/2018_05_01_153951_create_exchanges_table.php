<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('picture_id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('title_price');
            $table->text('location');    
            $table->text('owner');    
            $table->text('kind_of');    
            $table->text('legal_status');    
            $table->text('area_used');    
            $table->text('direction');    
            $table->text('contact');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}
