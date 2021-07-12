@extends('layouts.login')
@section("content")
<div class="container">
	<h1>Se connecter / S'enregistrer avec un compte social</h1>
	<p>
		<!-- Lien de redirection vers Google -->
		<a href="{{ route('socialite.redirect') }}" title="Connexion/Inscription avec Google" class="btn btn-link"  >Continuer avec Github</a>
		<!-- Lien de redirection vers Facebook -->
		<!-- Lien de redirection vers Github -->
	</p>
</div>
@endsection