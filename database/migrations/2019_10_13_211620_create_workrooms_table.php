<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workrooms', function (Blueprint $table) {
            $table->bigIncrements('room_no');
            $table->integer('user_id');
            $table->string('category');
            $table->text('address');
            $table->integer('capacity');
            $table->boolean('is_available')->default(True);
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
        Schema::dropIfExists('workrooms');
    }
}
