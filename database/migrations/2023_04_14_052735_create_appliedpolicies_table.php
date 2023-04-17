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
        Schema::create('appliedpolicies', function (Blueprint $table) {
            $table->id();
            $table->string('idproof');
            $table->string('photo');
            $table->string('userid');
            $table->string('policiid');
            $table->string('date');
            $table->string('status')->default('applied');
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
        Schema::dropIfExists('appliedpolicies');
    }
};
