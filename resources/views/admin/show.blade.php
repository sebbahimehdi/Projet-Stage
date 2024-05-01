<x-front-layout>
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
    </x-slot>

    <style>
        .card {
            display: flex;
            max-width: 960px;
            border-radius: var(--border-radius-primary);
            box-shadow: 24px 24px 80px rgba(0,0,0,0.1);
            padding: 20px;
            box-sizing: border-box;
            margin: 20px;
        }

        .card__image {
            width: 300px;
            max-height: 300px;
            border-radius: var(--border-radius-primary);
            object-fit: cover;
            margin-right: 20px;
        }

        .card__content {
            flex-grow: 1;
        }

        .card__date {
            display: block;
            font-family: var(--font-family-secondary);
            font-size: var(--font-size-caption);
            line-height: var(--line-height-caption);
            text-transform: uppercase;
            color: var(--color-text);
            margin-bottom: 6px;
        }

        .card__title {
            font-family: var(--font-family-primary);
            font-size: var(--font-size-title);
            line-height: var(--line-height-title);
            color: var(--color-text);
            box-decoration-break: clone;
            background-image: linear-gradient(90deg, var(--color-highlight-primary), var(--color-highlight-secondary));
            background-size: 100% 42%;
            background-repeat: no-repeat;
            background-position: 0 85%;
            padding: 0 4px;
            margin-left: -4px;
            margin-bottom: 20px; /* Adjust spacing */
        }
    </style>

    {{$Client->commandes}}

    <div class="card">
        <img src="{{ asset('storage/'.$Client->image) }}" class="card__image" alt="{{ $Client->nom_complet }}" />
        <div class="card__content">
            <h1 class="card__date">Nom : {{ $Client->nom_complet }}</h1>
            <span class="card__title">Email :{{ $Client->email }}</span>
            <h4>Numero Telephone:{{ $Client->numero_tel }}</h4>
        </div>
    </div>
</x-front-layout>

{{-- {{$Client->commandes}}
  
     <h1> Client</h1>
     <h5> nom_Complet :{{$Client->nom_complet}}</h5>
     <h5>email :{{$Client->email}}</h5>
     <h5> Adresse :{{$Client->adresse}}</h5>
     <div> --}}
{{-- <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>nom_complet</th>
                <th>email</th>
                <th>numero_tel</th>
                <th>adresse</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            
            </thead>
            <tbody>
             @foreach ($clients as $client)
             <tr>
                <td>{{$client->nom_complet}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->numero_tel}}</td>
                <td>{{$client->adresse}}</td>
                <td>
                    <form action="{{route('Client.edit',$client->id)}}">
                        @csrf
                        <button class="btn btn-primary">Update</button>
                    
                    </form>
                </td>
              <td>
                <form action="{{route('Client.destroy',$client->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                
                </form>
              </td>
               
             </tr>
                 
             @endforeach
            </tbody>
      </table> --}}

      {{-- {{$clients->links()}} --}}