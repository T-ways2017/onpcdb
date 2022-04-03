<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FirefighterSpeciality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firefighter_speciality', function (Blueprint $table) {
            $table->id();
            $table->foreignId('firefightr_id')->constrainer()->onDelete('restrict'); 
            $table->foreignId('speciality_id')->constrainer()->onDelete('restrict');
            $table->string('place');
            $table->date('date_spec');
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
