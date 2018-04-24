<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembalis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_kembali');
            $table->integer('jumlah_hari');
            $table->integer('telat');
            $table->integer('total_harga');
            $table->integer('denda');

            $table->integer('sewa_id')->unsigned();
            $table->foreign('sewa_id')->references('id')
                    ->on('detailsewas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
           
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
        Schema::dropIfExists('kembalis');
    }
}
