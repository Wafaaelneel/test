<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddfriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addfriends', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->bigInteger('user_id_send')->unsigned();
            $table->bigInteger('user_id_receive')->unsigned();
            $table->timestamps();
            $table->foreign('user_id_send')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_receive')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addfriends');
    }
}
