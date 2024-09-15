<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTcleAcceptedToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('tcle_accepted')->default(false)->after('password');
            $table->timestamp('tcle_accepted_at')->nullable()->after('tcle_accepted');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['tcle_accepted', 'tcle_accepted_at']);
        });
    }
}