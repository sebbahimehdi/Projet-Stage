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


.container1 {
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-color:#ffffff ;
          color: #fff

          
      }
  
      .text-container {
          width: 50%;
          padding: 50px;
          color: #000000
      }
      .text-container h1 {
          
          color: #000000;

      }
      .text-container h3 {
        color:#000000;
      }
  
      .image-container {
          width: 40%;
          
          min-height: 625px;
          /* "https://img.freepik.com/premium-vector/illustration-delivery-service-application-with-health-protocol_4968-1285.jpg?w=740" */
           background-image: url("https://img.freepik.com/free-vector/two-men-shake-hands-with-each-other-isolated-white-background-meeting-greeting-friends-businessmen-deal-agreement-illustration-partnership-cooperation-communication_575670-2344.jpg?t=st=1713992852~exp=1713996452~hmac=bafb68cf060b97b4e05ebe19d4968613c489b94eb0fe5e90f4c466f2d2fc56ff&w=900"); 
          background-position: 50% 50%;
          justify-content: space-around;
  }
      .image-container img {
          max-width: 100%;
          height: auto;
         
      }
   </style>
       <section class="boxes padding-100">
          <div class="container1">
              <div class="text-container">
                  <h3 >Hello,</h3>
                 
                  <h1>{{ auth()->user()->nom_complet ?? ''}}</h1>
                  
                  <h6>Whether you need to move something across town, between cities, or across the country</h6>
      
                  <p>Thanks to our Partners and our Ambassadors,we offer our customers a unique experience. </p>
                  <br>
              </div>
              <div class="image-container">
                  {{-- <img src="{{asset('picture/deliveryblue.png')}}" alt="" srcset=""> --}}
              </div>
          </div>
          </section>

{{-- <section>  
   
  <h1 class="text text-center"> {{ auth()->user()->nom_complet ?? ''}}</h1>
   <div class="container2">
      
      <div class="card">
          <div class="box">
            <div class="content">
              <h2><i class="fa-solid fa-location-dot"></i></h2>
              <h3>Destinataire</h3>
                <p>Chers Clients, pour inscrire un destination </p>
                  <form action="{{route('Destenataire.create')}}">
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
              <h3>Commande</h3>
                <p>Chers Clients, pour Inscrire Commande </p>
                  <form action="{{route('Commande.create')}}">
                      @csrf
                      <button class="btn btn-primary">
                          Clicker ici
                      </button>
                  </form>
            </div>
          </div>
      </div>
    
      
   </div>
</section> --}}

<!-- Start Blog Section Area -->
<section class="blog-section section">
  <div class="container">
      <div class="row ">
          <div class="col-12">
              <div class="section-title">
                  <h2>Barid Maroc</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt ex placeat fugiat quasi accusantium voluptatem repellat quo amet culpa adipisci.</p>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12">
              <!-- Start Single Blog -->
              <div class="single-blog">
                  <div class="blog-img">
                      <a href="blog-single-sidebar.html">
                          <img src="https://static.onlinecv.fr/wp-content/uploads/sites/36/2023/02/16154016/destinataire-lettre-de-motivation.jpg" alt="#">
                      </a>
                  </div>
                  <div class="blog-content">
                      <a class="category" href="javascript:void(0)">Destinataire</a>
                      <h4>
                          <a href="blog-single-sidebar.html">Destinataire</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur incididunt.</p>
                      <div class="button">
                          <a href="{{route('Destenataire.create')}}" class="btn">Inscrire Destinataire</a>
                      </div>
                  </div>
              </div>
              <!-- End Single Blog -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
              <!-- Start Single Blog -->
              <div class="single-blog">
                  <div class="blog-img">
                      <a href="blog-single-sidebar.html">
                          <img src="https://cdn.pixabay.com/photo/2024/04/05/05/16/e-commerce-8676526_640.jpg" alt="#">
                      </a>
                  </div>
                  <div class="blog-content">
                      <a class="category" href="javascript:void(0)">Commande</a>
                      <h4>
                          <a href="blog-single-sidebar.html">commande</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt.</p>
                      <div class="button">
                          <a href="{{route('Commande.create')}}" class="btn">Inscrire commande</a>
                      </div>
                  </div>
              </div>
              <!-- End Single Blog -->
          </div>
              <!-- End Single Blog -->
          </div>
      </div>
  </div>
</section>
  </x-slot:breadcrumb>
</x-front-layout> 