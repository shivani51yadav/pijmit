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
        Schema::create('pijmit_issues', function (Blueprint $table) {
            $table->id();
            $table->string('vol_no');
            $table->string('issue_no');
            $table->string('year') -> nullable();
            $table->string('paper_title');
            $table->string('authors');
            $table->string('page_nos');
            $table->string('issue_type');
            $table->string('created_by');
            $table->string('modified_by')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('pijmit_issues');
    }
};
