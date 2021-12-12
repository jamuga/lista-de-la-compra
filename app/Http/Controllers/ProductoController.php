<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $productos = Producto::all();
        return view(
            'productos.index',
            array('arrayProductos' => $productos)
        );
    }

    public function getShow($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show',
        array(
            'producto' => $producto
            ));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit',
        array('producto' => $producto));
    }

    public function postCreate(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(url('/productos/show', array('id' => $producto->id)));
    }

    public function putEdit(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();
        return redirect(url('/productos/show', array('id' => $producto->id)));
    }
}
