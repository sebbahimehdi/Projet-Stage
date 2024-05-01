<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Modifier Client</h1>
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
        <div class="container">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
              <div class="comment-form m-4 my-5">
                  <h3 class="comment-reply-title text-center">Modifier Client</h3>
                  <form action="{{route('Client.update',$Client->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="text" name="nom_complet" value="{{old('nom_complet',$Client->nom_complet)}}" class="form-control form-control-custom" placeholder="nom_complet" />
                                  @error('nom_complet')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                            <div class="form-box form-group">
                                <input type="text" name="email" value="{{old('email',$Client->email)}}" class="form-control form-control-custom" placeholder="email"  />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="password" name="password" class="form-control form-control-custom" placeholder="Password"  />
                                  @error('password')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="password" name="password_confirmation" class="form-control form-control-custom" placeholder="Confirm Password"  />
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="text" name="numero_tel" value="{{old('numero_tel',$Client->numero_tel)}}" class="form-control form-control-custom" placeholder="numero_tel"  />
                                  @error('numero_tel')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
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
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" class="form-control-file" name="image" >
                            <small id="fileHelpId" class="form-text text-muted">Help text</small>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                    
                          <div class="col-lg-12 col-12">
                              <div class="form-box form-group">
                                <textarea name="adresse" class="form-control form-control-custom" rows="4" placeholder="Your Address">{{ old('adresse',$Client->adresse) }}</textarea>
                                      @error('adresse')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="button">
                                  <button  class="btn">Modification</button>
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
  