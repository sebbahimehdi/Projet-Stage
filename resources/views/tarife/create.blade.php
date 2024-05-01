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
                            <li>type Client</li>
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
                        <form class="card login-form" action="{{route('tarife.store')}}"  method="post">
                            @csrf
                            <select class="form-select" name="poides_debut" aria-label="Default select example">
                                <option selected>Open this select menu poides debut</option>
                                <option value="1,000">1,000</option>
                                <option value="5,000">5,000</option>
                                <option value="10,001">10,001</option>
                                <option value="15,000">15,000</option>
                                <option value="20,001">20,001</option>
                                <option value="25,001">25,001</option>
                              </select>
                         
                              <select class="form-select" name="poides_fin" aria-label="Default select example">
                                <option selected>Open this select menu Tarife</option>
                                <option value="5,000">5,000</option>
                                <option value="10,000">10,000</option>
                                <option value="15,001">15,001</option>
                                <option value="20,000">20,000</option>
                                <option value="25,001">25,001</option>
                                <option value="30,001">30,001</option>
                              </select>
                            
                              <button class="btn btn-primary my-3">Inscrire Pays</button>
                   
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    
    
       </x-slot:breadcrumb>



</x-front-layout>

