@extends('layouts.app')
@section('content')



<div class="box special features sign-in-par">
    <div class="row mention mb-3">
<div class="container" id="declaration_autiste">
  <h3>Editer une déclaration</h3>
            <div class="declationQuestion">
                    <h4 class="mb-3">Vous souhaitez éditer la déclaration pour ?</h4>
                    <div class="choicelink">
                        <a href="#"  class="choixDeclaration declarationEnfantButton ">Un Enfant</a>
                        <a href="#"  class=" choixDeclaration declarationAdulteButton">Vous Même</a>
                    </div>
            </div>            
            <div class="formDeclaration hidden">

             <form id="declaration-form" method="POST" action="/declarations/{{ $declarations->id }}">          
                  @method('PATCH')
                  @csrf
                  
               
                    <div class="declarationEnfant">
                  <div class="form-group">
                      <label for="last_name" class="question">Nom de la Personne à déclarer:</label>
                    <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Nom" required value="{{ $declarations->last_name }}">
                  </div>
                  <div class="form-group">
                      <label for="first_name" class="question">Prénom de la Personne à déclarer:</label>
                    <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="Prénom" required value="{{ $declarations->first_name }}">
                  </div>
                  <div class="form-group">
                      <label for="date_naissance_par" class="question">date de naissance:</label>
                    <input type="date" name="date_naissance" id="date_naissance_par" tabindex="1" class="form-control" placeholder="Profession" required value="{{ $declarations->date_naissance }}">
                  </div>
                  <div class="form-group">
                    <span class="mr-3">Sexe:</span>
                      <div class="form-check form-check-inline">
                        <input  type="radio" name="sexeEnfant" id="exampleRadios1" value="Fille" >
                        <label class="form-check-label" for="exampleRadios1">
                          Femelle
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexeEnfant" id="exampleRadios2" value="Garçon" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          Male
                        </label>
                      </div>
                </div>
                  <div class="form-group">
                      <label for="medecin_traitant" class="question">Medecin traitant:</label>
                    <input type="text" name="medecin_traitant" id="medecin_traitant" tabindex="1" class="form-control" placeholder="Nom et prénom du médecin traitant de l'enfant" >
                  </div>
                  <div class="form-group hidden Enfant">
                    <span class="mr-3">L'enfant est scolarisé(e) ?</span>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="scolariseEnfant" id="exampleRadios3" value="Oui" >
                    <label class="form-check-label" for="exampleRadios3">
                      OUI
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="scolariseEnfant" id="exampleRadios4" value="Non" >
                    <label class="form-check-label" for="exampleRadios4">
                      NON
                    </label>
                  </div>
                </div>

                        <div class="form-group hidden Adulte">
                            <span class="mr-3">Employé ?</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="employe_adulte" id="exampleRadios7" value="Oui" >
                                <label class="form-check-label" for="exampleRadios7">
                                    OUI
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="employe_adulte" id="exampleRadios8" value="Non" >
                                <label class="form-check-label" for="exampleRadios8">
                                    NON
                                </label>
                            </div>
                        </div>
                  <div class="col-sm-12 form-group">
                    <label for="commentpar">Commentaires:</label>
                    <textarea class="form-control" id="commentpar" name="commentaire" placeholder="Breves explications" rows="8" cols="20">{{ $declarations->commentaire }}</textarea><br>
                  </div>
                
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <button type="submit" class="connexionButton">{{ __('Modifier') }}</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    
        </form>
        <form action="/declarations/{{ $declarations->id }}" method="POST">

        @method('DELETE')
        @csrf

              <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <button type="submit" class="btn btn-danger">{{ __('Supprimer') }}</button>
                        </div>
                      </div>
                    </div>
                </div>
        
        </form>
    </div>
</div>
</div>
</div>



@endsection
