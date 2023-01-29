<?php

use App\Enums\CommonStatuses;
use App\Enums\System\ImageTypes;
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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('path', 2048);
            $table->string('type', 1)->default(ImageTypes::COMMON);
            $table->string('status', 1)->default(CommonStatuses::ACTIVE);
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
        Schema::dropIfExists('images');
    }
};
