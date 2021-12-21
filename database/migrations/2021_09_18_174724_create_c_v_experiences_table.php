<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvexperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job');
            $table->string('period');
            $table->string('company');
            $table->string('company_url')->nullable();
            $table->string('place');
            $table->text('desc');
            $table->string('filters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_v_experiences');
    }
}
