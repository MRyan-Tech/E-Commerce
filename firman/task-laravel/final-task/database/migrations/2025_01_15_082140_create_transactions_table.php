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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->integer("gross_amount");
            $table->integer("qty_order");
            $table->string("transaction_id")->default(null);
            $table->string("token");
            $table->string("pending");
            $table->foreignId("user_id")->constrained(
                table: "users", indexName: "transactions_user_id"
            );
            $table->foreignId("product_id")->constrained(
                table: "products", indexName: "transactions_product_id"
            );
            $table->string("note_refund")->default(null);
            $table->date("refund_date")->default(null);
            $table->date("deleted_at")->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
