@extends('admin.layouts.master')

@section('content')
<style>
    .table-vehicle-thumb {
        width: 40px;
        /* Adjust the width to your desired size */
        height: auto;
        /* Maintain aspect ratio */
        border-radius: 30%;
        /* Make it circular */
    }
</style>


<div class="row">
    <div class="col-md-12">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Liste des vehicles</h3>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Marque</th>
                                <th>Modéle</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($vehicles)>0)
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{$vehicle->brand}}</td>
                                <td>{{$vehicle->description}}</td>
                                <td>
                                    <div class="table-actions">

                                        <a href="{{route('vehicle.edit',[$vehicle->id])}}"><i class="fas fa-edit" style="color: #fbb042;"></i></a>



                                    </div>
                                </td>


                            </tr>

                            @endforeach

                            @else
                            <td>Aucun véhicule à afficher</td>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection