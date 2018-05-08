<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBusSalesTable.
 */
class CreateBusSalesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bus_sales', function(Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer'); //Fabricante
            $table->string('bodyModel'); //Carroceria
            $table->integer('year');
            $table->integer('seatings');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bus_sales');
	}
}
