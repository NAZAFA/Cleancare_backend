<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentTable extends Migration {

	public function up()
	{
		Schema::create('appointment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('service_id');
			$table->datetime('startDate');
			$table->datetime('endDate');
			$table->double('price');
			$table->enum('status', array('Pending', 'InProcess', 'Done', 'cancel'));
			$table->boolean('is_pay')->nullable()->default(0);
			$table->text('client_note')->nullable();
			$table->text('provider_note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('appointment');
	}
}