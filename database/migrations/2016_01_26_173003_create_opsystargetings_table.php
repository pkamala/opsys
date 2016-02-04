<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpsystargetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opsystargetings', function (Blueprint $table) {
            $table->string('Round');
            $table->string('Village');
            $table->string('Personnel');
            $table->Date('Start Date');
            $table->Date('End Date');
            $table->string('Complete');
            $table->string('Incomplete');
            $table->string('reason');
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
        Schema::drop('opsystargetings');
    }
}
