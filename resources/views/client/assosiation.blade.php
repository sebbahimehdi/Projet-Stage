<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Inscription Client</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li>Inscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <style>
        /* Form select style */
.form-select {
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}

/* Button style */
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0056b3;
    border-color: #0056b3;
}

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="comment-form m-4 my-5">
                    <h3 class="comment-reply-title text-center">Ajouter type Client</h3>
                    <form class="card login-form" action="{{route('assosiation-client.store')}}" method="post">
                        @csrf
                        <select class="form-select my-3" name="id_type_client" aria-label="Default select example">
                            <option selected disabled>Choisir le type de client</option>
                            <option value="1">Personne Normale</option>
                            <option value="2">Société</option>
                            <option value="3">Entreprise</option>
                        </select>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
