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
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        tr:hover td {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container1 {
            width: 100%;
        }

        .button-container {
            
            margin-top: 20px; /* Adjust margin as needed */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Button background color */
            color: #fff; /* Button text color */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
            color: black; /* Button background color on hover */
        }

        .container1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            color: #000;
        }

        .text-container {
            width: 50%;
            padding: 50px;
            color: #000000;
        }

        .text-container h1 {
            color: #000000;
        }

        .text-container h3 {
            color: #000000;
        }

        .image-container {
            width: 40%;
            min-height: 625px;
            background-image: url("https://img.freepik.com/free-vector/courier-delivering-order-customer-door-man-getting-parcel-box-package-flat-vector-illustration-postman-shipping-service_74855-8309.jpg?t=st=1713995892~exp=1713999492~hmac=a3f204c8ae0e4876cde8861d101046854876856872cc88f598e1f14fb7d5e4ae&w=900");
            background-position: 50% 50%;
            justify-content: space-around;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .text-container ul li{
            list-style: disc;
        }
    </style>

<section class="boxes padding-100">
    <div class="container1">
        <div class="text-container">
            <h3>Hello,</h3>
            <h1> {{ Auth::guard('employe')->user()->nom_employe ?? ''}}</h1>
            <br><br>
            <h5>You'll be responsible for ensuring timely and safe delivery of goods to our customers. Your primary duties will include:</h5>
            <ul>
                <li>Loading and unloading delivery vehicles</li>
                <li>Planning delivery routes and navigating to destinations efficiently</li>
                <li>Providing excellent customer service during deliveries</li>
                <li>Ensuring all deliveries are completed accurately and on time</li>
                <li>Maintaining cleanliness and organization of delivery vehicles</li>
                <li>Adhering to all safety and traffic regulations</li>
            </ul>
            <div class="button-container">
                <a href="{{ route('assosiation-tarif.create') }}" class="button">Assosiation Tarif</a>
            </div>
        </div>
        <div class="image-container"></div>
    </div>
</section>
<br><br>
    <section>
        <h1>Commande :</h1>
        <table>
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Client Image</th>
                    <th>Weight</th>
                    <th>Recipient Name</th>
                    <th>Recipient Address</th>
                    <th>Validation Date</th>
                    <th>Receiving Date</th>
                    <th>Tax</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                <tr>
                    <td>{{ $commande->client ? $commande->client->nom_complet : '' }}</td>
                    <td><img src="{{ asset('storage/' . $commande->client->image) }}" width="60px" alt=""></td>
                    <td>{{ $commande->poids_commande }} kg</td>
                    <td>{{ $commande->destinataires->nom_desyinataire }}</td>
                    <td>{{ $commande->destinataires->adresse }}</td>
                    <td>{{ $commande->date_validation }}</td>
                    <td>{{ $commande->date_recevoire }}</td>
                    <td>{{ $commande->taxe_commande }}</td>
                    <td>{{ $commande->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
    </section>
</x-front-layout>
