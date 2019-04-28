@auth
<div class="text-left ajoutEvenement">
        <p><a href="#"><i class="far fa-plus-square fa-3x" data-toggle="modal" data-target="#myModal2"></i></a> Créer un évèvenement</p>
    </div>
    @endauth
      <!-- The Modal -->
      <div class="modal fade" id="myModal2">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Formulaire de création d'évènement</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form action="/Events" method="post" id="sendMessage">
                @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-10 offset-md-1 form-group">
                        <label for="namecontact">Titre:</label>
                        <input class="form-control" id="namecontact" name="title" placeholder="Titre" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-10 offset-md-1 form-group">
                        <label for="commentcontact">Message:</label>
                        <textarea class="form-control" id="commentcontact" name="description" placeholder="Votre Message" rows="8" cols="20"></textarea><br>
                        </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-10 offset-md-1 form-group">
                        <input class="btn btn-primary " type="submit" value="Soumettre"/>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
            
          </div>
        </div>
      </div>