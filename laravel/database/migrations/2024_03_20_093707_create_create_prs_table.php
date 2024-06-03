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
            $table->unsignedBigInteger('purchase_request_id');
            $table->enum('department', ['CHASS', 'CET', 'CN', 'CS', 'CISTM']);
            $table->string('pr_no')->nullable(); // Make pr_no nullable
            $table->date('pr_date')->nullable();;
            $table->string('section');
            $table->string('sai_no')->unique()->nullable();// Make sai_no nullable
            $table->date('sai_date')->nullable();;
            $table->string('requested_by');
            $table->string('designation');
            $table->string('purpose'); 
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->string('approved_by')->nullable(); 
            $table->string('approved_designation')->nullable(); 
            $table->text('note')->nullable(); 
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('pr_no')->references('pr_no')->on('purchase_requests')->onDelete('set null');
            $table->foreign('purchase_request_id')->references('id')->on('purchase_requests')->onDelete('cascade');
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
