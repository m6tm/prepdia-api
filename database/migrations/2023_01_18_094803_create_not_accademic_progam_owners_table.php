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
        Schema::create('not_accademic_progam_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('music_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('business_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('informatic_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('not_academic_id')->constrained()->onDelete('CASCADE');
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
        Schema::dropIfExists('not_accademic_progam_owners');
    }
};
