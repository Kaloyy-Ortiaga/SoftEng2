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
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column 'id'
            $table->date('date_created');
            $table->string('pr_no')->unique();
            $table->enum('department', ['CHASS', 'CET', 'CN', 'CS', 'CISTM']);
            $table->enum('status', ['denied', 'approved', 'pending']);
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_requests');
    }
};
