<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goal;

class GoalSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $eventos = [
      ["goal_title" => "Me exercitar", "goal_desired_weekly_frequency" => 3],
      ["goal_title" => "Meditar", "goal_desired_weekly_frequency" => 1],
    ];

    foreach ($eventos as $evento) {
      Goal::create($evento);
    }
  }
}
