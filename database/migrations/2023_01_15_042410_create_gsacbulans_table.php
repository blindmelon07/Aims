<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGsacbulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gsacbulans', function (Blueprint $table) {
            $table->id();
            $table->string('clientid');
            $table->string('fullname');
            $table->string('address')->nullable(true);
            $table->string('dateofbirth')->nullable(true);
            $table->string('age')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('cellnumber')->nullable(true);
            $table->string('branch_name');
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
        Schema::dropIfExists('gsacbulans');
    }
}
