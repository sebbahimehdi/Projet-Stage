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
        <style>
span {
  content: "\21E9";
}
        </style>

        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
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
                  <h3 class="comment-reply-title text-center">Ajouter Client</h3>
                  
                  <form action="{{route('Client.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-lg-6 col-12">
                              <div class="form-box form-group">
                                  <input type="text" name="nom_complet" value="{{old('nom_complet')}}" class="form-control form-control-custom" placeholder="nom_complet" />
                                  @error('nom_complet')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                            <div class="form-box form-group">
                                <input type="text" name="email" value="{{old('email')}}" class="form-control form-control-custom" placeholder="email"  />
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
                                <input type="text" name="numero_tel" class="form-control form-control-custom" placeholder="Numero Telephone" />
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
                          <div class="col-lg-12 col-12">
                              <div class="form-box form-group">
                                <textarea name="adresse" class="form-control form-control-custom" rows="4" placeholder="Your Address">{{ old('adresse') }}</textarea>
                                      @error('adresse')
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

{{-- ------------------------------------------------------------------------------------------- --}}
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
                          <div class="row my-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="selectOption">type Client</label>
                                    <select id="selectOption" class="form-control">
                                        <option value="">Piece d'identite</option>
                                        <option value="personne_normal">Personne Normal</option>
                                        <option value="societe">Societe</option>
                                        <option value="entrepreneur">Entrepreneur</option>
                                    </select>
                                </div>
                            </div>
                            <div id="personne_normal" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Additional Values:</label>
                                    <select id="additionalValues" class="form-control">
                                        <option value="cin">CIN</option>
                                        <option value="passport">Passport</option>
                                        <option value="carte_sejour">Carte Sejour</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="n_piece_didentite" class="form-control"
                                        placeholder="Piece d'itentite" />
                                </div>
                            </div>

                            <div id="societe" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Additional Values:</label>
                                    <select id="additionalValues" class="form-control">
                                        <option value="numero_autorisation">Numero Autorisation</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="n_autorisation" class="form-control"
                                        placeholder="Numero Autorisation" />
                                </div>
                            </div>

                            <div id="entrepreneur" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Additional Values:</label>
                                    <select id="additionalValues" class="form-control">
                                        <option value="n_patente">N Patente</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="n_patente" class="form-control"
                                        placeholder="Numero Patente" />
                                </div>
                            </div>
                        </div>
                          <div class="col-12">
                              <div class="button">
                                  <button  class="btn">Inscription</button>
                              </div>
                          </div>
                      </div>
                      <div>
                        Assosiation type Client <a href="{{route('assosiation-client.create')}}">type Client</a>
                      </div>
                  </form>
              </div>
          </div>
          </div>
        </div>
    </x-slot>
  </x-front-layout>
  