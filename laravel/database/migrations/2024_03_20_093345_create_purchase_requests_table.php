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
            $table->id(); 
            $table->date('date_created');
            $table->string('pr_no')->unique()->nullable(); 
            $table->enum('department', ['CHASS', 'CET', 'CN', 'CS', 'CISTM']);
            $table->enum('status', ['denied', 'approved', 'pending']);
            $table->timestamps(); 
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