<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Barista;
use App\Ingrediente;
use App\Metodo;
use Illuminate\Support\Facades\DB;

class TablasController extends Controller
{

  public function show()
  {
      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();
      return view('admin.tablas.index')->with('productos',$productos);
  }

}
