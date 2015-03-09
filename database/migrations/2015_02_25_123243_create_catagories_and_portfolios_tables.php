<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesAndPortfoliosTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('catagories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('');
            $table->string('description')->default('');
            $table->string('created_by')->default('');
            $table->string('modified_by')->default('');
            $table->timestamps();
        });
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catagories_id')->unsigned()->default(0);
            $table->foreign('catagories_id')->references('id')->on('catagories')->onDelete('cascade');
            $table->string('title')->default('');
            $table->string('description')->default('');
            $table->boolean('status')->default(false);
            $table->string('created_by')->default('');
            $table->string('modified_by')->default('');
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
        Schema::drop('portfolios');
        Schema::drop('catagories');
    }

}
