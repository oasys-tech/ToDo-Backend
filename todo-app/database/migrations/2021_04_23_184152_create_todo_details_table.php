<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('to_do_id')
            ->references('id')
            ->on('to_dos')
            ->onDelete('cascade');
            $table->string('name');
            $table->boolean('completed_flag');
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
        Schema::dropIfExists('to_do_details');
    }
}
