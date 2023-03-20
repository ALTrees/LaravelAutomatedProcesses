<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('talos_process_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(config('talos.process_model'));

            $table->string('type');
            $table->string('class');
            $table->json('options');
        });
    }
};
