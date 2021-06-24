<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("full_name")->nullable();

            $table->string("email")->nullable();

            $table->string("phone")->nullable();

            $table->string("address")->nullable();

            $table->string("blood_group")->nullable();

            $table->string("details")->nullable();

            $table->string("vaccine_ind")->nullable();
            $table->string("test_ind")->nullable();
            $table->string("covid_ind")->nullable();
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
        Schema::dropIfExists('covid_registrations');
    }
}
