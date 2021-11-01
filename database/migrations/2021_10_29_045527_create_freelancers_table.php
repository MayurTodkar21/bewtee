<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline');
            $table->string('location');
            $table->string('typeIn');
            $table->int('experience');
            $table->string('category');
            $table->string('skills');
            $table->string('travel');
            $table->string('productUsed');
            $table->string('profilePhote');
            $table->int('onTime');
            $table->string('fnq');
            $table->int('member_id');
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
        Schema::dropIfExists('freelancers');
    }
}
