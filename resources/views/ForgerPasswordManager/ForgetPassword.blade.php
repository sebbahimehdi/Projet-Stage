
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
                            <li>Login Employe</li>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                        <form class="card login-form" action="{{ route('forget.password.post') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="title">
                                    <h3>Forget Password</h3>
                                    <p>You can login using your social media account or email address.</p>
                                </div>
                               
                                <div class="form-group input-group">
                                    <label for="reg-fn">Email</label>
                                    <input class="form-control" type="email" name="email" id="reg-email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                      
                                <div class="button">
                                    <button class="btn" type="submit">Forget Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
    
    
    
       </x-slot:breadcrumb>
 
 
 
 </x-front-layout>
 