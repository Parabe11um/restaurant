<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('r_id');
            $table->integer('r_restHolderId');
            $table->string('r_name',50);
            $table->string('r_description', 500);
            $table->string('r_picture')
                ->nullable();
            $table->integer('r_inn');
            $table->bigInteger('r_phone')
                ->nullable();
            $table->string('r_address')
                ->nullable();
            $table->string('r_site')
                ->nullable();
            $table->string('r_email')
                ->nullable();
            $table->json('r_tables');
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
        Schema::dropIfExists('restaurants');
    }
}
