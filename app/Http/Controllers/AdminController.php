<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $request;
    protected $usuario;


    public function __construct(Request $request, User $usuario)
    {
        $this->request = $request;
        $this->usuario = $usuario;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->usuario->all();

        return view('admin.usuario',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuario->all()->where('id',$id)->first();
 
        
        return view('admin.show',['usuario'=>$usuario]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuario->all()->where('id',$id)->first();
        
        return view('admin.edit',['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$usuario = $this->usuario->find($id))
        return redirect()->back();

        $usuario->update($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        $usuarios = $this->usuario->search($request->filtro);


        return view('user.usuario',['usuarios'=>$usuarios]);
    }
}
