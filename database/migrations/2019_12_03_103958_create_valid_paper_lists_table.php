<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidPaperListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valid_paper_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('paper_id',100);
            $table->string('paper_title',400);
            //$table->string('corresponding_author',100);
            $table->timestamps();
            $table->string('admin_name',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valid_paper_lists');
    }
}
