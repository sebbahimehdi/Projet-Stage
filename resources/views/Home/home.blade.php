<x-front-layout>
  <x-slot:breadcrumb>
      
   <div class="breadcrumbs">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6 col-md-6 col-12">
                   <div class="breadcrumbs-content">
                       <h1 class="page-title">Barid Al-Maghrib</h1>
                   </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                   <ul class="breadcrumb-nav">
                       <li><a href="index.html"><i class="lni lni-home"></i>Home</a></li>
                       <li>Home</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
   


  
  <style>
      .container1 {
          display: flex;
          justify-content: space-between;
          align-items: center;
          
      }
  
      .text-container {
          width: 50%;
          padding: 50px;
      }
  
      .image-container {
          width: 40%;
          
          min-height: 625px;
           background-image: url("https://img.freepik.com/premium-vector/illustration-delivery-service-application-with-health-protocol_4968-1285.jpg?w=740"); 
          background-position: 50% 50%;
          justify-content: space-around;
  }
      .image-container img {
          max-width: 100%;
          height: auto;
         
      }
      .u-list-item {
      display: inline-block;
      margin: 10px;
  }
  
  .u-list-item a {
      display: block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
  }
  
  .u-list-item a:hover {
      background-color: #0056b3;
  }
  Styling individual boxes
.box {
  background-color: blue;
  color: white;
  border-radius: 10px;
  padding: 40px; /* Increased padding */
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  height: 350px; 
}

.box:hover {
  transform: translateY(-5px);
}




/* Styling icons */
.icon {
  font-size: 60px; /* Increased icon size */
  color: white;
  margin-bottom: 30px; /* Increased margin */
}

/* Styling headings */
h4 {
  font-size: 30px; /* Increased heading size */
  font-weight: bold;
  margin-bottom: 20px; /* Increased margin */
  color: white;
}

/* Styling paragraphs */
p {
  font-size: 20px; /* Increased paragraph font size */
  line-height: 1.6;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .box {
      margin-bottom: 30px;
  }
}
.join-us__content {
  display: flex;
  justify-content: space-between;
}

.join-us__card {
  width: 45%; /* Adjust the width as needed */
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  height: 300px; /* Adjust the height as needed */
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin: 10px;
}

.join-us__card-image {
  max-width: 100%;
  border-radius: 10px;
}

.join-us__button {
  margin-top: 20px;
  font-size: 16px;
  font-weight: bold;
  width: 200px; /* Adjust the width as needed */
}

.join-us__button-partner,
.join-us__button-delivery {
  color: white;
}

.join-us__button-partner {
  background-color: #007bff; /* Blue color */
}

.join-us__button-delivery {
  background-color: #28a745; /* Green color */
}
/* hhhhhhhhhhhh */
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


html {
font-family: sans-serif;
box-sizing: border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}

.text-center {
text-align: center;
}

.color-white {
color: #fff;
}

.box-container {
align-items: center;
display: flex;
flex-direction: column;
justify-content: space-around;
padding: 35px 15px;
width: 100%;
}

@media screen and (min-width:1380px) {
.box-container {
  flex-direction: row
}
}

.box-container {
display: flex;
flex-direction: row;
justify-content: space-around; /* Adjust spacing between items */
align-items: center;
flex-wrap: wrap; /* Allow items to wrap to the next line */
background-color: #05182c;
}

.box-item {
position: relative;
-webkit-backface-visibility: hidden;
width: calc(50% - 20px); /* Adjust width to fit two items per row */
max-width: 415px;
margin-bottom: 35px;
margin: 45px;
}

.flip-box {
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
-webkit-transform-style: preserve-3d;
perspective: 1000px;
-webkit-perspective: 1000px;
}

.flip-box-front,
.flip-box-back {
background-size: cover;
background-position: center;
border-radius: 8px;
min-height: 475px;
-ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
-webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.flip-box-front {
-ms-transform: rotateY(0deg);
-webkit-transform: rotateY(0deg);
transform: rotateY(0deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box:hover .flip-box-front {
-ms-transform: rotateY(-180deg);
-webkit-transform: rotateY(-180deg);
transform: rotateY(-180deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box-back {
position: absolute;
top: 0;
left: 0;
width: 100%;

-ms-transform: rotateY(180deg);
-webkit-transform: rotateY(180deg);
transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box:hover .flip-box-back {
-ms-transform: rotateY(0deg);
-webkit-transform: rotateY(0deg);
transform: rotateY(0deg);
-webkit-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transform-style: preserve-3d;
}

.flip-box .inner {
position: absolute;
left: 0;
width: 100%;
padding: 60px;
outline: 1px solid transparent;
-webkit-perspective: inherit;
perspective: inherit;
z-index: 2;

transform: translateY(-50%) translateZ(60px) scale(.94);
-webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
-ms-transform: translateY(-50%) translateZ(60px) scale(.94);
top: 50%;
}

.flip-box-header {
font-size: 34px;
}

.flip-box p {
font-size: 20px;
line-height: 1.5em;
}

.flip-box-img {
margin-top: 25px;
color: #000;
}

.flip-box-button {
background-color: transparent;
border: 2px solid black;
border-radius: 2px;
color: black;
cursor: pointer;
font-size: 20px;
font-weight: bold;
margin-top: 25px;
padding: 15px 20px;
text-transform: uppercase;
}



  
  </style>
  <section class="boxes padding-100">
  <div class="container1">
      <div class="text-container">
          <h3>Barid Al Maghrib</h3>
          
          <h1>Delivery Service</h1>

          <p>Whether you need to move something across town, between cities, or across the country</p>

    <p>Thanks to our Partners and our Ambassadors,we offer our customers a unique experience. </p>
          <br>
      </div>
      <div class="image-container">
          {{-- <img src="{{asset('picture/deliveryblue.png')}}" alt="" srcset=""> --}}
      </div>
  </div>
  </section>
  <section>
      <div class="box-container">
          <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('https://img.freepik.com/free-vector/business-deal-concept-illustration_114360-1306.jpg?w=740&t=st=1713201700~exp=1713202300~hmac=dde00d829fefa13485bc263c98bdb2023e74f8e45fd35eccc065f286a834286d');">
              <div class="inner color-white">
                <h3 class="flip-box-header">Client</h3>
                <br>
                <i class='fas fa-arrow-alt-circle-right' style='font-size:66px'></i>
              </div>
            </div>
            <div class="flip-box-back text-center" style="background-image: url('https://img.freepik.com/free-vector/business-deal-concept-illustration_114360-1306.jpg?w=740&t=st=1713201700~exp=1713202300~hmac=dde00d829fefa13485bc263c98bdb2023e74f8e45fd35eccc065f286a834286d');">
              <div class="inner color-white">
                <h3 class="flip-box-header">Client</h3>
                <a type="submit" class="flip-box-button" href="{{route('loginClient.show')}}">Login</a>
              </div>
            </div>
          </div>
          </div>
          <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('https://img.freepik.com/free-vector/exploring-concept-illustration_114360-979.jpg?t=st=1713203077~exp=1713203677~hmac=00b9fa65927186a0089d46f98a25d6b83a2a5cb12f01e4b9116061bd42a3b96d');">
              <div class="inner color-white">
                <h3 class="flip-box-header">Facteur</h3>
                <br>
                <i class='fas fa-arrow-alt-circle-right' style='font-size:66px'></i>
              </div>
            </div>
            <div class="flip-box-back text-center" style="background-image: url('https://img.freepik.com/free-vector/exploring-concept-illustration_114360-979.jpg?t=st=1713203077~exp=1713203677~hmac=00b9fa65927186a0089d46f98a25d6b83a2a5cb12f01e4b9116061bd42a3b96d');">
              <div class="inner color-white">
                <h3 class="flip-box-header">facteur</h3>
                <a class="flip-box-button" href="{{route('employe.dashbord.login')}}">Login</a>
              </div>
            </div>
          </div>
          </div>
          </div>
      </div>
   </section>
    <!-- Start Blog Section Area -->
<section class="blog-section section">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-title">
                  <h2>Barid Maroc</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt ex placeat fugiat quasi accusantium voluptatem repellat quo amet culpa adipisci.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
              <!-- Start Single Blog -->
              <div class="single-blog">
                  <div class="blog-img">
                      <a href="blog-single-sidebar.html">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf2Q6oKC9XjrjfoG1YAoxg_CrDXo28_ITvDQ&usqp=CAU" alt="#">
                      </a>
                  </div>
                  <div class="blog-content">
                      <a class="category" href="javascript:void(0)">Client</a>
                      <h4>
                          <a href="blog-single-sidebar.html">Lorem ipsum dolor sit amet consectetur</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur incididunt.</p>
                      <div class="button">
                          <a href="javascript:void(0)" class="btn">Read More</a>
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
                          <img src="https://media.sudouest.fr/13648210/1000x500/20230116111022-lt1123.jpg?v=1702997142" alt="#">
                      </a>
                  </div>
                  <div class="blog-content">
                      <a class="category" href="javascript:void(0)">Facteur</a>
                      <h4>
                          <a href="blog-single-sidebar.html">Facteur</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt.</p>
                      <div class="button">
                          <a href="javascript:void(0)" class="btn">Read More</a>
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
                          <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2023/04/a-person-browsing-stock-photos-and-images-on-a-laptop.jpg" alt="#">
                      </a>
                  </div>
                  <div class="blog-content">
                      <a class="category" href="javascript:void(0)">admin</a>
                      <h4>
                          <a href="blog-single-sidebar.html">Admin
                          </a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod, Lorem ipsum dolor sit
                        </p>
                      <div class="button">
                          <a href="javascript:void(0)" class="btn">Read More</a>
                      </div>
                  </div>
              </div>
              <!-- End Single Blog -->
          </div>
      </div>
  </div>
</section>
<!-- End Blog Section Area -->
          <br>
  <section>
      <div class="container2">
          <div class="card">
            <div class="box">
              <div class="content">
                <h2><i class="fa-solid fa-wand-magic-sparkles"></i></h2>
                <h3>NOS CLIENTS</h3>
                <p>Chers Clients, vous êtes le coeur de nos préoccupations.</p>
                      <p>Nous vous proposons une expérience unique.</p>
                      <p>Avec Barid Al-Maghrib, vous gagnerez à tous les coups!</p>
              </div>
            </div>
          </div>
        
          <div class="card">
            <div class="box">
              <div class="content">
                <h2><i class="fa-solid fa-rocket"></i></h2>
                <h3>NOS PARTENAIRES</h3>
                <p> nous servons votre développement.</p>
                      <p>Nous mettons en valeur vos offres et vous apportons notre communauté de clients.</p>
                      <p>Avec Avec Barid Al-Maghrib, vous gagnerez à tous les coups! </p>
              </div>
            </div>
          </div>
        
          <div class="card">
            <div class="box">
              <div class="content">
                <h2><i class="fa-solid fa-gem"></i></h2>
                <h3>NOS AMBASSADEURS</h3>
                <p>Chers ambassadeurs, vous faites le lien entre nos clients et nos partenaires.</p>
                      <p>Grâce à votre expérience, vous délivrez un service de livraison de qualité.</p>
              </div>
            </div>
          </div>
        </div>
  </section>
  {{--    ---------------------------------------------------------  --}}  


<!-- Start Shipping Info -->
<section class="shipping-info">
    <div class="container">
        <ul>
            <!-- Free Shipping -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>Free Shipping</h5>
                    <span>On order over $99</span>
                </div>
            </li>
            <!-- Money Return -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>24/7 Support.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>
            <!-- Support 24/7 -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>
            <!-- Safe Payment -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
</x-slot:breadcrumb>
  
</x-front-layout>
