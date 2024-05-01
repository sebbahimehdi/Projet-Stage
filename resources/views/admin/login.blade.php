
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
                        <form class="card login-form" action="{{route('admin.dashbord.check')}}"  method="post">
                            @csrf
                            <div class="card-body">
                                <div class="title">
                                    <h3>Login admin</h3>
                                    <p>You can login using your social media account or email address.</p>
                                </div>
                                {{-- <div class="alt-option">
                                    <span>Or</span>
                                </div> --}}
                                <div class="form-group input-group">
                                    <label for="reg-fn">Email</label>
                                    <input class="form-control" type="email" name="email" id="reg-email" required>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                </div>
                                <div class="form-group input-group">
                                    <label for="reg-fn">Password</label>
                                    <input class="form-control" type="password" name="password" id="reg-pass" required>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between bottom-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                    <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
                                </div>
                                <div class="button">
                                    <button class="btn" type="submit">Login</button>
                                </div>
                                @guest
                                <p class="outer-link">Don't have an account? <a href="{{route('admin.dashbord.registar')}}">Inscription </a>
                                @endguest
                               
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    
    
       </x-slot:breadcrumb>



</x-front-layout>