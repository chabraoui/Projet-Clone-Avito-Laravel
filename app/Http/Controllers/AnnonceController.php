<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Annonce;
use App\Categorie;
use Redirect;

class AnnonceController extends Controller
{
      public function __construct(){

        return $this->middleware('auth')->only('create');
      }



     public function index(){

        $annonces=\App\Annonce::where('isApprouve',1)->paginate(3);
       return view('annonces.index',['annonces'=>$annonces]);

    }

    public function filterAnnonce($id)
    {
        $annonces=\App\Annonce::where('isApprouve',1)->where('categorie_id',$id)->paginate(2);
        return view('annonces.index',['annonces'=>$annonces]);
    }


public function search(Request $request){
$search=$request->get('search');
  $annonces=\App\Annonce::where('title', 'like', '%' .$search. '%')->paginate(3);
 return view('annonces.index',['annonces'=>$annonces]);

}

    public function show($id){
      $categories=Categorie::all();
      return view('annonces.show',[
        'annonce'=>Annonce::find($id)],compact('categories'));
    }
    public function create(){
       $categories=Categorie::all();
return view('annonces.create',compact('categories'));
   }
   public function store(Request $request){

     $annonce = new Annonce();  //create
     $annonce->title = $request->input('title');
     $annonce->text = $request->input('text');
     $annonce->price = $request->input('price');
     if ($request->hasFile('photo1')) {
   $annonce->photo1= $request->photo1->store('image');
     }
     $annonce->user_id = auth()->user()->id;
    $annonce->categorie_id = $request->input('categorie_id');
     $annonce->save();


return redirect('annonces')->with('success','votre annonce a ete posté !');
  }
  public function edit($id){
$categories=Categorie::all();
$annonce=Annonce::findOrFail($id);
$this->authorize('update',$annonce);
return view('annonces.edit',['annonce'=>$annonce],['categories'=>$categories]);
 }
 public function update(Request $request,$id){
$annonce=Annonce::findOrFail($id);
$annonce->title = $request->input('title');
$annonce->text = $request->input('text');
$annonce->price = $request->input('price');
  if ($request->hasFile('photo1')) {
$annonce->photo1= $request->photo1->store('image');
  }
// $annonce->user_id = auth()->user()->id;
$annonce->categorie_id = $request->input('categorie_id');
  $annonce->save();

return redirect('annonces')->with('success','votre annonce a ete modifié !');

}
public function destroy(Request $requestn, $id){
$annonce=Annonce::find($id);
$annonce->delete();
return redirect('annonces');
}
}
