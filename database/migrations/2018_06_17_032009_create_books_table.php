<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('alternate_name')->nullable();
            $table->string('isbn_13')->nullable();
            $table->string('isbn_10')->nullable();
            $table->integer('copyright_year')->unsigned()->nullable();
            $table->integer('reprint')->nullable();
            $table->integer('volume_number')->nullable();
            $table->longText('description')->nullable();
            $table->integer('number_of_page')->nullable();
            $table->date('date_published')->nullable();
            $table->date('date_printed')->nullable();
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
        Schema::dropIfExists('books');
    }
}
