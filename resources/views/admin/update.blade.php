@extends('layouts/master')

@section('content')
<br/>
<center>
	<h2>Modifier les données du médicament </h2><br/>

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

<form method="post" action="{{ route('edit', $produit->id) }}" style="width: 500px;text-align: justify;color:#000000;" onsubmit="return alert('Modification effectué avec succès');" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
      Nom du produit <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $produit->nom }}" />
    </div>
    <div class="form-group">
      Prix unitaire du produit <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ $produit->prixunit }}" />
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
      Stock Disponible <input type="num" name="stock" class="form-control" placeholder="Stock" value="{{ $produit->stockdis }}" />
    </div>
    <div class="form-group">
      Image du produit <input type="file" name="image" class="form-control" value="{{ $produit->image }}" />
    </div>
    <div class="form-group">
      Notice du produit <textarea name="notice" class="form-control" id="exampleTextarea" rows="8">{{ $produit->notice }}</textarea>
    </div>
    <button type="submit" name="btn" class="btn btn-success">Modifier</button>
</center>
<br/>
@endsection