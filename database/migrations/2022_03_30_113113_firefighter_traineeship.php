<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FirefighterTraineeship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firefighter_traineeship', function (Blueprint $table) {
            $table->id();
            $table->foreignId('firefightr_id')->constrainer()->onDelete('restrict'); 
            $table->foreignId('traineeship_id')->constrainer()->onDelete('restrict');
            $table->string('placing');
            $table->date('period');
            $table->string('detail');
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
}
