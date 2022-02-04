<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('user_id_blocker');
            $table->unsignedBigInteger('user_id_blocked');
            $table->timestamps();
            $table->foreign('user_id_blocker')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_blocked')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
