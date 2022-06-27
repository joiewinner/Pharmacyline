@extends('layouts/master-user')

@section('content')
<br/>
<h2 style="text-align:center;">Médicaments</h2>

<div class="container">
<div class="row">
@foreach($produits as $produit)
	<div class="mb-2 shadow-sm bg-white" id="div-drug">
		<div class="d-flex">
			@if($produit->image)
			<img src="{{ $produit->image }}" alt="" class="card-img-top ml-2" style="width: 250px;">
			@endif
			<div class="card-body" style="color: #000000;">
				<h3 class="card-title">Nom : {{ $produit->nom }}</h3>
				<p class="card-text">Prix : {{ $produit->prixunit }} F CFA<br>
									 Type : {{ $produit->type }}</p>
				<a class="btn btn-success btn-sm" href="{{ route('show_path', $produit->id) }}" role="button"><b>En savoir plus...</b></a>
			</div>
		</div>
	</div>
@endforeach
</div>
</div>
<br>
@endsection