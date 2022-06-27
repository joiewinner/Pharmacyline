@extends('layouts/master-user')

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card" style="color: #000000;">
				<div class="card-header"><b>
					Contact Us
				</b></div>
				<div class="card-body">
					<form method="post" action="{{ route('contact_send') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
      						Votre Nom <input type="text" name="cnom" class="form-control" placeholder="Nom" required />
    					</div>
    					<div class="form-group">
      						Votre E-mail <input type="text" name="cmail" class="form-control" placeholder="E-mail" required />
    					</div>
    					<div class="form-group">
      						Votre Numéro de téléphone <input type="text" name="cnumero" class="form-control" placeholder="Numéro de téléphone" required />
    					</div>
    					<div class="form-group">
      						Votre Message
      						<textarea name="cmessage" class="form-control"></textarea>
    					</div>
    					<button type="submit" class="btn btn-success float-right" onsubmit="return alert('Votre message a été envoyé avec succès !');">Valider</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br/>

@endsection