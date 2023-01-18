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
        Schema::create('payment_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_method_id');
            $table->foreignId('payment_id');
            $table->foreignId('collaborator_id')->nullable()->constrained()->onDelete('CASCADE');
            $table->foreignId('tutor_id')->nullable()->constrained()->onDelete('CASCADE');
            $table->foreignId('parent_id')->nullable()->constrained()->onDelete('CASCADE');
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
        Schema::dropIfExists('payment_owners');
    }
};
