<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('details');
			$table->double('price');
			$table->integer('user_id')->unsigned();
			$table->integer('service_type_id');
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}