<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanKhusus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_khusus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->timestamps();
            $table->text('activity_name');
            $table->text('activity_desc');
            $table->text('activity_solution')->nullable();
            $table->integer('duration_date');
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
        Schema::dropIfExists('laporan_khusus');
    }
}
