<div class="form-group">
  <label for="titre">titre</label>
  <input type="text" class="form-control" id="titre" name="title" value="{{old('title',$annonce->title ?? null)}}">
</div>
<div class="form-group">
  <label for="description">Description</label>
  <textarea type="text" class="form-control" id="description" name="text">{{old('text',$annonce->text ?? null)}}</textarea>
</div>
<div class="form-group">
  <label for="price">Prix</label>
  <input type="text" class="form-control" id="price" name="price" value="{{old('price',$annonce->price ?? null)}}">
</div>
<div class="form-group">
   <label> Category</label>
   <select class="form-control" name="categorie_id">
                  @foreach( $categories as $cat)
                  <option value="{{$cat->id}}">{{$cat->name_categorie}}</option>
                  @endforeach
   </select>
 </div>
<div class="form-group">
  <label for="image">Image</label>
    <input type="file"  name="photo1"  class="form-control">
  </div>
