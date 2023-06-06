@extends('admin.layouts.master')

@section('content')



<div class="row">
    <div class="col-md-12">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Liste des services</h3>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jour</th>
                                <th>Heures d'ouverture</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($openingHours)>0)
                            @foreach($openingHours as $o)
                            <tr>
                                <td>{{$o->day_id}}</td>
                                <td>{{$o->day->name}}</td>
                                <td>{{ $o->time ? $o->time : 'Fermé' }}</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$o->id}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href=""><i class="fas fa-edit" style="color: #fbb042;"></i></a>

                                        <a href="">
                                            <i class="fas fa-trash" style="color: red;"></i>
                                        </a>

                                    </div>
                                </td>


                            </tr>

                            <!-- View Modal -->
                            @include('admin.openingHours.modal')



                            @endforeach

                            @else
                            <td>Aucune heure d'ouverture à afficher</td>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection