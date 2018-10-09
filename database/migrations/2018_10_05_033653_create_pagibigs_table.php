<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagibigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagibig_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monthly_compensations_from',10,2);
            $table->float('monthly_compensations_To',10,2);
            $table->double('employee_share',8,2);
            $table->double('employer_share',8,2);
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
        Schema::drop('pagibig_contributions');
    }
}
