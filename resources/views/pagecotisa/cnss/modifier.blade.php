@include('layoutscotisa.header')
<div class="container mt-5 SessionM">
        <div class="row">
            <div class="col text-center bg-success text-white">
               <h2>FAIRE UNE MODIFICATION</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form class=" offset-3 col-md-6 form shadow bg-danger text-white"  action="/modifier/traitement" method="POST" >
                @csrf
                    <input type="text"  style="display: none;" name="id" value="{{ $contacts->id }}"/>
                    <br>
                    <div class="row offset-2 col-md-8">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="{{ $contacts->nom }}"/>
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom"
                    value="{{ $contacts->prenom }}"/>
                    </div>
                    <div class="row offset-2 col-md-8">
                    <label for="date_de_naissance">Date de naissance :</label>
                    <input type="text" name="date_de_naissance"
                    value="{{ $contacts->date_de_naissance }}"/>
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="sexe">Sexe :</label>
                    <input type="text" name="sexe"
                    value="{{ $contacts->sexe }}"/>
                        </div>

                        <div class="row offset-2 col-md-8">
                    <label for="profession">Profession :</label>
                    <input type="file" name="profession"
                    value="{{ $contacts->profession }}"/>
                        </div>

 
                        <div class="row offset-4 col-md-4 my-4 ">
                        <input type="submit" value="Modifier" class="btn bg-dark text-white btn-outline-primery my-2">
                        </div>
                </form>
                <a href="{{route('liste')}}"><button type="button" class="btn btn-outline-danger my-4 offset-9 col-md-2">Retour</button></a>
            </div>
        </div>

    </div>

    @include('layoutscotisa.footer')
