<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('ticket_id')->unique();
            $table->mediumInteger('from');
            $table->mediumInteger('to');
            $table->string('title',120);
            $table->string('subject',50);
            $table->text('body');
            $table->boolean('answear')->default(0);
            $table->boolean('close')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
