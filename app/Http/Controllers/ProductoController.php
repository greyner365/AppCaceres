<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Image;
use Illuminate\Support\Facades\Session;
use Redirect;
use Image as IntImage;
use Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Producto::get();
      return view('panel.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categorias = Categoria::pluck('categoria', 'id');
      return view('panel.productos.create', compact('categorias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $productos = new Producto($request->all());
      $productos->save();

      if ($request->hasFile('image')) {

          foreach ($request->image as $image) {

              $filename = uniqid() . '.' . time() . '.' . $image->getClientOriginalExtension();
              IntImage::make($image)->resize(1000, 600)->save(public_path('images/productos/' . $filename));
              Image::create([
                  'id_producto' => $productos->id,
                  'image' => $filename
              ]);


          }

      }
      Session::flash('message','Producto registrado correctamente');
      return redirect::to('home/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producto= Producto::find($id);
      $producto->delete();

      Session::flash('message','Producto eliminado correctamente');
      return redirect::to('home/productos');
    }
}
