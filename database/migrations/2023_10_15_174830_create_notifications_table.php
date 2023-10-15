<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationsTable extends Migration {

	public function up()
	{
		Schema::create('notifications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('client_id')->nullable();
			$table->text('details')->nullable();
			$table->integer('receive_id');
		});
	}

	public function down()
	{
		Schema::drop('notifications');
	}
}