<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBIRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('witholding_taxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salary_type');
            $table->decimal('compensation_range_from',10,2);
            $table->decimal('compensation_range_to',10,2);
            $table->decimal('fixed_tax',8,2);
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
        Schema::drop('witholding_taxes');
    }
}
