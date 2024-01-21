<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class UserPlanController extends Controller
{
    public function index() {
        $plans = Plan::all();
        return view('user.plan.index', compact('plans'));
    }
}
