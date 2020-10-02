<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticiaController extends Controller
{

    protected $request;
    protected $noticia;


    public function __construct(Request $request, Noticia $noticia)
    {
        $this->request = $request;
        $this->noticia = $noticia;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = $this->noticia->all()->where('idUser',Auth::id());
        
        return view('noticia',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create',['idUser'=>Auth::id()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = $request->only('titulo','materia');
        $noticia['idUser'] = Auth::id();

        $this->noticia->create($noticia);
        return redirect()->route('noticias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = $this->noticia->all()->where('id',$id)->first();
        
        return view('show',['noticia'=>$noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = $this->noticia->all()->where('id',$id)->first();
        
        return view('edit',['noticia'=>$noticia]);
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
        if(!$noticia = $this->noticia->find($id))
        return redirect()->back();

        $noticia->update($request->all());
        return redirect()->route('noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = $this->noticia->where('id',$id);
        if(!$noticia)
        redirect()->back();

        $noticia->delete();
        return redirect()->route('noticias.index');

    }

    public function search(Request $request){
        $noticias = $this->noticia->search($request->filtro);

        return view('noticia',['noticias'=>$noticias]);
    }
}
