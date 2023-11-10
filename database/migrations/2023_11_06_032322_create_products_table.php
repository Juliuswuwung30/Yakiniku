<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * wet ass pus
     */
    public function up(): void
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->string('name');
        //     $table->text('description');
        //     $table->string('type');
        //     $table->integer('price');
        //     $table->string('image');

        //     $table->foreign('type')->references('name')->on('categories');

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
