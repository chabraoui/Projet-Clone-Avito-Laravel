<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
class CategorieController extends Controller
{
  //lister les categories
  public function index(){

$categories=Categorie::all();
return view('categories.index', ['categories'=>$categories]);

 }

 public function show($id){

return view('categories.show',[
'categorie'=>Categorie::find($id)]);
 }


}
