<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminChallengeUserPlayedMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_challenge_user_played_matches', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('challenge_id');
            $table->string('start_match');
            $table->string('end_match');
            $table->string('winorloss');
            $table->string('status')->default('1');
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
        Schema::dropIfExists('admin_challenge_user_played_matches');
    }
}
