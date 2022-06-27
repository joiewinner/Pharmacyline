@extends('layouts/master-user')

@section('content')
<br/>
<h2 style="text-align:center;">Médicaments</h2>
<br/>
<div class=" jumbotron">
<div class="row">
@foreach($produits as $produit)
	<div class="col-md-2">
			@if($produit->image)
			<img src="{{ asset('/images/'.$produit->image) }}" alt="$produit->image" class="card-img-top" style="height: 200px;">
			@endif
			<div class="card-body" style="color: #000000;">
				<h4 class="card-title" style="font-weight: bold;"> {{ $produit->nom }}</h4>
				<p class="card-text"> {{ $produit->type }}<br>
									  {{ $produit->prixunit }} F CFA</p>
				<a class="btn btn-success btn-sm" href="{{ route('show_path', $produit->id) }}" role="button"><b>Voir plus...</b></a>
			</div>
	</div>	
@endforeach
</div>
</div>
<br>
@endsection