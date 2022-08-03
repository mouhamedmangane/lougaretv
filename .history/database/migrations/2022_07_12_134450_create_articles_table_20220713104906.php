<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_lecteur')->default(0);
            $table->string('type');
            $table->string('image');
            $table->string('categorie_id);
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('redacteur_id');
            $table->foreign('redacteur_id')->references('id')->on('redacteurs')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
