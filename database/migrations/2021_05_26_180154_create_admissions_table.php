<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string("full_name")->nullable();

            $table->string("g_name")->nullable();

            $table->string("phone")->nullable();

            $table->string("age")->nullable();

            $table->string("address")->nullable();
            $table->string("condition")->nullable();

            $table->string("blood_group")->nullable();

            $table->string("s_details")->nullable();

            $table->string("bed")->nullable();
            $table->string("ward")->nullable();
            $table->string("admission_fee")->nullable();
            $table->string("bed_fee")->nullable();
            $table->string("service_charge")->nullable();

            $table->string("dis_ind")->nullable();
            $table->string("vaccine_ind")->nullable();
            $table->string("image")->nullable();

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
        Schema::dropIfExists('admissions');
    }
}
