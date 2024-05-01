<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="comment-form m-4 my-5">
                        <h3 class="comment-reply-title text-center">Ajouter Client</h3>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#selectOption').change(function(){
        var optionSelected = $(this).val();
        $('.additional-select').hide();
        $('#' + optionSelected).show();
    });
});
</script>

<form action="{{ route('assosiation-client.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="selectOption">Select Option:</label>
                <select id="selectOption" name="id_type_client" class="form-control">
                    <option selected disabled >Piece d'identite</option>
                    <option value="1">Personne Normal</option>
                    <option value="2">Societe</option>
                    <option value="3">Entrepreneur</option>
                </select>
            </div>
        </div>
        <div id="1" class="additional-select col-12" style="display: none;">
            <div class="form-group">
                <label for="additionalValues">Additional Values:</label>
                <select id="additionalValues" name="id_type_peice_indentite" class="form-control">
                    <option value="1">CIN</option>
                    <option value="1">Passport</option>
                    <option value="2">Carte Sejour</option>
                </select>
            </div>
        </div>

        <div id="2" class="additional-select col-12"  style="display: none;">
            <div class="form-group">
                <label for="additionalValues">Additional Values:</label>
                <select id="additionalValues" name="id_type_peice_indentite"  class="form-control">
                    <option value="4">Numero Autorisation</option>
                </select>
            </div>
        </div>

        <div id="3" class="additional-select col-12"  style="display: none;">
            <div class="form-group">
                <label for="additionalValues">Additional Values:</label>
                <select id="additionalValues" name="id_type_peice_indentite"  class="form-control">
                    <option value="3">N Patente</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Inscription</button>
    </div>
    <div>
        Assosiation type Client <a href="{{ route('assosiation-client.create') }}">type
            Client</a>
    </div>
</form>




{{-- <form class="card login-form" action="{{route('assosiation-client.store')}}" method="post">
    @csrf
    <select class="form-select my-3" id="selectOption" name="id_type_client" aria-label="Default select example">
        <option selected disabled>Choisir le type de client</option>
        <option value="1">Personne Normale</option>
        <option value="2">Société</option>
        <option value="3">Entreprise</option>

    </select>

    <div id="1" class="additional-select col-12" style="display: none;">
        <div class="form-group">
            <label for="additionalValues">Additional Values:</label>
            <select id="additionalValues" class="form-control">
                <option value="cin">CIN</option>
                <option value="passport">Passport</option>
                <option value="carte_sejour">Carte Sejour</option>
            </select>

            <div id="2" class="additional-select col-12" style="display: none;">
                <div class="form-group">
                    <label for="additionalValues">Additional Values:</label>
                    <select id="additionalValues" class="form-control">
                        <option value="numero_autorisation">Numero Autorisation</option>
                    </select>
                </div>
    @error('id_type_client')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <select class="form-select my-3" name="id_type_peice_indentite" aria-label="Default select example">
        <option selected disabled>Choisir le type de pièce d'identité</option>
        <option value="1">Passeport</option>
        <option value="2">Carte de séjour</option>
        <option value="3">Numéro de patron</option>
        <option value="4">Numéro d'autorisation d'association</option>
    </select>


    @error('id_type_peice_indentite')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <button class="btn btn-primary my-3">Inscrire le client</button>
</form> --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-front-layout>
