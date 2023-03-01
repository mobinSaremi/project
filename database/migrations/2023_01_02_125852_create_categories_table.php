<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->boolean('status');
            $table->string('icon');
            $table->string('h1');
            $table->string('title_seo');
            $table->text('description_seo');
            $table->string('url');
            $table->integer ('parent_id');
            $table->timestamp('created_at');
            $table->timestamp('deleted_at');
            $table->timestamp('updated_at');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
