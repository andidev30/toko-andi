<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string("username")->unique();
            $table->string("roles");
            $table->string("address");
            $table->string("phone");
            $table->string("avatar");
            $table->enum("status", ['ACTIVE', 'INACTIVE']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn("username")->unique();
            $table->dropColumn("roles");
            $table->dropColumn("address");
            $table->dropColumn("phone");
            $table->dropColumn("avatar");
            $table->dropColumn("status", ['ACTIVE', 'INACTIVE']);
        });
    }
}
