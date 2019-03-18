@extends('layouts.app')

@section('content')

<section id="banner" >

<div class="postNotification pull-right">
      @if(session()->has('postnotif'))
          <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
          {{ session()->get('postnotif') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
          </div>
      @endif
</div>
<div class="postNotification pull-right">
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      @endif
</div>

<!-- including comment form -->
  @include('exprimer')    
     
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

    {{-- include create event form --}}
    @include('createEvent')
    
    <div class="container-fluid">
    <div class="row boxev">
        <div class="col-12 col-md-3">
        
        </div>
        <div class="col-12 col-md-6 box-content">
            <h2>Interphase pessac</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ea architecto placeat, natus quos hic, facilis nam fugit veniam atque explicabo error sunt animi totam perferendis! Vitae error at pariatur?</p>
        
        </div>
        <div class="col-12 col-md-3 area">
            <h6>10 Membres</h6>
            <p>Créer par cherif</p>
            <div class="text-right accederEvenement">
                <a href="#" class="btn btn-dark">Accéder</a>
            </div>
  
        </div>

    </div>
    
    </div>

    <div class="container-fluid">
    <div class="row boxev">
        <div class="col-12 col-md-3">
        
        </div>
        <div class="col-12 col-md-6 box-content">
            <h2>Vegan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ea architecto placeat, natus quos hic, facilis nam fugit veniam atque explicabo error sunt animi totam perferendis! Vitae error at pariatur?</p>
        
        </div>
        <div class="col-12 col-md-3 area">
            <h6>10 Membres</h6>
            <p>Créer par cherif</p>
            <div class="text-right accederEvenement">
                <a href="#" class="btn btn-dark">Accéder</a>
            </div>
        
        </div>
    
    </div>
    
    </div>

</section>

<!-- CTA -->


@endsection
