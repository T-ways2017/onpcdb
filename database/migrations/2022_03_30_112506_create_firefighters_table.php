<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirefightersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firefighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subname');
            $table->date('birthday');
            $table->string('sex',1);
            $table->string('email')->unique();
            $table->string('cv');
            $table->string('rib');
            $table->string('picture');
            $table->string('more');
            

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
        Schema::dropIfExists('firefighters');
    }
}
