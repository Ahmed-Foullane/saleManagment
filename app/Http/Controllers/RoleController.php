<?php
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('roles.index', ['roles' => Role::all()]);
    }
    public function create()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        Role::create($request->all());
        return redirect()->route('roles.index');
    }
    
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        return redirect()->route('roles.index');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
