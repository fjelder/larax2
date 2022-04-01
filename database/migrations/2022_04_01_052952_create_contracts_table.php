<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('shortName');
            $table->mediumText('taskName');
            $table->string('contractNumber');
            $table->string('prefix', 100)->nullable();
            $table->date('startTime');
            $table->date('stopTime');
            $table->unsignedBigInteger('contractStageId');
            $table->unsignedBigInteger('contractStudyId')->nullable();
            // $table->foreign('contract_status_id')->references('id')->on('contract_statuses');
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
        Schema::dropIfExists('contracts');
    }
}
