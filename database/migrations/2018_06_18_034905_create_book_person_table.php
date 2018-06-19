<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_person', function (Blueprint $table) {
            $table->integer('book_id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->integer('alternate_person_name_id')->unsigned()->nullable();
            $table->integer('role')->unsigned()->nullable();
            $table->integer('order')->default(1)->unsigned();
            $table->timestamps();

            $table->foreign('book_id')
                  ->references('id')->on('books')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('person_id')
                  ->references('id')->on('persons')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('alternate_person_name_id')
                  ->references('id')->on('alternate_person_names')
                  ->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_person');
    }
}
