<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_t_restaurant', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name", 100);
            $table->unsignedBigInteger('price');
            $table->string('img');
            $table->string('description');
            $table->string("category", 100);
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
        //
    }
};
