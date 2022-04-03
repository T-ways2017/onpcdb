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
            $table->string('phone1');
            $table->string('phone2');
            $table->string('cv');
            $table->string('rib');
            $table->string('picture');
            $table->string('more'); 
            //foreign keys Center
            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')
            ->reference('id')
            ->on('centers')
            ->onDelete('restrict')
            ->onUpdate('restrict');   
            //other method
            //$table->foreignId('center_id')->constrained();
            //       
            //foreign keys Department
            $table->unsignedBigInteger('department_id');
            $table->foreign('departement_id')
            ->reference('id')
            ->on('departments')
            ->onDelete('restrict')
            ->onUpdate('restrict');  

            //foreign keys Category
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
            ->reference('id')
            ->on('categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');  

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
