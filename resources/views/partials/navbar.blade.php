<div class="w3-top">
  <div class="w3-bar  w3-card" id="myNavbar" >
    <a href="/" class="w3-bar-item w3-button w3-wide">{{ config('app.name', 'AloAutisme') }}</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" id="grandMenu">
          <span  class="accueilSite" style="color: #fff;">
                @guest
                    Bienvenue sur AlloAutisme
                @else   
                    Bienvenue {{ Auth::user()->last_name }}
                @endguest     
          </span>
                <a href="/" class="w3-button naviguer accueil ">Accueil</a>
                <a href="/presentation" class="w3-button naviguer">présentation</a>
                <a href="/cgu" class="w3-button naviguer">Cgu</a>
                <!-- <a href="#" class="w3-button naviguer">Cra</a> -->         
            @auth
                <a href="/Events" class="w3-button naviguer">Evènements</a>
                <a href="/declarations/create" class="w3-button naviguer">Déclarer Autiste</a>
                <div class="w3-dropdown-hover">
                    <a href="#" class="w3-button naviguer">Mon compte <i class="fa fa-caret-down"></i></a>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a  class="w3-bar-item w3-button" href="/profile"><i class="fa fa-user fa-fw"></i> Profil</a>
                        <a  class="w3-bar-item w3-button" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
                        <a  class="w3-bar-item w3-button decoButton" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                    </div>
                </div>
            @endauth 
            
            @guest
            <!-- /.dropdown-sign-in and sign-up -->        
            <div class="w3-dropdown-hover">
                <a href="#" class="w3-button naviguer">Identifiez-vous <i class="fa fa-caret-down"></i></a>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a class="w3-bar-item w3-button" href="{{ route('login') }}"><i class="fa fa-user fa-fw"></i> Famille</a>
                        <a class="w3-bar-item w3-button" href=""><i class="fa fa-child fa-fw"></i> Crèche</a>
                        <a class="w3-bar-item w3-button" href=""><i class="fa fa-user-md fa-fw"></i> Médecin</a>
                        <!-- <a class="w3-bar-item w3-button not-active" href=""><i class="fa fa-user-md fa-fw"></i><i class="fa fa-user-md fa-fw"></i> Cra</a> -->
                        <!-- <a class="w3-bar-item w3-button" href=""><i class="fab fa-hire-a-helper"></i> Cmpea</a> -->
                        </div>
            <!-- /.dropdown-user -->
            </div>
        @endguest
         
          <a href="#cta" class=" w3-button" ><i class="fa fa-envelope"></i> CONTACT</a>
    
        <!-- <a href="" class="w3-bar-item w3-button" > Admin Access Users</a> -->
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="#" id="ouverture" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block  w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)"  class="w3-bar-item w3-button w3-large w3-padding-16" id="fermeture">Fermer X</a>

        <a class="w3-bar-item w3-button">
            @guest
                Bienvenue sur AlloAutisme
            @else   
                Bienvenue {{ Auth::user()->last_name }}
            @endguest 
          
        </a>
      
            <a class="w3-bar-item w3-button" href="{{ route('home') }}">@lang('Accueil')</a>
            <a class="w3-bar-item w3-button" href="">@lang('Présentation')</a>
            <a class="w3-bar-item w3-button" href="">@lang('Cmpea')</a>
            <a class="w3-bar-item w3-button" href="#">@lang('Cra')</a>
        @guest
            <!-- /.dropdown-sign-in and sign-up -->
          <div class="dropdown">
             <button  class="dropdown-toggle w3-button" data-toggle="dropdown">Identifiez-vous <i class="fa fa-caret-down"></i></button>
             <span class="caret"></span>
                  <div class="dropdown-menu w3-bar-block w3-card-4">
                    <a class="w3-bar-item w3-button" href="{{ route('login') }}"><i class="fa fa-user fa-fw"></i> Famille</a>
                    <a class="w3-bar-item w3-button" href=""><i class="fa fa-child fa-fw"></i> Crèche</a>
                    <a class="w3-bar-item w3-button" href=""><i class="fa fa-user-md fa-fw"></i> Médecin</a>

                    <a class="w3-bar-item w3-button" href=""><i class="fa fa-user-md fa-fw"></i><i class="fa fa-user-md fa-fw"></i> Cra</a>
                    <a class="w3-bar-item w3-button" href=""><i class="fab fa-hire-a-helper"></i> Cmpea</a>
                  </div>
             <!-- /.dropdown-user -->
            </div>      
        @endguest   
            <!-- Si la personne est connectée, on afffiche -->
        @auth
            <div class="dropdown">
                    <button  class="dropdown-toggle w3-button" data-toggle="dropdown">Mon Compte <i class="fa fa-caret-down"></i></button>
                    <span class="caret"></span>
                    <div id="profilDrop" class="dropdown-menu w3-bar-block w3-card-4">
                        <a  class="w3-bar-item w3-button" href=""><i class="fa fa-user fa-fw"></i> Profile</a>
                        <a  class="w3-bar-item w3-button" href=""><i class="fa fa-spinner fa-fw"></i> Dashboard</a>
                        <a  class="w3-bar-item w3-button decoButton" href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                {{ csrf_field() }}
                            </form>
                    </div>
            </div>              
        @endauth
            
        <a class="w3-bar-item w3-button" href="#cta" id="fermeture2">Contactez-Nous</a>    

    </nav>
    