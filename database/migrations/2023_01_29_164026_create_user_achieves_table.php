<?php

use App\Enums\User\AchievementTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_achieves', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('description');
            $table->string('achievement', 255);
            $table->unsignedBigInteger('user_id');
            $table->string('type', 1)->default(AchievementTypes::COMMON);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('user_achieves');
    }
};
