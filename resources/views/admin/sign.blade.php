@extends('layouts/master')

@section('content')
<br/>
<center>
	<h2>Ajout de médicament</h2>
@if ($errors->any())
  <div>
    <strong>Whoops !</strong>There were some problems with your input.<br/>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<br/>
<form method="post" action="{{ route('sign') }}" style="width: 500px;text-align: justify;color:#000000;" onsubmit="alert('Votre produit est enregistré avec succès')" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
      Nom du produit <input type="text" name="nom" class="form-control" placeholder="Nom" required />
      <small id="referenceHelp" class="form-text text-muted">Veuillez entrer le nom du produit en dessus.</small>
    </div>
    <div class="form-group">
      Prix unitaire du produit <input type="text" name="prix" class="form-control" placeholder="Prix" required />
    </div>
    <div class="form-group">
      Type de produit <select class="form-control" name="type">
        <option>Santé et nature</option>
        <option>Beauté et soin</option>
        <option>Bébé</option>
        <option>Protection</option>
        <option>Forme et énergie</option>
        <option>Cosmétique</option>
        <option>Divers</option>
      </select>
    </div>
    <div class="form-group">
      Stock Disponible <input type="num" name="stock" class="form-control" placeholder="Stock" required/>
    </div>
    <div class="form-group">
      Image du produit <input type="file" name="image" class="form-control" required/>
    </div>
    <div class="form-group">
      Notice du produit <textarea name="notice" class="form-control" id="exampleTextarea" rows="8"></textarea>
    </div>
    <button type="submit" name="btn" class="btn btn-success" style="margin-right: 20px;">Ajouter</button>
    <button type="reset" name="btn" class="btn btn-danger">Annuler</button>
  </form>
</center>
<br/>
@endsection