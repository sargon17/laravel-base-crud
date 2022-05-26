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
            $table->string("title", 80)->default("Untitled");
            $table->longText("description")->nullable();
            $table
                ->string("image")
                ->default(
                    "https://images.unsplash.com/photo-1601645191163-3fc0d5d64e35?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735"
                );
            $table->decimal("price", 8, 2)->nullable();
            $table->string("series", 80)->nullable();
            $table->date("sale_date")->nullable();
            $table->string("type", 80)->nullable();
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
