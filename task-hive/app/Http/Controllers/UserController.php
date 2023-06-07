<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("viewAny", $user); // قم بفحص صلاحية المستخدم المسجل الدخول
    
        $users = User::all();
    
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $useruath = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("create", $useruath); // قم بفحص صلاحية المستخدم المسجل الدخول
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $useruath = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("create", $useruath); // قم بفحص صلاحية المستخدم المسجل الدخول

        $form=$request->validated();
        User::create($form);
        return to_route("user.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $useruath = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("view", $useruath); // قم بفحص صلاحية المستخدم المسجل الدخول
        $nameUser=$user->name;
        return view("users.show",compact("user","nameUser"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $userauth = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("viewAny", $userauth); // قم بفحص صلاحية المستخدم المسجل الدخول
        return view("users.edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $useruath = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("update", $useruath); // قم بفحص صلاحية المستخدم المسجل الدخول
        $form=$request->validated();
        $user->fill($form)->save();
        return to_route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $useruath = auth()->user(); // احصل على مستخدم مسجل الدخول

        Gate::authorize("delete", $useruath); // قم بفحص صلاحية المستخدم المسجل الدخول

        $user->delete();
        return to_route("user.index");
    }
}
