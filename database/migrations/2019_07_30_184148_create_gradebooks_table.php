<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradebooksTable extends Migration
{
    public function up()
    {
        Schema::create('gradebooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->unsignedBigInteger('professor_id')->unsigned()->nullable();
            $table->foreign('professor_id')
                ->references('id')->on('professors')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gradebooks');
    }
}
