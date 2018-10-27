<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanAkhirDraft extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_akhir_draft', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->timestamps();
            $table->string('activity');
            $table->dateTime('duration_date');
            $table->string('pinalty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_akhir_draft');
    }
}
