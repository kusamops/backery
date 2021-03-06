<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned()->index();
			$table->string('title');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->string('photo')->nullable()->default("https://avatanplus.com/files/resources/mid/57de41539df151573c2f2ebf.png");
			$table->timestamps();

			$table->foreign('category_id')
                ->references('id')
                ->on('categories')
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
		Schema::dropIfExists('items');
	}
}
