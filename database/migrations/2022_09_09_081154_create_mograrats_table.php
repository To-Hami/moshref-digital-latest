<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMograratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mograrats', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('specialty')->nullable();
            $table->string('entry_year')->nullable();
            $table->string('id_number')->nullable();
            $table->string('birth')->nullable();
            $table->string('status')->nullable();
            $table->string('date_of_com')->nullable();

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
        Schema::dropIfExists('mograrats');
    }
}
