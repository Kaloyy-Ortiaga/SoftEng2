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
        Schema::create('create_prs', function (Blueprint $table) {
            $table->id();
            $table->string('stock_no');
            $table->string('unit')->nullable();
            $table->string('item_description');
            $table->integer('quantity');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->enum('department', ['CHASS', 'CET', 'CN', 'CS', 'CISTM']);
            $table->string('pr_no');
            $table->date('pr_date');
            $table->string('section');
            $table->string('sai_no');
            $table->date('sai_date');
            $table->string('requested_by');
            $table->string('designation');
            $table->string('purpose');
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('pr_no')->references('pr_no')->on('purchase_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_prs');
    }
};
