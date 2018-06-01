<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBusImagesTable.
 */
class CreateBusImagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bus_images', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id')->unsigned();
            $table->string('image');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('order');
            $table->timestamps();

            $table->foreign('bus_id')
                ->references('id')
                ->on('bus_sales')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bus_images');
	}
}
