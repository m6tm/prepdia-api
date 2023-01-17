<?php

use App\Enums\User\GenderType;
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
        Schema::create('tutor_options', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', [GenderType::FEMALE, GenderType::MALE, GenderType::OTHER]);
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
        Schema::dropIfExists('tutor_options');
    }
};
