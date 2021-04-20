<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoryProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id')->unsigned();
            $table->integer('project_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('project_id')->references('id')->on('projects')
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
            Schema::table('category_project', function (Blueprint $table) {
                $table->dropForeign(['category_id']);
                $table->dropForeign(['project_id']);
            });
        }
        Schema::dropIfExists('category_project');
    }
}
