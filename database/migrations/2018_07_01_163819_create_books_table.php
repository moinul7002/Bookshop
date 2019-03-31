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
            $table->string('book_isbn');
            $table->string('book_type');
            $table->string('country');
            $table->string('book_title');
            $table->string('book_author');
            $table->string('book_description');
            $table->string('feature');
            $table->string('book_of_the_month')->nullable();
            $table->string('year');
            $table->string('book_image')->default('book.png');
            $table->string('publication');
            $table->integer('book_price');
            $table->integer('book_number');
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
