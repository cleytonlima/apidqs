<?php

namespace App\Http\Controllers;

use App\membro;
use Illuminate\Http\Request;

class DqsController extends Controller
{
   public function index()
   {
    
    return membro::all();

   }

   public function store(Request $request)
   {
        $membro = membro::create([
            'name'=>$request->input('first_name'),
            'surname'=>$request->input('last_name')
        ]);

       return $membro;

   }

   public function update(Request $request, Membro $membro)
   {
       $membro->name = $request->input('name');

       $membro->surname = $request->input('surname');

       $membro->update();

       return $membro;
   }

   public function destroy(Membro $membro)
   {
       $membro->delete();

       return response()->json(['success'=>true]);
   }
}
