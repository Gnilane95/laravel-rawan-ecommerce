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
        Schema::create('abaya_hommes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->decimal('regular_price',8,2);
            $table->decimal('sale',8,2);
            $table->string('SKU');
            $table->unsignedInteger('stock')->default(15);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('url_img');
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
        Schema::dropIfExists('abaya_hommes');
    }
};
