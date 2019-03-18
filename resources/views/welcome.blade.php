@extends('layouts.app')

@section('content')


<section id="banner" >
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

    <!--- \\\\\\\Post-->
    <div class="card gedf-card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0">@CherifBayo</div>
                        <div class="h7 text-muted">Mon enfant bien pris en charge..</div>
                    </div>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                            <a class="dropdown-item" href="#">Supprimer</a>
                            <a class="dropdown-item" href="#">Editer</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="fas fa-clock"></i>10 min ago</div>
            <a class="card-link" href="#">
                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
            </a>

            <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
            </p>
        </div>
        <div class="card-footer">
            <a href="#" class="card-link"><i class="fas fa-thumbs-up"></i> Aimer</a>
            <a href="#" class="card-link"><i class="fa fa-comment"></i> Commenter</a>
            <a href="#" class="card-link"><i class="fas fa-share"></i> Partager</a>
        </div>
    </div>

  </section>

</section>

<!-- CTA -->


@endsection
