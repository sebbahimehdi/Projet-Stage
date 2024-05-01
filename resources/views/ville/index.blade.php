<x-front-layout>
    <x-slot:breadcrumb>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Inscription Ville</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li>villw</li>
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
                        <form class="card login-form" action="{{route('ville.store')}}"  method="post">
                            @csrf
                            <select class="form-select" name="nom_ville" aria-label="Default select example">
                                <option selected>Open this select menu Pays</option>
                                <option value="Rabat">Rabat</option>
                                <option value="Tanger">Tanger</option>
                                <option value="temara">temara</option>
                                <option value="casa Blanca">casa Blanca</option>
                                <option value="knitra">knitra</option>
                                <option value="Souk al arbiaa">Souk al arbiaa</option>
                              </select>
                              <button class="btn btn-primary my-3">Inscrire Ville</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    
    
       </x-slot:breadcrumb>



</x-front-layout>
