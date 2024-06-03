<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->date('POdate_created');
            $table->string('supplier');
            $table->string('tel_no');
            $table->date('po_date');
            $table->string('address');
            $table->string('tin');
            $table->string('mop');
            $table->string('po_auth');
            $table->string('po_authPos');
            $table->string('po_cfa');
            $table->string('po_cfapos');
            $table->enum('po_status', ['pending', 'delayed', 'complete']);
            $table->string('po_word');
            $table->string('po_place');
            $table->date('po_dateod');
            $table->string('po_validity');
            $table->string('po_term');
            $table->string('po_number')->unique();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('create_prs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
}
