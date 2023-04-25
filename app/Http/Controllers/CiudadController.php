<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CiudadController extends Controller
{
    public function consulta1() {
        // database (en la base de datos)
        $datos=DB::table("ciudades")->get(); // select * from ciudades
        return $datos;
    }
    public function consulta2() {
        // Eloquent (es mas lento)
        $datos=Ciudad::all();
        return $datos;
    }
    public function consulta3() {
        // database usando query cruda (en la base de datos)
        $datos=DB::select("select * from ciudades"); // select * from ciudades
        return $datos;
    }
    public function consulta4() {
        // database usando una query cruda (en la base de datos)
        $sql="select ciudades.nombre as 'nombreciudad',paises.nombre as 'nombrepais'
        ,poblacion from ciudades inner join paises on ciudades.pais_id=paises.id";
        $datos=DB::select($sql); 
        return $datos;
    }
    public function consulta5() {
        // database join usando el query builder        
        $datos=DB::table('ciudades')
        ->join("paises",'ciudades.pais_id','=','paises.id')
        ->select('ciudades.nombre as nombreciudad','paises.nombre as nombrepais','poblacion')
        ->get(); 
        return $datos;
    }
    public function consultaAgrupada1() {
        $sql="select paises.nombre,count(*) cantidadciudades
            from paises inner join ciudades on paises.id=ciudades.pais_id
            group by paises.nombre";
        $datos=DB::select($sql);
        return $datos;
    }
}
