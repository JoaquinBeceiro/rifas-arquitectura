<?php namespace Lucia\Rifas\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateNumbersTable extends Migration
{
    public function up() {
        Schema::table('lucia_rifas_numbers', function ($table) {
            $table->string('nombre')->default("");
            $table->string('email')->default("");
            $table->string('telefono')->default("");
        });
    }

    public function down() {
        Schema::table('lucia_rifas_numbers', function ($table) {
            $table->dropColumn('nombre');
            $table->dropColumn('email');
            $table->dropColumn('telefono');
        });
    }

}

?>