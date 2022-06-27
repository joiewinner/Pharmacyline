@extends('layouts/master-user')

@section('content')
<br/>
<div>
	<h2 style="text-align:center;">Médicament N°{{ $produit->id }}</h2>
</div>

<div class="container" style="color:#000000;">
	<img src="{{ asset('/images/'.$produit->image) }}" name="Image du produit" alt="{{$produit->image}}" style="height:300px;width: 400px;" /><br/>
	<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom : <b>{{ $produit->nom }}</b></font></font></h3>
	<p class="lead">
		<font>
			<font>
				Prix : <i>{{ $produit->prixunit }} F CFA</i><br/>
				Type : <i>{{ $produit->type }}</i>
			</font>
		</font>
	</p>
	<hr class="my-4">
	<p>
		<h4><b>Posologie</b></h4>
		<font>
			<font style="text-align: justify;">
				{{ $produit->notice }}
			</font>
		</font>
	</p>
	</div>
	<br/>
</div>
@endsection