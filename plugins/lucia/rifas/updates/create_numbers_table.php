<?php namespace Lucia\Rifas\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNumbersTable extends Migration
{
    public function up()
    {
        Schema::create('lucia_rifas_numbers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('number')->primary();
            $table->boolean('sold')->default(0);
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('lucia_rifas_numbers');
    }
}
