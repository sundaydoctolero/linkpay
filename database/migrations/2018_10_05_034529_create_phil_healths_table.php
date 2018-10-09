<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhilHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('philhealth_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monthly_basic_salary_from',10,2);
            $table->decimal('monthly_basic_salary_to',10,2);
            $table->decimal('employee_share',10,2);
            $table->decimal('employer_share',10,2);
            $table->decimal('total_amount',8,2);
            $table->decimal('percentage',8,2);
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
        Schema::drop('philhealth_contributions');
    }
}
