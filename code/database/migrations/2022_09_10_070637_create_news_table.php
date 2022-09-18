<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use NunoMaduro\Collision\Adapters\Phpunit\State;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title', 255);
            $table->string('spoiler', 350);
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('autor', 150)->nullable();
            $table
                ->enum('status', ['DRAFT', 'PUBLISHED', 'BLOCKED', 'ARCHIVE'])
                ->default('DRAFT');
            $table->timestamps();

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
