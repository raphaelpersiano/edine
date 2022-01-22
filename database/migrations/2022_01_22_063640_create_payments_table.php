<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meja_id')->constrained('mejas')->onDelete('cascade');
            $table->longText('metadata')->nullable();
            $table->integer('total_harga')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->enum('status_pembayaran', ['pending', 'sukses', 'gagal'])->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
