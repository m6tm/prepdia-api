<?php

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
        Schema::create('test_program_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id');
            $table->foreignId('class_room_id');
            $table->foreignId('education_level_id');
            $table->foreignId('education_system_id');
            $table->softDeletes();
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_program_owners');
    }
};
