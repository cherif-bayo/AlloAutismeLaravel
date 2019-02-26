@extends('layouts.app')
@section('content')
        <!-- Google GeoChart pour indiquer le nombre d'autiste par ville -->
        <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
            <script type='text/javascript'>
            google.charts.load('current', {
            'packages': ['geochart'],
            // Note: you will need to get a mapsApiKey for your project.
            // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
            'mapsApiKey': 'AIzaSyC1njc6wLAIUv3Y_IexwMzHKnjJP6zIJHg'
            });

            google.charts.setOnLoadCallback(drawMarkersMap);

            function drawMarkersMap() {
                        var nombre = 276147;
                var ville = 'PARIS';

            var data = google.visualization.arrayToDataTable([
                
                ?>
                ['City',   'Nombre '],
                ['Paris', 254185],
                
            ]);

            var options = {
                region: 'FR',
                displayMode: 'markers',
                colorAxis: {colors: ['blue', 'red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            };

            </script>
            <!--End GeoChart -->

        <section id="main" class="container mt-3 profile">
        
        <section class="box special">
            <header class=" profile">

            <div class="container profile">  <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">

                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#parametre">Paramètres</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#modifier">Modifier</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content ">

                    <div id="profile" class="container tab-pane active " ><br>
                    <table class="table table-hover table-reflow table-responsive mt-3">
                        <thead class="thead-inverse">
                        <tr>
                        
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>                                              
                                                   
                            <th scope="col">Date d'inscription</th>
                            <th scope="col">Adresse email</th>
                            <th scope="col">Numéro de téléphone</th>
                            <th scope="col">Région</th>
                            <th scope="col">Code Postal</th>
                            <th scope="col">Ville</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                       
                            <th scope="row">{{ Auth::user()->last_name }}</th>
                            <td>{{ Auth::user()->first_name }}</td>
                            <td>{{ Auth::user()->created_at }}</td>
                            <td>{{ Auth::user()->email }}</td>
                            <td>0{{ Auth::user()->phone_number }}</td>
                            <td>{{ Auth::user()->region }}</td>
                            <td>{{ Auth::user()->postal_code }}</td>
                            <td>{{ Auth::user()->town }}</td>
                           
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div id="parametre" class="container tab-pane fade"><br>
                    <h3>Paramètres</h3>
                    <div class="profilParametre container">

                        <div class="passwordEdit " style="text-align:left;">
                                    
                            
                            <h3>Changer de mot de passe:</h3>
                            <form  action="" method="post">
                            <label for="oldPassword">Ancien mot de passe:</label> <input type="password" name="old_password" id="oldPassword"/>
                            <label for="newpassword">Nouveau mot de passe:</label> <input type="password" name="password" id="newpassword"/>
                            <label for="repassword">Résaisissez le nouveau mot de passe:</label> <input type="password" name="password_confirm" id="repassword"/>
                            <div class="text-left mt-3">
                                <button type="submit" name="edit_password" class="btn btn-success">Modifier</button>
                            </div>
                            </form>
                        </div>
                        <div class="alert alert-danger mt-3 deleteAccount" role="alert">
                            <h3><i class="fas fa-angry fa-lg"></i> Suppression de compte</h3>
                            <a href="#" >Je supprime mon compte</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Suppression de Compte</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                Etes-vous certain de vouloir supprimer votre compte ? cette action est irréverssible!
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-dismiss="modal"  id="envoieHome">Supprimer</a>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                    <div id="modifier" class="container tab-pane fade"><br>

                    <form method="post" action="" id="UserProfilUpdate">
                    
                        <div class="form-group">
                            <label for="last_name" class="question">Nom:</label>
                            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" value="{{ Auth::user()->last_name }}" >
                        </div>
                    
                        <div class="form-group">
                            <label for="first_name" class="question">Prénom:</label>
                            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" value="{{ Auth::user()->first_name }}" >
                        </div>

                        <div class="form-group">
                            <label for="road_number" class="question">Numéro de la voie:</label>
                            <input type="number" name="road_number" id="road_number" tabindex="1" class="form-control" value="{{ Auth::user()->road_number }}" >
                        </div>
                        <div class="form-group">
                            <label for="road_name_par" class="question">Nom de la voie:</label>
                            <input type="text" name="road_name" id="road_name_par" tabindex="1" class="form-control" value="{{ Auth::user()->road_name }}" >
                        </div>
                        <div class="form-group">
                            <label for="phone_number_par" class="question">Numéro de téléphone:</label>
                            <input type="text" name="phone_number" id="phone_number_par" tabindex="1" class="form-control" value="{{ Auth::user()->phone_number }}" >
                        </div>
                        <div class="form-group">
                            <label for="region" class="region" style="font-size:.7em;">Votre Région:</label>
                            <input type="text" name="region" id="region" tabindex="1" class="form-control" value="{{ Auth::user()->region }}" >
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="postal_code" style="font-size:.7em;">Votre Département:</label>
                            <input type="text" name="postal_code" id="postal_code" tabindex="1" class="form-control" value="{{ Auth::user()->postal_code }}" >
                        </div>
                        <div class="form-group">
                            <label for="town" class="question">Ville:</label>
                            <input type="text" name="town" id="town" tabindex="1" class="form-control" value="{{ Auth::user()->town }}" >
                        </div>
                        <div class="form-group">
                            <label for="email" class="question">Email:</label>
                            <input type="text" name="email" id="email" tabindex="1" class="form-control" value="{{ Auth::user()->email }}" >
                        </div>

                        <!-- On transmet l'id de la personne connectée -->

                        <div class="form-group">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                <button type="submit" class="btn btn-success" name="updateProfil">Modifier</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form  >
                    </div>
                </div>
                </div>               
            </header>
        </section>
            <div class="col-md-6 col-xl-12">
            <div id="chart_div" style="width:inherit;height:inherit;" ></div>
            </div>
        </section>
@endsection
