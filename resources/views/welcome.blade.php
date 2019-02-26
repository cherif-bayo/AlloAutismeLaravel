@extends('layouts.app')

@section('content')


<section id="banner" >
  <div class="alert alert-success hidden" id="successConnexion" role="alert" >
      vous avez été connecté avec succèss
  </div>
  <h2>AlloAutisme</h2>
  <p>Un site permettant aux parents d'enfants autistes, mais aussi les professionnel de collaborer</p>

</section>

<!-- Main -->
<section id="main">

  <section class="box special">
    <header class="major">

      <h2>Avoir la même chance que
        <br />
        les autres enfants.</h2>
      <p>La communauté scientifique internationale, mais également les parents et les
        enseignants de ces enfants, s’accordent à dire aujourd’hui qu’une éducation précoce
        et très structurée améliore les acquisitions de l’enfant autiste et contribue à son autonomie. <br />
      </p>

    </header>

  </section>

  <section class="box special features">
    <div class="features-row">
      <section>
        <i class="fas fa-female icon major
            accent2"></i>
        <i class="fas fa-male icon major
            accent3"></i>
        <h3>Parent d'enfant autiste</h3>
        <!-- je dump pour voir les informations sur la personne connectée . faire suivre de la balise php  -->

        <ul>
          <li><a href="#" class="button alt" data-toggle="collapse" data-target="#parent">En savoir plus</a></li>
          <ul id="parent" class="collapse align-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
            <!-- Fin de la fenêtre modale  de connexion parents-->
          </ul>
        </ul>
      </section>
      <section>
        <i class="fas fa-user-md accent3 icon major"></i>
        <h3>Une crèche</h3>
        <ul class="#">
          <li><a href="#" class="button alt" data-toggle="collapse" data-target="#professionnel">En savoir plus</a></li>
          <p id="professionnel" class="collapse">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
        </ul>
      </section>
    </div>

  </section>
  <section class="box special features">
    <div class="features-row">
      <section>
        <i class="fas fa-university accent4 icon major"></i>
        <h3>Une école</h3>
        <ul>
          <li><a href="#" class="button alt" data-toggle="collapse" data-target="#ecole">En savoir plus</a></li>
          <p id="ecole" class="collapse">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
        </ul>
      </section>
      <section>
        <i class="fas fa-graduation-cap accent1 icon major"></i>
        <h3>Etat</h3>
        <ul>
          <li><a href="#" class="button alt" data-toggle="collapse" data-target="#etat">En savoir plus</a></li>
          <p id="etat" class="collapse">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
        </ul>
      </section>


    </div>
  </section>



</section>

<!-- CTA -->


@endsection
