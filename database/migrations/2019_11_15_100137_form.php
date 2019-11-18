<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Form extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->string('starting_date');
            $table->string('current_link');
            $table->string('production_urlserver');
            $table->string('test_serverurl');
            $table->string('database_technology');
            $table->string('font_technology');
            $table->string('number_deliveries');
            $table->string('number_ofdays');
            $table->string('name_developer');
            $table->string('date_report');
            $table->string('Hour_report');
            $table->rememberToken();
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
