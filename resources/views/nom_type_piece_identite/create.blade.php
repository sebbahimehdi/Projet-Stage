<x-front-layout>
    <x-slot:breadcrumb>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Login</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <style>
            
    .social-login {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .social-login .btn {
        background-color: #3b5998; 
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        display: flex;
        align-items: center;
    }

    .social-login .btn img {
        width: 50px;
        height: auto;
        margin-right: 10px;
    }
            
        </style>
        <div class="account-login section">
            {{-- <h1 class="text text-center">Authontification</h1> --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                        <form class="card login-form" action="{{route('pieceEdontite.store')}}"  method="post">
                            @csrf
                            <select class="form-select" name="nom_type_piece_identite" aria-label="Default select example">
                                <option selected>Open this select menu piece Edntite</option>
                                <option value="Paspor">Passport</option>
                                <option value="cart 7 jour">carte sejour</option>
                                <option value="numero de patront">numero de patron</option>
                                <option value="numero Asosiasion Otorisation">numero Asociation Autorisation</option>
                              </select>
                              @error('nom_type_piece_identite')
                              <span class="text-text-danger">{{$message}}</span>
                                  
                              @enderror
                              <button class="btn btn-primary my-3">Inscrire Pays</button>
                   
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    
    
       </x-slot:breadcrumb>



</x-front-layout>

