<x-front-layout>
    <x-slot name="breadcrumb">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">Admin</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html"><i class="lni lni-home"></i> Admin</a></li>
                            <li>List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
        <style>
            .outer-div {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }

            .inner-div {
                height: 450px;
                width: 300px;
                margin-bottom: 20px;
                position: relative;
                border-radius: 5px;
                font-weight: 400;
                color: black;
                font-size: 1rem;
                text-align: center;
                transition: all 0.6s cubic-bezier(0.8, -0.4, 0.2, 1.7);
                transform-style: preserve-3d;
            }

            .inner-div:hover {
                transform: rotateY(180deg);
            }

            .front,
            .back {
                position: relative;
                top: 0;
                left: 0;
                backface-visibility: hidden;
            }

            .front {
                cursor: pointer;
                height: 100%;
                background: #fff;
                backface-visibility: hidden;
                border-radius: 5px;
                box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3),
                    0 0 40px rgba(0, 0, 0, 0.1) inset;
            }

            .front__bkg-photo {
                height: 150px;
                width: 300px;
                background: url("https://images.unsplash.com/photo-1511207538754-e8555f2bc187?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=88672068827eaeeab540f584b883cc66&auto=format&fit=crop&w=1164&q=80")
                    no-repeat;
                background-size: cover;
                backface-visibility: hidden;
                overflow: hidden;
                border-top-right-radius: 5px;
                border-top-left-radius: 5px;
            }

            .front__face-photo {
                position: relative;
                top: -60px;
                height: 120px;
                width: 120px;
                margin: 0 auto;
                border-radius: 50%;
                border: 5px solid #fff;
                background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/156905/profile/profile-512.jpg?1530296477")
                    no-repeat;
                background-size: contain;
                overflow: hidden;
            }

            .front__text {
                position: relative;
                top: -55px;
                margin: 0 auto;
                font-family: "Montserrat";
                font-size: 18px;
                backface-visibility: hidden;
            }

            .front__text-header {
                font-weight: 700;
                font-family: "Oswald";
                text-transform: uppercase;
                font-size: 20px;
            }

            .front__text-para {
                position: relative;
                top: -5px;
                color: #000;
                font-size: 14px;
                letter-spacing: 0.4px;
                font-weight: 400;
                font-family: "Montserrat", sans-serif;
            }

            .back {
                transform: rotateY(180deg);
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: #071011;
                border-radius: 5px;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }

            .social-media-wrapper {
                font-size: 36px;
            }

            .social-icon {
                position: relative;
                top: 20px;
                margin-left: 5px;
                margin-right: 5px;
                color: #fff;
                transition: all 0.4s cubic-bezier(0.3, 0.7, 0.1, 1.9);
            }

            .social-icon:nth-child(1) {
                transition-delay: 0.6s;
            }

            .social-icon:nth-child(2) {
                transition-delay: 0.7s;
            }

            .social-icon:nth-child(3) {
                transition-delay: 0.8s;
            }

            .social-icon:nth-child(4) {
                transition-delay: 0.9s;
            }

            .fab {
                position: relative;
                top: 0;
                left: 0;
                transition: all 200ms ease-in-out;
            }

            .fab:hover {
                top: -5px;
            }
            * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "Poppins", sans-serif;
 }
         .container2 {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   max-width: 1200px;
   margin: 40px auto; /* Adjust margin as needed */
 }
 
 .container2 .card {
   position: relative;
   min-width: 320px;
   height: 440px;
   box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
     inset -5px -5px 15px rgba(255, 255, 255, 0.1),
     5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
   border-radius: 15px;
   margin: 30px;
   transition: 0.5s;
   background-color: #081828; /* Background color */
   color: #fff; /* Text color */
 }
 
 .container2 .card .box .content h2,
 .container2 .card .box .content h3,
 .container2 .card .box .content p {
   color: #fff; /* Text color */
 }
 
 
 .container2 .card:nth-child(1) .box .content a {
   background: #2196f3;
 }
 
 .container2 .card:nth-child(2) .box .content a {
   background: #e91e63;
 }
 
 .container2 .card:nth-child(3) .box .content a {
   background: #23c186;
 }
 
 .container2 .card .box {
   position: absolute;
   top: 20px;
   left: 20px;
   right: 20px;
   bottom: 20px;
   background: #081828;
   border-radius: 15px;
   display: flex;
   justify-content: center;
   align-items: center;
   overflow: hidden;
   transition: 0.5s;
 }
 
 .container2 .card .box:hover {
   transform: translateY(-50px);
 }
 
 .container2 .card .box:before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 50%;
   height: 100%;
   background: rgba(255, 255, 255, 0.03);
 }
 
 .container2 .card .box .content {
   padding: 20px;
   text-align: center;
 }
 
 .container2 .card .box .content h2 {
   position: absolute;
   top: -10px;
   right: 30px;
   font-size: 8rem;
   color: rgba(255, 255, 255, 0.1);
 }
 
 .container2 .card .box .content h3 {
   font-size: 1.8rem;
   color: #fff;
   z-index: 1;
   transition: 0.5s;
   margin-bottom: 15px;
 }
 
 .container2 .card .box .content p {
   font-size: 1rem;
   font-weight: 300;
   color: rgba(255, 255, 255, 0.9);
   z-index: 1;
   transition: 0.5s;
 }
 
 .container2 .card .box .content a {
   position: relative;
   display: inline-block;
   padding: 8px 20px;
   background: black;
   border-radius: 5px;
   text-decoration: none;
   color: white;
   margin-top: 20px;
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
   transition: 0.5s;
 }
 
 .container2 .card .box .content a:hover {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
   background: #fff;
   color: #000;
 }
     
        </style>

<section>  
     
    <h1 class="text text-center"> {{ auth()->user()->nom_complet ?? ''}}</h1>
     <div class="container2">
        

        <div class="card">
            <div class="box">
              <div class="content">  
                <h2><i class="fa-solid fa-box"></i></h2> 
                <h3>Insertion Client</h3>
                  <p> pour Inscrire Client </p>
                    <form action="{{route('Client.create')}}">
                        @csrf
                        <button class="btn btn-primary">
                            Clicker ici
                        </button>
                    </form>
              </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
              <div class="content">  
                <h2><i class="fa-solid fa-box"></i></h2> 
                <h3> Insersion employer</h3>
                  <p> pour Inscrire employe </p>
                    <form action="{{route('employe.dashbord.registar')}}">
                        @csrf
                        <button class="btn btn-primary">
                            Clicker ici
                        </button>
                    </form>
              </div>
            </div>
        </div>
        <div class="card">
          <div class="box">
            <div class="content">  
              <h2><i class="fa-solid fa-box"></i></h2> 
              <h3> Insersion tarif</h3>
                <p> pour Inscrire et changer tarif </p>
                  <form action="{{route('assosiation-tarif.create')}}">
                      @csrf
                      <button class="btn btn-primary">
                          Clicker ici
                      </button>
                  </form>
            </div>
          </div>
      </div>
      
        
     </div>
</section>

        


        <div class="outer-div">
            @foreach ($clients as $client)
            <div class="inner-div">
                <div class="front">
                    <div class="front__bkg-photo"></div>
                    <div ><img src="{{ asset('storage/'.$client->image) }}" width="150px" alt="{{ $client->nom_complet }}"></div>
                    <div class="front__text">
                        <h2 class="front__text-header">{{ $client->nom_complet }}</h2>
                        <h4 class="front__text-header">{{ $client->email }}</h4>
                        <h4 class="front__text-header">{{ $client->numero_tel }}</h4>
                        <p class="front__text-para"><i class="fas fa-map-marker-alt front-icons"></i>{{ $client->adresse }}</p>
                        <span class="front__text-hover">Hover to Find Me</span>
                    </div>
                </div>
                <div class="back">
                    <div class="social-media-wrapper">
                        <a href="{{route('Client.edit',$client->id)}}" class="social-icon"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{route('Client.show',$client->id)}}" class="social-icon"><i class="fa-solid fa-magnifying-glass" ></i></a>
                        <form action="{{route('Client.destroy',$client->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button  class="social-icon"><i class="fa-solid fa-trash" ></i></button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{ $clients->links() }}
    </x-slot>
</x-front-layout>









{{-- <x-front-layout>
  <x-slot name="breadcrumb">
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
                          <li>List</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
      <style>
         @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "Poppins", sans-serif;
 }
         .container2 {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   max-width: 1200px;
   margin: 40px auto; /* Adjust margin as needed */
 }
 
 .container2 .card {
   position: relative;
   min-width: 320px;
   height: 440px;
   box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
     inset -5px -5px 15px rgba(255, 255, 255, 0.1),
     5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
   border-radius: 15px;
   margin: 30px;
   transition: 0.5s;
   background-color: #081828; /* Background color */
   color: #fff; /* Text color */
 }
 
 .container2 .card .box .content h2,
 .container2 .card .box .content h3,
 .container2 .card .box .content p {
   color: #fff; /* Text color */
 }
 
 
 .container2 .card:nth-child(1) .box .content a {
   background: #2196f3;
 }
 
 .container2 .card:nth-child(2) .box .content a {
   background: #e91e63;
 }
 
 .container2 .card:nth-child(3) .box .content a {
   background: #23c186;
 }
 
 .container2 .card .box {
   position: absolute;
   top: 20px;
   left: 20px;
   right: 20px;
   bottom: 20px;
   background: #081828;
   border-radius: 15px;
   display: flex;
   justify-content: center;
   align-items: center;
   overflow: hidden;
   transition: 0.5s;
 }
 
 .container2 .card .box:hover {
   transform: translateY(-50px);
 }
 
 .container2 .card .box:before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 50%;
   height: 100%;
   background: rgba(255, 255, 255, 0.03);
 }
 
 .container2 .card .box .content {
   padding: 20px;
   text-align: center;
 }
 
 .container2 .card .box .content h2 {
   position: absolute;
   top: -10px;
   right: 30px;
   font-size: 8rem;
   color: rgba(255, 255, 255, 0.1);
 }
 
 .container2 .card .box .content h3 {
   font-size: 1.8rem;
   color: #fff;
   z-index: 1;
   transition: 0.5s;
   margin-bottom: 15px;
 }
 
 .container2 .card .box .content p {
   font-size: 1rem;
   font-weight: 300;
   color: rgba(255, 255, 255, 0.9);
   z-index: 1;
   transition: 0.5s;
 }
 
 .container2 .card .box .content a {
   position: relative;
   display: inline-block;
   padding: 8px 20px;
   background: black;
   border-radius: 5px;
   text-decoration: none;
   color: white;
   margin-top: 20px;
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
   transition: 0.5s;
 }
 
 .container2 .card .box .content a:hover {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
   background: #fff;
   color: #000;
 }
      </style>
      <section>  
     
        <h1 class="text text-center"> {{ auth()->user()->nom_complet ?? ''}}</h1>
         <div class="container2">
            
            <div class="card">
                <div class="box">
                  <div class="content">
                    <h2><i class="fa-solid fa-location-dot"></i></h2>
                    <h3>Insersion admin</h3>
                      <p>Chers Clients, pour inscrire un admin </p>
                        <form action="{{route('admin.dashbord.registar')}}">
                        @csrf
                        <button class="btn btn-primary">
                        clicker ici
                        </button>
                        </form>
                  </div>
                </div>
            </div> 
            <div class="card">
                <div class="box">
                  <div class="content">  
                    <h2><i class="fa-solid fa-box"></i></h2> 
                    <h3>Insertion Client</h3>
                      <p>Chers Clients, pour Inscrire Client </p>
                        <form action="{{route('Client.create')}}">
                            @csrf
                            <button class="btn btn-primary">
                                Clicker ici
                            </button>
                        </form>
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                  <div class="content">  
                    <h2><i class="fa-solid fa-box"></i></h2> 
                    <h3> Insersion employer</h3>
                      <p>Chers Clients, pour Inscrire employe </p>
                        <form action="{{route('employe.dashbord.registar')}}">
                            @csrf
                            <button class="btn btn-primary">
                                Clicker ici
                            </button>
                        </form>
                  </div>
                </div>
            </div>
          
            
         </div>
    </section>
     
      
      <div class="container">
          <div class="row">
            
              @foreach ($clients as $client)
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                  <div class="client-card">
                      <div class="card-body">
                          <div class="client-picture">
                            <img src="{{ asset('storage/'.$client->image) }}" alt="{{ $client->nom_complet }}">
                          </div>
                          <h5 class="card-title">{{ $client->nom_complet }}</h5>
                          <p class="card-text">Email: {{ $client->email }}</p>
                          <p class="card-text">Phone Number: {{ $client->numero_tel }}</p>
                          <p class="card-text">Address: {{ $client->adresse }}</p>
                          <div class="btn-group" role="group" aria-label="Basic example">
                              <form action="{{route('Client.edit',$client->id)}}">
                                  @csrf
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                              <form action="{{route('Client.show',$client->id)}}" >
                                  @csrf
                                  <button type="submit" class="btn btn-info">Find</button>
                              </form>
                              <form action="{{route('Client.destroy',$client->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
      
      {{ $clients->links() }}
  </x-slot>
</x-front-layout> --}}

