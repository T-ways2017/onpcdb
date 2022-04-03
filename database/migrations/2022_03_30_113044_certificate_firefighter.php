<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CertificateFirefighter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_firefighter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certificate_id')->constrainer()->onDelete('restrict'); 
            $table->foreignId('firefighter_id')->constrainer()->onDelete('restrict');
            $table->date('date_certif');
            $table->string('place');
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
