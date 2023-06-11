 <!-- Modal -->
 <div class="modal fade" id="carModal{{ $vehicle->id }}" tabindex="-1" role="dialog" aria-labelledby="carModalLabel{{ $vehicle->id }}" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="carModalLabel{{ $vehicle->id }}">Détails du véhicule</h5>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div id="carouselExampleIndicators{{ $vehicle->id }}" class="carousel slide" data-ride="carousel">
                     <!-- Carousel content -->
                 </div>
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         @foreach (explode(',', $vehicle->image) as $index => $imageName)
                         <li data-target="#carouselExample{{$vehicle->id}}" data-slide-to="{{$index}}" @if ($index==0) class="active" @endif></li>
                         @endforeach

                     </ol>
                     <div class="carousel-inner">


                         @foreach (explode(',', $vehicle->image) as $index => $imageName)
                         <div class="carousel-item @if ($index == 0) active @endif">
                             <img src="{{ asset('vehicles_images/' . $imageName) }}" style="width: 100%; height: 600px;" alt="">
                         </div>
                         @endforeach

                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
                 <br>
                 <h6>Informations générales:</h6>
                 <p><span class="infog">Prix:</span> {{$vehicle->price}} €</p>
                 <p><span class="infog">Mise en circulation:</span> {{$vehicle->releaseYear}}</p>
                 <p><span class="infog">Kilométrage:</span> {{$vehicle->mileage}} KM</p>

                 <h6>Description:</h6>
                 <p>{{$vehicle->description}}</p>


                 <h6>Caractéristiques:</h6>
                 <table class="table">
                     <tbody>
                         <tr>
                             <th>Marque:</th>
                             <td>{{ $vehicle->brand }}</td>
                         </tr>
                         <tr>
                             <th>Modéle:</th>
                             <td>{{ $vehicle->model }}</td>
                         </tr>
                         <tr>
                             <th>Puissance fiscale:</th>
                             <td>{{ $vehicle->fiscalPower }}</td>
                         </tr>
                         <tr>
                             <th>Carburant:</th>
                             <td>{{ $vehicle->energy }}</td>
                         </tr>
                         <tr>
                             <th>Gearbox:</th>
                             <td>{{ $vehicle->gearbox }}</td>
                         </tr>
                     </tbody>
                 </table>


                 <h6>Équipement et options installées:</h6>
                 <ul>
                     @foreach (explode(',', $vehicle->equipment) as $eq)
                     <li>{{$eq}}</li>
                     @endforeach
                 </ul>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
             </div>
         </div>
     </div>
 </div>
 <style>
     .modal-dialog {
         max-width: 800px;
     }

     .carousel-item img {
         max-height: 400px;
         object-fit: cover;
     }

     .modal-title {
         font-size: 24px;
         font-weight: bold;
     }

     .modal-body {
         padding: 20px;
     }

     h6 {
         font-size: 18px;
         font-weight: bold;
         margin-bottom: 10px;
     }

     p,
     table,
     ul {
         font-size: 16px;
         margin-bottom: 10px;
     }

     table {
         width: 100%;
     }

     table th {
         width: 30%;
         font-weight: normal;
         text-align: left;
     }

     table td {
         width: 70%;
     }

     .infog {
         color: #972020;
     }
 </style>