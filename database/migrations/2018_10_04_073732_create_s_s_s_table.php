<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sss_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('salary_from', 10, 2);
            $table->decimal('salary_to', 10, 2);
            $table->decimal('salary_credit', 8, 2);
            $table->decimal('employer_share', 8, 2);
            $table->decimal('employee_share', 8, 2);
            $table->decimal('sss_total', 10, 2);
            $table->decimal('employer_ec_share', 8, 2);
            $table->decimal('employer_share_total', 10, 2);
            $table->decimal('employee_share_total', 10, 2);
            $table->decimal('total_contribution', 10, 2);
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
        Schema::drop('sss_contributions');
    }
}
