<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StoreMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Store', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('City');
            $table->string('District');
            $table->string('State');
            $table->string('Gender');
            $table->longText('Country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Store');

    }
}
