<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countRoles = Role::count();
        $countUser = User::count();
        $employeeUser = User::where('role_id', 3)->count();
        $clientUser = User::where('role_id', 2)->count();
        return view('admin.dashboard.index', compact('countRoles', 'countUser', 'employeeUser', 'clientUser'));
    }

    public function userRoles()
    {
        $allRoles = Role::with('userCounts')->get();
        return view('admin.settings.roleList', compact('allRoles'));
    }
}
