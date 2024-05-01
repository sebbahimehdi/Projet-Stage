<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Inscription employe</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li>Inscription Employee</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
              <div class="comment-form m-4 my-5">
                @if ($errors->any())
                <x-alert-error>
                    <h5>Error :</h5>
                
                    <ul>
                @foreach ($errors->all() as $error)
                 <li>{{$error}}</li> 
                    
                @endforeach
            </ul>
            </x-alert-error>
                    
                @endif
                  <h3 class="comment-reply-title text-center">Inscription employe</h3>
                  <form action="{{route('employe.dashbord.store')}}" method="POST">
                      @csrf
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="text" name="nom_employe"  class="form-control form-control-custom" placeholder="nom_employe" />
                                  @error('nom_employe')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                   
                    
                          <div class="col-lg-12 col-12">
                                  <div class="form-box form-group">
                                  <input type="text" name="email"  class="form-control form-control-custom" placeholder="email" />
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            
                          </div>
                          
                          <div class="col-lg-12 col-12">
                            <div class="form-box form-group">
                            <input type="password" name="password"  class="form-control form-control-custom" placeholder="password" />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                            
                        <div class="col-lg-12 col-12">
                            <div class="form-box form-group">
                            <input type="text" name="status"  class="form-control form-control-custom" placeholder="status" />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-box form-group">
                                <select class="form-select my-1 form-control-custom" name="id_ville" aria-label="Default select example">
                                    <option selected disabled>Select your ville <span>&#8681;</span></option>
                                    <option value="1">Rabat</option>
                                    <option value="2">Tanger</option>
                                    <option value="3">temara</option>
                                    <option value="4">casa Blanca</option>
                                    <option value="5">knitra</option>
                                    <option value="6">Souk al arbiaa</option>
                                </select>
                                @error('id_ville')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-box form-group">
                            <input type="text" name="profile"  class="form-control form-control-custom" placeholder="profile" />
                            @error('profile')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                          <div class="col-12">
                              <div class="button">
                                  <button  class="btn">Inscription employe</button>
                              </div>
                          </div>
                      </div>
                  </form>

    
                
                  
              </div>
          </div>
          </div>
        </div>
    </x-slot>
  </x-front-layout>
  
