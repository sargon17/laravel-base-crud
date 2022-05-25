<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comics", function (Blueprint $table) {
            $table->id();
            $table->string("title", 80);
            $table->longText("description")->nullable();
            $table->string("image");
            $table->decimal("price", 8, 2);
            $table->string("series", 80);
            $table->date("sale_date");
            $table->string("type", 80);
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
        Schema::dropIfExists("comics");
    }
}
