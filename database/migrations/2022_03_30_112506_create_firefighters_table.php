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
            $table->tinyText('sex');
            $table->string('email')->unique();
            $table->string('phone1');
            $table->string('phone2');
            $table->string('cv');
            $table->string('rib');
            $table->string('picture');
            $table->string('more');
                   
            //$table->foreign('center_id')->references('id')->on('centers');
            //$table->foreign('category_id')->references('id')->on('categories');
            //$table->foreign('department_id')->references('id')->on('departments');
            $table->foreignId('center_id')->constrainer()->onDelete('restrict');
            $table->foreignId('category_id')->constrainer()->onDelete('restrict');
            $table->foreignId('department_id')->constrainer()->onDelete('restrict');
            $table->foreignId('promotion_id')->constrainer()->onDelete('restrict');
            

                     
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
