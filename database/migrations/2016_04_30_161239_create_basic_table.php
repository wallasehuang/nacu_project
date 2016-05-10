<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nccu_music', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('page');
            $table->integer('count')->default(0);
            $table->string('img')->default('img/img_1.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nccu_music');
    }
}
