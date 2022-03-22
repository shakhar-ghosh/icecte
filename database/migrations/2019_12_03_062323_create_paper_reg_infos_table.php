<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperRegInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_reg_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author_name',100);
            $table->string('author_category',100);
            $table->integer('paper_id',200);
            $table->string('email',100);
            $table->string('payment_doc',200);
            $table->string('ieee_doc',200);
            $table->string('author_verification_doc',200);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper_reg_infos');
    }
}
