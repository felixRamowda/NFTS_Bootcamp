<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

//


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->char('title');
            $table->text('description');
            $table->decimal('royalties')->nullable();
            $table->decimal('size');
            $table->foreignId('collection_id')->references('id')->on('collections'); //
            $table->foreignId('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('items');
        // Eliminar las imágenes en la ruta Storage/Media cuando haga migrate:fresh
        $path = storage_path('app/public/Media');
        File::deleteDirectory($path);

    }
};