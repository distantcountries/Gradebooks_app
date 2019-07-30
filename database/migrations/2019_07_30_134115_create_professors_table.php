<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->bigIncrements('id'); //proveriti da li je professor zapravo user
            $table->string('firstName');
            $table->string('lastName');
            $table->string('image');

            $table->unsignedBigInteger('gradebook_id');
            $table->foreign('gradebook_id')
                ->references('id')->on('gradebooks')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
