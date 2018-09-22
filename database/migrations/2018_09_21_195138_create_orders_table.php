<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('academicLevel')->nullable();
            $table->string('typeOfPaper')->nullable();
            $table->string('discipline')->nullable();
            $table->string('topic')->nullable();
            $table->string('paperInstruction')->nullable();
            $table->string('additionalMaterial')->nullable();
            $table->string('paperFormat')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->string('pages')->nullable();
            $table->string('spacing')->nullable();
            $table->string('sources')->nullable();
            $table->string('charts')->nullable();
            $table->string('slides')->nullable();
            $table->string('writerCategory')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->integer('paid')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
