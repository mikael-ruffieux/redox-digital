<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->boolean('archived')->default(false);
            $table->text('custom_summary')->nullable();
            $table->text('external_url')->nullable();
            $table->date('date'); //

            $table->text('context_title')->nullable();
            $table->text('context_desc'); //

            $table->text('video_source')->nullable();
            $table->text('video_url')->nullable();

            $table->text('design_desc')->nullable();

            $table->text('solution_title')->nullable();
            $table->text('solution_desc'); //
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
            Schema::table('projects', function(Blueprint $table) {
                $table->dropForeign('project_client_id_foreign');
            });
        }
        Schema::dropIfExists('projects');
    }
}
