<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Inscription destinataire</h1>
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
                  <h3 class="comment-reply-title text-center">Ajouter Destinatairt</h3>
                  <form action="{{route('Destenataire.store')}}" method="POST">
                      @csrf
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="text" name="nom_desyinataire"  class="form-control form-control-custom" placeholder="nom_desyinataire" />
                                  @error('nom_desyinataire')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div>
                            <div class="col-lg-6 col-12 my-3">
                                <select class="form-select" name="id_pays" aria-label="Default select example">
                                    <option selected>Open this select menu Pays</option>
                                    <option value="1">Marocco</option>
                                    <option value="2">Algeria</option>
                                    <option value="3">Tunisia</option>
                                    <option value="4">France</option>
                                    <option value="5">Spain</option>
                                  </select>
                                  @error('id_pays')
                                  <span class="text text-danger">{{$message}}</span>
                                      
                                  @enderror
                            </div>
                          </div>
                   
                    
                          <div class="col-lg-12 col-12">
                              <div class="form-box form-group">
                                <textarea name="adresse" class="form-control form-control-custom" rows="4" placeholder="Your Address">{{ old('adresse') }}</textarea>
                                      @error('adresse')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="button">
                                  <button  class="btn">Inscription Destinataire</button>
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
  
