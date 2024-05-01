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
                         <li>List Pays</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
  
     <h1>List pays</h1>
  
      <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>nom_complet</th>
              
            </tr>
          
            
            </thead>
            <tbody>
             @foreach ($Pays as $p)
             <tr>
           
                <td>{{$p->nom_pays}}</td>
                {{-- <td>{{$p->client->nom_complet}}</td> --}}
             </tr>
                 
             @endforeach
            </tbody>
      </table>

  
 
 
    </x-slot:breadcrumb>
 </x-front-layout>
