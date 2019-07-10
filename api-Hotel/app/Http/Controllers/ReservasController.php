<?php

namespace App\Http\Controllers;

use App\Reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
   
    public function index()
    {
        $reservas1 = Reservas::get();
      echo json_encode($reservas1);
    }


    public function store(Request $request)
    {
       $reservas1 = new Reservas();
       $reservas1->id = $request->input('Id');
       $reservas1->name = $request->input('name');
       $reservas1->description = $request->input('description');
       $reservas1->email = $request->input('email');
        $reservas1->save();
        echo json_encode($reservas1);
    }


    public function update(Request $request,  $reservas_id)
    {
  $reservas1 = Reservas::find ($reservas_id);
  $reservas1->name = $request->input('name');
  $reservas1->description = $request->input('description');
  $reservas1->email = $request->input('email');
   $reservas1->save();
   echo json_encode($reservas1);
    }


    public function destroy($reservas_id)
    {
    $reservas1 = Reservas::find($reservas_id);
    $reservas1->delete();
}
}
