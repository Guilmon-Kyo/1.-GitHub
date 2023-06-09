<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToPropuestas extends Migration
{
    public function up()
    {
        Schema::table('propuestas', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('propuestas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
