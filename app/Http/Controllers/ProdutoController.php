<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produto::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'          =>  'required|unique:produtos',
            'nome'            =>  'required',
            'preco'           =>  'required',
            //'student_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
            'imagem'          =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $file_name = time() . '.' . request()->imagem->getClientOriginalExtension();

        request()->imagem->move(public_path('images'), $file_name);

        $produto = new Produto;

        $produto->codigo = $request->codigo;
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->imagem = $file_name;

        $produto->save();

        return redirect()->route('produtos.index')->with('success', 'Produto adicionado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'codigo'          =>  'required',
            'nome'            =>  'required',
            'preco'           =>  'required',
            //'student_image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
            'imagem'          =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $imagem = $request->hidden_imagem;

        if($request->imagem != '')
        {
            $imagem = time() . '.' . request()->imagem->getClientOriginalExtension();

            request()->imagem->move(public_path('images'), $imagem);
        }

        $produto = Produto::find($request->hidden_id);

        $produto->codigo = $request->codigo;

        $produto->nome = $request->nome;

        $produto->preco = $request->preco;

        $produto->imagem = $imagem;

        $produto->save();

        return redirect()->route('produtos.index')->with('success', 'Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluido com sucesso!');
    }
}