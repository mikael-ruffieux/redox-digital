<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('project_url');
            $table->string('categories');
            $table->text('desc');
            $table->string('image');
            $table->date('date');
            $table->integer('client_id');
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('c_v_projects', function(Blueprint $table) {
                $table->dropForeign('c_v_project_client_id_foreign');
            });
        }
        Schema::dropIfExists('c_v_projects');
    }
}
