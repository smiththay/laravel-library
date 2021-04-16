<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            
            $table->id();
          
            $table->unsignedBigInteger('ref_user_id');
            $table->foreign('ref_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('ref_book_id');
            $table->foreign('ref_book_id')->references('id')->on('books');

            //$table->foreignId('user_id')->constrained();        //integer('ref_user_id');
           // $table->foreignId('book_id')->constrained();       //integer('ref_book_id');
            $table->datetime("checkout_date");
            $table->datetime("due_date");
            $table->datetime("return_date");
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
        Schema::dropIfExists('checkouts');
    }
}
