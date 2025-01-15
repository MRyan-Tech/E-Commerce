<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("price");
            $table->text("description");
            $table->timestamps();
            $table->unsignedBigInteger("storage_id")->default(null);
            $table->foreign("storage_id")->references("id")->on("products");
            $table->date("deleted_at")->default("null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
