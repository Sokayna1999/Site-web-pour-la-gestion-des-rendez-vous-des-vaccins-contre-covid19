<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIdVille extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hopitals', function (Blueprint $table) {
            $table->bigInteger('ville_id')->unsigned();
            $table->foreign('ville_id')->references('id')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hopitals', function (Blueprint $table) {
            $table->dropForeign('ville_id');
            $table->dropCulomn('ville_id');
        });
    }
}
