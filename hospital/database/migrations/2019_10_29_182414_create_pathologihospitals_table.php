<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathologihospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathologihospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name',100);
            $table->string('date',100);
            $table->string('pathologist_name',100);
            $table->string('time',100);
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
        Schema::dropIfExists('pathologihospitals');
    }
}
