<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
         $table->increments('id');
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
         $table->enum('status', array('A','I','C','D'))->nullable()->change();
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
        Schema::dropIfExists('issues');
    }
}
