<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminChallengeUserPlayMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_challenge_user_play_matches', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('challenge_id')->nullable();
            $table->string('currant_match')->default(0);
            $table->string('win_match')->default(0);
            $table->string('loss_match')->default(0);
            $table->string('tot_match')->default(0);
            $table->string('wonchallenge')->default(0);
            $table->string('status')->default(1);

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
        Schema::dropIfExists('admin_challenge_user_play_matches');
    }
}
