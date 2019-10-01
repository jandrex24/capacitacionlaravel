<?php

namespace App\Http\Controllers\Maintainer;

use App\Core\Eloquent\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ManteinerRequest;
use Facades\App\Core\Facades\AlertCustom;

class ManteinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::where('name','ILIKE',"%".request()->get('filter')."%")->paginate(3);
        //$categories=Category::paginate(3);
        return view('mantenedor.listausuario',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mantenedor.creausuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManteinerRequest $request)
    {
        //
        User::create($request->validated()); 
        AlertCustom::success('Guardado Correctamente');
        //return();
         return redirect()->route('registers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Core\Eloquent\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Core\Eloquent\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
       // dd($user);

        return view('mantenedor.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Core\Eloquent\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //

        $category->fill($request->validated());
        $category->save();
        AlertCustom::success('Actualizado Correctamente');
        return redirect()->route('registers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Core\Eloquent\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       // dd($user);
       $category->delete();
       AlertCustom::success('Eliminado Correctamente');
       return redirect()->route('registers.index');
    }
}
