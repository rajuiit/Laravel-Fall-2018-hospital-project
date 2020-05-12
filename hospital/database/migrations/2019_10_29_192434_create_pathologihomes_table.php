<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathologihomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathologihomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catagory',100);
            $table->string('pathology_name',100);
            $table->string('time',100);
            $table->string('date',100);
            $table->string('patient_name',100);
            $table->integer('age');
            $table->string('gender',100);
            $table->string('address',100);
            $table->string('number',100);
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
        Schema::dropIfExists('pathologihomes');
    }
}
