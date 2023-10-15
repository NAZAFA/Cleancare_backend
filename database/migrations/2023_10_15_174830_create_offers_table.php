<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('service_id');
			$table->double('price', 8.2)->nullable();
			$table->datetime('from');
			$table->datetime('to');
			$table->boolean('is_close')->default(0);
			$table->integer('user_id');
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}
}