@extends('layouts/master')

@section('content')
<br/>
<h2 style="text-align:center;">Médicaments</h2>

@if(!empty($produits))
  <table class="table table-hover" style="color: #000000;margin:10px;">
    <thead class="table-success">
      <th>Référence</th>
      <th>Nom du produit</th>
      <th>Prix unitaire du produit</th>
      <th>Type du produit</th>
      <th>Stock disponible</th>
      <th></th>
    </thead>
    @foreach($produits as $produit)
    <a href="{{ route('show', $produit->id) }}">
      <tr>
        <td>{{ $produit->id }}</td>
        <td>{{ $produit->nom }}</td>
        <td>{{ $produit->prixunit }} F CFA</td>
        <td>{{ $produit->type }}</td>
        <td>{{ $produit->stockdis }}</td>
        <td>
          <a class="btn btn-primary btn-sm" href="{{ route('show', $produit->id) }}" role="button">Voir plus...</a>
        </td>
      </tr>
    </a>
    @endforeach
  </table>
@else
 <h5 style="text-align:center;">Aucun produit présent pour le moment</h5>
@endif

@endsection