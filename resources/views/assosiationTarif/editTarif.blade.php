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
           
   
    .container1 th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container1 td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container1 {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container1 td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container1 tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container1 tr:nth-child(even) {
	  background-color: #2C3446;
}

.container1 th {
	  background-color: #1F2739;
}

.container1 td:first-child { color: #FB667A; }

.container1 tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container1 td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}
   
        </style>

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
        <div class="account-login section">
            {{-- <h1 class="text text-center">Authontification</h1> --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                        <form class="card login-form" action="{{route('assosiation-tarif.update',$assosiationTarif->id)}}"  method="post">
                            @csrf
                               @method('put')
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


                              <select   id="selectOption" class="form-select my-3" name="id_pays" aria-label="Default select example">
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
                              <div class="form-group">
                                <label for="">Taxe Commande</label>
                                <input type="text" name="Taxe_tarife" id="" class="form-control" aria-describedby="helpId" value="{{old('Taxe_tarife',$assosiationTarif->Taxe_tarife)}}">
                              </div>
                              @error('Taxe_tarife')
                              <span class="text text-danger">{{$message}}</span>
                                  
                              @enderror
                              <button class="btn btn-primary my-3">Modifer Tarife</button>
                   
                        </form>
                        
                
                    </div>
                </div>
            </div>
        </div>

    
    
    
       </x-slot:breadcrumb>



</x-front-layout>

