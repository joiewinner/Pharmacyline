@extends('layouts/master')

@section('content')
<br/>
<div>
	<h2 style="text-align:center;">Médicament</h2>
</div>

<div class="container" style="color:#000000; text-align: center;">
	<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="btn btn-primary btn-mb" href="{{ route('show', $produit->id) }}">Vous recherchez {{ $produit->nom }}</a></font></font></h3>
	</div>
	<br/><br/>
</div>
@endsection