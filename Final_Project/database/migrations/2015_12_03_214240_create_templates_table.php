<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Templates', function(Blueprint $table)
		{
			$table->increments('id');
            $table->timestamps('created_at');
            $table->text('description');
            $table->string('name');
            $table->string('active');
            $table->string('css');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Templates');
	}

}