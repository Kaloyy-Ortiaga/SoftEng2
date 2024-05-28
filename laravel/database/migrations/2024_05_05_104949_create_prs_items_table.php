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
        Schema::create('prs_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('create_pr_id');
            $table->unsignedBigInteger('item_no')->nullable();
            $table->string('stock_no');
            $table->string('unit')->nullable();
            $table->string('item_description');
            $table->integer('quantity');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->timestamps();
            $table->foreign('create_pr_id')->references('id')->on('create_prs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prs_items');
    }
};
