<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class SalaireController extends Controller
{
    public function index_salaire()
    {
        $personnel=Personnel::get();
        return view('finances.salaire.add_salaire',compact('personnel'));
    }
    public function getState(Request $request)
    {
        $cid= $request->post('cid');
        $state=DB::table('personnel')->where('fonction',$cid)
        ->get();

        foreach($state as $list){
          $html.= '<option value="'.$list->salaire.'">'.$list->salaire.'</option>';
         }
    echo $html;
    }
}
