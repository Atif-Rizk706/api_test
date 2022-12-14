<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewiers', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on("products")->onDelete("cascade");
            $table->string('customer');
            $table->text('review');
            $table->integer('star');

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
        Schema::dropIfExists('rewiers');
    }
}
