<section id ="cta">
        <div id="contact" class="container bg-grey">
        <h2 class="text-center">Restons en contact</h2>
        <div class="row">
        <div class="col-sm-5">

            <p>Contactez-nous. Nous vous répondons sous 24h</p>
            <p class="pull-center"><span class="fas fa-map-marker"></span> Bordeaux,Fr</p>
            <p class="pull-center"><span class="fas fa-phone"></span> +33 783767441</p>
            <p class="pull-center"><span class="fas fa-address-card"></span>
            <span>Rue Léon Jouhaux</span>
            <span>33800</span>
            <span>Bordeaux</span>
            </p>
            <p class="adress"><span class="fas fa-envelope"></span> baymed2007@gmail.com</p>
        </div>
        <div class="col-sm-6 ">
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
            <form action="/contact" method="post" id="sendMessage">
                @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                        <label for="contactName">Nom:</label>
                        <input class="form-control" id="contactName" name="name" placeholder="Votre nom" type="text" required>
                        </div>
                        <div class="col-sm-12 form-group">
                        <label for="emailcontact">Email:</label>
                        <input class="form-control" id="emailcontact" name="email" placeholder=" Votre email" type="email" required>
                        </div>
                        <div class="col-sm-12 form-group">
                        <label for="contactComment">Message:</label>
                        <textarea class="form-control" id="contactComment" name="comments" placeholder="Message" rows="8" cols="20"></textarea><br>
                        </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                        <input class="btn btn-default " type="submit" value="Envoyer"/>
                        </div>
                    </div>
                </div>
        </form>

        </div>
        </div>
</section>
