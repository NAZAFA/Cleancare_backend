<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->mediumText('review');
			$table->integer('client_id');
			$table->integer('service_id');
			$table->enum('rating', array('1', '2', '3', '4', '5'));
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}