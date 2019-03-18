@auth
      <div class="text-right userPost">
        <!-- Button to Open the Modal -->
        <i class="far fa-comment fa-2x"></i> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
         Ouvrez une discussion, {{ Auth::user()->first_name }}
        </button>
      </div>
    @endauth
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Exprimez-Vous</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <form action="/posts" method="post" id="sendMessage">
                @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                        <label for="namecontact">Titre:</label>
                        <input class="form-control" id="namecontact" name="title" placeholder="Titre" type="text" required>
                        </div>
                        <div class="col-sm-12 form-group">
                        <label for="commentcontact">Message:</label>
                        <textarea class="form-control" id="commentcontact" name="description" placeholder="Votre Message" rows="8" cols="20"></textarea><br>
                        </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
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