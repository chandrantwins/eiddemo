<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Projects', function (Blueprint $table) {			
			$table->increments('id');
			$table->unsignedInteger('company_id');
			$table->string('title');
			$table->timestamps();
			$table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Projects', function (Blueprint $table) {
            //
        });
    }
}
