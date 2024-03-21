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
            $table->bigIncrements('id');
            $table->integer('stock_no')->unsigned();
            $table->string('unit')->nullable();
            $table->string('item_description');
            $table->integer('quantity');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->enum('department', ['CHASS', 'CET', 'CN', 'CS', 'CISTM']);
            $table->bigInteger('pr_no')->unsigned();
            $table->date('pr_date');
            $table->string('section');
            $table->integer('sai_no')->unsigned();
            $table->date('sai_date');
            $table->string('requested');
            $table->string('designation');
            $table->string('purpose');
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('pr_no')->references('id')->on('purchase_requests')->onDelete('cascade');
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
