@extends('layouts.app')

@section('content')
<div class="box special features sign-in-par">
			<div class="row mention mb-3">
				<div class="col-xs-6 tab " >
					<a href="{{ route('login') }}"  >{{ __('Je suis membre') }}</a>
				</div>
				<div class="col-xs-6 tab " >
					<a href="{{ route('register') }}" class="actived">{{ __('Première connexion') }}</a>
				</div>
			</div>
			<div class="container">

            @include ('errors')
					
				<form method="post" action="{{ route('register') }}" id="address">

                @csrf
						<div class="form-group">
								<label for="last_name" class="question">{{ __('Nom') }}</label>
                            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Nom" value="{{ old('last_name') }}" required autofocus>
                            
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="first_name" class="question">{{ __('Prénom') }}</label>
                            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="Prénom" value="{{ old('first_name') }}" required autofocus>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
						</div>
						<!-- <div class="form-group">
							<span class="mr-3">Vous êtes ?</span>
							<div class="form-check form-check-inline medecinRadio">
								<input class="form-check-input" type="radio" name="choice_cat" id="exampleRadios1" value="Medecin" >
								<label class="form-check-label" for="exampleRadios1">
									Médecin
								</label>
							</div>
							<div class="form-check form-check-inline crecheRadio">
								<input class="form-check-input" type="radio" name="choice_cat" id="exampleRadios2" value="Creche" >
								<label class="form-check-label" for="exampleRadios2">
									Une crèche
								</label>
							</div>
							<div class="form-check form-check-inline particulierRadio">
								<input class="form-check-input" type="radio" name="choice_cat" id="exampleRadios3" value="Particulier" >
								<label class="form-check-label" for="exampleRadios3">
									Particulier
								</label>
							</div>
							<div class="form-check form-check-inline familyRadio">
								<input class="form-check-input" type="radio" name="choice_cat" id="exampleRadios4" value="Famille" >
								<label class="form-check-label" for="exampleRadios4">
									 Famille
								</label>
							</div>
					    </div> -->
                        <!-- <div class="form-group inputMed hidden">
                                <label for="medecinInput" class="question">Numero Imat:</label>
                            <input type="number" name="medecin_input" id="medecinInput" tabindex="1" class="form-control" placeholder="Votre numéro d'immatriculation Médecin" >
                        </div>
                        <div class="form-group inputCreche hidden">
                                <label for="crecheInput" class="question">Numéro d'immatriculation:</label>
                            <input type="number" name="creche_input" id="crecheInput" tabindex="1" class="form-control" placeholder="Votre numéro d'immatriculation crèche" >
                        </div>
                        <div class="form-group inputPar hidden">
                                <label for="particulierInput" class="question">Numero Sécurité social:</label>
                            <input type="number" name="particulier_input" id="particulierInput" tabindex="1" class="form-control" placeholder="Votre numéro de sécurité social" >
                        </div>
                        <div class="form-group inputFamily hidden">
                                <label for="particulierInput" class="question">Numero Sécurité social:</label>
                            <input type="number" name="family_input" id="familyInput" tabindex="1" class="form-control" placeholder="Votre numéro de sécurité social" >
                        </div> -->
						<div class="form-group" id="locationField">
								<label for="first_name" class="question">{{ __('Adresse') }}</label>
							<input type="text" id="autocomplete" tabindex="1" class="form-control" name="adress" placeholder="Entrez votre Adresse: Ex: 25 rue de la marne...." onFocus="geolocate()"value="{{ old('adress') }}" required >
						</div>
						<div class="form-group">
								<label for="road_number" class="question">{{ __('Numéro de la voie') }}</label>
                            <input type="number" name="road_number" id="street_number" tabindex="1" class="form-control{{ $errors->has('road_number') ? ' is-invalid' : '' }}" placeholder="Numéro de la voie" disabled="true" value="{{ old('road_number') }}" required autofocus>
                            
                            @if ($errors->has('road_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('road_number') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="road_name_par" class="question">{{ __('Nom de la voie') }}</label>
                            <input type="text" name="road_name" id="route" tabindex="1" class="form-control{{ $errors->has('road_name') ? ' is-invalid' : '' }}" placeholder="Nom de la voie" disabled="true" value="{{ old('road_name') }}" required autofocus>
                            
                            @if ($errors->has('road_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('road_name') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="town" class="question">{{ __('Ville') }}</label>
                            <input type="text" name="town" id="locality" tabindex="1" class="form-control{{ $errors->has('town') ? ' is-invalid' : '' }}" placeholder="Ville" disabled="true" value="{{ old('town') }}" required autofocus>
                            
                            @if ($errors->has('town'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('town') }}</strong>
                                </span>
                            @endif
						</div>
                        <div class="form-group">
								<label for="town" class="question">{{ __('Région') }}</label>
                            <input type="text" name="region" id="administrative_area_level_1" tabindex="1" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" placeholder="Région" disabled="true" value="{{ old('region') }}" required autofocus>
                            
                            @if ($errors->has('region'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('region') }}</strong>
                                </span>
                            @endif
						</div>
                        <div class="form-group">
								<label for="town" class="question">{{ __('Code postal') }}</label>
                            <input type="text" name="postal_code" id="postal_code" tabindex="1" class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" placeholder="code postal" disabled="true" value="{{ old('postal_code') }}" required autofocus>
                            
                            @if ($errors->has('postal_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                </span>
                            @endif
						</div>
                        <div class="form-group">
								<label for="town" class="question">{{ __('Pays') }}</label>
							<input type="text"  id="country" tabindex="1" class="form-control" placeholder="Ville" disabled="true">
						</div>
						<div class="form-group">
								<label for="phone_number_par" class="question">{{ __('Numéro de téléphone') }}</label>
                            <input type="number" name="phone_number" id="phone_number_par" tabindex="1" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="Numéro de téléphone" value="{{ old('phone_number') }}" required autofocus>
                            
                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="email" class="question">{{ __('Adresse email') }}</label>
                            <input type="email" name="email" id="email" tabindex="1" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Adresse email" value="{{ old('email') }}" required autofocus>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="password" class="question">{{ __('Mot de Passe') }}</label>
                            <input type="password" name="password" id="password" tabindex="2" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Mot de passe" >
                            
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group">
								<label for="confirm-password" class="question">{{ __('Confirmer le mot de passe') }}</label>
							<input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirmer le mot de passe" >
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ok" name="ok" required>
                                <label class="custom-control-label" for="ok"> @lang('J\'accepte les termes et conditions de la politique de confidentialité.')</label>
                            </div>
                        </div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center">
										<button type="submit" class="connexionButton">{{ __('Inscription') }}</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
		</div>
		<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1njc6wLAIUv3Y_IexwMzHKnjJP6zIJHg&libraries=places&callback=initAutocomplete"
        async defer>
		</script>
@endsection



		