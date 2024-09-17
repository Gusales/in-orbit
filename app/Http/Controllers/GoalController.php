<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
  public function index()
  {
    $goals = Goal::all();
    return $goals;
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Goal $goal)
  {
    //
  }

  public function edit(Goal $goal)
  {
    //
  }

  public function update(Request $request, Goal $goal)
  {
    //
  }

  public function destroy(Goal $goal)
  {
    //
  }
}
