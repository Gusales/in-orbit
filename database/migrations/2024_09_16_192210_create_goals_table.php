<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('goals', function (Blueprint $table) {
      $table->id("goal_id");
      $table->string("goal_title")->nullable(false);
      $table->integer("goal_desired_weekly_frequency")->nullable(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('goals');
  }
};
