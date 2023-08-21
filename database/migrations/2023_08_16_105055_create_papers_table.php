<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id('paper_id');
            $table->unsignedBigInteger('paper_no');
            $table->string(('paper_title'));
            $table->string(('page_no'));
            $table->string('authors');
            $table->string('vol_no');
            $table->string('issue_no');
            $table->timestamps();

            $table->foreign('vol_no')->references('vol_no')->on('volumes');


        });
        Schema::create('papers', function (Blueprint $table) {
            $table->id('paper_id');
            $table->unsignedBigInteger('paper_no');
            $table->string(('paper_title'));
            $table->string(('page_no'));
            $table->string('authors');
            $table->string('vol_no');
            $table->string('issue_no');


            $table->foreign('vol_no')->references('vol_no')->on('volumes');
            $table->foreign('issue_no')->references('issue_no')->on('issues');

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
        Schema::dropIfExists('papers');
    }
};
