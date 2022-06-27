@extends('layouts/master')

@section('content')
<br/>
<div>
	<h2 style="text-align:center;">Médicament N°{{ $produit->id }}</h2>
</div>

<div class="container" style="color:#000000;">
	<img src="{{ asset('/images/'.$produit->image) }}" name="Image du produit" alt="{{ $produit->image }}" style="height:400px;width: 500px;" /><br/>
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
	<div style="display: flex;">
		<div style="margin-right: 25px;">
			<form action="{{ route('edit', $produit->id) }}" method="get" class="inline-block">
				@csrf
				<input type="submit" class="btn btn-primary"  name="update" value="Modifier" />
			</form>
		</div>	
		<div>
			<form action="{{ route('drugs_sup', $produit->id) }}" method="get" class="inline-block" onsubmit="return confirm('Êtes-vous sùr de vouloir supprimer le produit ?')">
				@csrf
				@method('DELETE')
				<input type="submit" class="btn btn-danger"  name="delete" value="Supprimer" />
			</form>	
		</div>
	</div>
	<br/>
</div>
@endsection