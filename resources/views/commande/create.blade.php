<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Inscription Commande</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                            <li>Inscription Commande</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- ------------ --}}
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
        <div class="container">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
              <div class="comment-form m-4 my-5">
                  <h3 class="comment-reply-title text-center">Inscription Commande</h3>
                  <form action="{{route('Commande.store')}}" method="post">
                      @csrf
                      <div class="row">
                      
                 
                          @error('poids_commande')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        <div class="form-box form-group">
                            <input type="number" name="id_destinataire"  class="form-control form-control-custom" placeholder="id_destinataire" />
                            @error('id_destinataire')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-box form-group">
                            <input type="date" name="date_validation"  class="form-control form-control-custom" placeholder="date_validation" />
                            @error('date_validation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-box form-group">
                            <input type="time" name="date_recevoire"  class="form-control form-control-custom" placeholder="date_recevoire" />
                            @error('date_recevoire')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-12">
                            {{-- <div class="form-box form-group">
                            <input type="text" name="poids_commande"  class="form-control form-control-custom" placeholder="poids_commande" />
                         
                        </div> --}}

                        <select id="selectOption"  class="form-select form-control-custom my-3" name="poids_commande" aria-label="Default select example">
                          <option selected disabled>Poides de commande </option>
                          <option value="1">1,000->5,000 <'kg'></option>
                          <option value="2">5,000->10,000 <'kg'></option>
                          <option value="3">10,001->15,001 <'kg'></option>
                          <option value="4">15,000->20,000 <'kg'></option>
                          <option value="5">20,000->25,001</option>
                          <option value="6">25,001->30,001 <'kg'></option>
                        </select>
                        @error('poids_commande')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        <div class="form-box form-group">

                            {{-- <div>
                                
                                <select id="selectOption"    class="form-select my-3" name="taxe_commande"  aria-label="Default select example">
                                  <option selected disabled>Taxe Tarife</option>
                                  <option value="40dh">40dh</option>
                                  <option value="60dh">60dh</option>
                                  <option value="80dh">80dh</option>
                                  <option value="120dh">120dh</option>
                                  <option value="100dh">100dh</option>
                                </select>
  
                                </div> --}}
                             {{-- <input type="text" name="taxe_commande"  class="form-control form-control-custom" placeholder="taxe_commande" />
                            @error('taxe_commande')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror  --}}


                             <div id="1" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="40 DH">40dh</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div id="2" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="60 DH">60dh</option>
                                        
                                    </select>
                                </div>
                            </div>

                            
                            <div id="3" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="70 DH">70 dh</option>
                                        
                                    </select>
                                </div>
                            </div>

                            
                            <div id="4" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="80 DH">80dh</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div id="5" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="100 DH">100dh</option>
                                        
                                    </select>
                                </div>
                            </div>

                            
                            <div id="6" class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Prix Total :</label>
                                    <select id="additionalValues" name="taxe_commande" class="form-control">
                                        <option value="120 DH">120dh</option>
                                        
                                    </select>
                                </div>
                            </div> 


                        </div>
                      
                    </div>
                          <div class="col-12">
                              <div class="button d-grid">
                                  <button  class="btn">Inscription Commande</button>
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
  
