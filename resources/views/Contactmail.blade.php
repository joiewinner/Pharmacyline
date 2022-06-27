<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PharmacyLine--Contact Form</title>
</head>
<body>
	<h1>Message du Contact</h1>
	<p>Nom : {{ $details['cnom'] }}</p>
	<p>E-mail : {{ $details['cmail'] }}</p>
	<p>Numéro de téléphone : {{ $details['cnumero'] }}</p>
	<p>Message : {{ $details['cmessage'] }}</p>
</body>
</html>
