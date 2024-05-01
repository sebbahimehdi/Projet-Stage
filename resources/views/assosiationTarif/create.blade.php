<x-front-layout>
    <x-slot:breadcrumb>
        <div class="breadcrumbs">
            <!-- Breadcrumb content here -->
        </div>

        <style>
            /* Styles for table and other elements */
            .container1 {
                /* Container styles */
                width: 80%;
                margin: 0 auto;
                text-align: left;
                display: table;
            }
            .container1 th, .container1 td {
                padding: 10px;
                text-align: left;
            }
            .container1 tr {
                background-color: #f9f9f9;
            }
            .container1 tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#filterCountry').on('change', function () {
                    var selectedCountry = $(this).val();
                    if (selectedCountry === "All") {
                        $('.tarif-row').show(); // Show all rows if "All" is selected
                    } else {
                        $('.tarif-row').each(function () {
                            var rowCountry = $(this).data('country');
                            if (rowCountry === selectedCountry) {
                                $(this).show(); // Show only the rows that match the selected country
                            } else {
                                $(this).hide(); // Hide others
                            }
                        });
                    }
                });
            });
        </script>
               {{-- <form class="card login-form" action="{{route('assosiation-tarif.store')}}"  method="post">
                @csrf
                
                   
                
              
             
                  <select class="form-select" name="id_tarife" aria-label="Default select example">
                    <option selected disabled> Poides de tarife</option>
                    <option value="1">1,000->5,000 <'kg'></option>
                    <option value="2">5,000->10,000 <'kg'></option>
                    <option value="3">10,001->15,001 <'kg'></option>
                    <option value="4">15,000->20,000 <'kg'></option>
                    <option value="5">20,000->25,001</option>
                    <option value="6">25,001->30,001 <'kg'></option>
                  </select>

                  @error('id_tarife')
                  <span class="text text-danger">{{$message}}</span>
                      
                  @enderror


                  <select id="selectOption"    class="form-select my-3" name="id_pays" aria-label="Default select example">
                    <option selected disabled>Pays</option>
                    <option value="1">Marocco</option>
                    <option value="2">Algeria</option>
                    <option value="3">Tunisia</option>
                    <option value="4">France</option>
                    <option value="5">Spain</option>
                  </select>
                  @error('id_pays')
                  <span class="text text-danger">{{$message}}</span>
                      
                  @enderror
                  {{-- <div>
                    
                  <select id="selectOption"    class="form-select my-3" name="Taxe_tarife"  aria-label="Default select example">
                    <option selected disabled>Taxe Tarife</option>
                    <option value="40">40dh</option>
                    <option value="60">60dh</option>
                    <option value="80">80dh</option>
                    <option value="120">120dh</option>
                    <option value="100">100dh</option>
                  </select>

                  </div> --}}
                  <div class="form-group">
                    <label for="Taxe"></label>
                    <input type="text" name="Taxe_tarife" id="" class="form-control" placeholder="" />
                  </div>
                    {{-- <div id="1"  class="additional-select col-12" style="display: none;">
                    <div class="form-group">
                        <label for="additionalValues">Taxe Tarife  :</label>
                        <select   name="Taxe_tarife" class="form-control">
                            <option value="40DH">40dh</option>
                            
                        </select>
                    </div>
                    </div>
                    <div id="2"  class="additional-select col-12" style="display: none;">
                        <div class="form-group">
                            <label for="additionalValues">Taxe Tarife  :</label>
                            <select   name="Taxe_tarife" class="form-control">
                                <option value="60DH">60dh</option>
                                
                            </select>
                        </div>
                        </div>
                        <div id="3"  class="additional-select col-12" style="display: none;">
                            <div class="form-group">
                                <label for="additionalValues">Taxe Tarife  :</label>
                                <select   name="Taxe_tarife" class="form-control">
                                    <option value="80DH">80dh</option>
                                    
                                </select>
                            </div>
                            </div>
                            <div id="4"  class="additional-select col-12" style="display: none;">
                                <div class="form-group">
                                    <label for="additionalValues">Taxe Tarife  :</label>
                                    <select   name="Taxe_tarife" class="form-control">
                                        <option value="120DH">120dh</option>
                                        
                                    </select>
                                </div>
                                </div>
                                <div id="5"  class="additional-select col-12" style="display: none;">
                                    <div class="form-group">
                                        <label for="additionalValues">Taxe Tarife  :</label>
                                        <select   name="Taxe_tarife" class="form-control">
                                            <option value="100DH">100dh</option>
                                            
                                        </select>
                                    </div>
                                    </div>  --}}
                   {{-- @error('Taxe_tarife')
                  <span class="text text-danger">{{$message}}</span>
                  @enderror
                  <button class="btn btn-primary my-3">Inscrire Pays</button>
       
            </form> - --}} 

        <div class="account-login section">
            <div class="container">
                <div class="form-group">
                    <label for="filterCountry">Filter Pays:</label>
                    <select class="form-control" id="filterCountry">
                        <option value="All">All</option>
                        @foreach($pays as $country)
                            <option value="{{ $country->nom_pays }}">{{ $country->nom_pays }}</option>
                        @endforeach
                    </select>
                </div>

                <table class="container1">
                    <thead>
                        <tr>
                            <th>pays</th>
                            <th>Poides_debut</th>
                            <th>Poides_fin</th>
                            <th>Tax</th>
                            @auth('admin')
                                <th>Edit</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assosiationTarifs as $assosiationTarif)
                            <tr class="tarif-row" data-country="{{ $assosiationTarif->pays?->nom_pays }}">
                                <td>{{ $assosiationTarif->pays?->nom_pays }}</td>
                                <td>{{ $assosiationTarif->tarife->poides_debut }} kg</td>
                                <td>{{ $assosiationTarif->tarife->poides_fin }} kg</td>
                                <td>{{ $assosiationTarif->Taxe_tarife }} dh</td>
                                @auth('admin')
                                    <td>
                                        <a href="{{ route('assosiation-tarif.edit', $assosiationTarif->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                   
                </table>
                <div>
                    {{-- {{$assosiationTarifs->links() }} --}}
                </div>
               
            </div>
        </div>
      
        

    </x-slot:breadcrumb>
</x-front-layout>
