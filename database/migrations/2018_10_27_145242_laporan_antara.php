<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanAntara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_antara', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id');
            $table->timestamps();
            $table->string('activity_id');
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
        Schema::dropIfExists('laporan_antara');
    }
}
