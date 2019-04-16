
@extends('layouts.admin')
@section('title')
Compagnies
@endsection
@section('content_')
<div class="container bg-sombre py-1 py-md-2">
    <div class="row d-flex justify-content-around px-1 sticky-top">
        <h3 class="" style="">Table des {{ count($companies)}} {{ $title ?? ''}}</h3>
        <span class="d-flex justify-content-around">
            <a href="/{{$title}}/create" class="btn btn-success mx-2" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>Ajouter</a>
            {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST']) !!}
                <div class="input-group">
                    {{Form::search('search', '', ['class' => 'form-control', 'placeholder' => 'Chercher'])}}
                        <div class="input-group-append">
                            {{Form::submit('Recherche', ['class' => 'btn bg-side text-light'])}}
                        </div>
                </div>
                
            {!! Form::close() !!}
        </span>
    </div>
</div>
<div class="container bg-sombre py-1 py-md-2 my-1 my-md-2 h-100" style="position:relative;">
    <div class="row" style="height:80vh;overflow-y:scroll!important;">
        <div class="container">
            @if(count($companies) > 0)
                <?php $i=1; ?>
                <div class="h-100" style="height:100%!important;">
                    <table class="table table-bordered table-hover">
                        <tr class="bg-normal sticky-top">
                            <th></th>
                            <th>Nom de la compagnie</th>
                            <th class="text-center">Opérations</th>
                        </tr>
                        @foreach($companies as $company)
                        <tr>
                            <td><?= $i ?><?php $i++; ?></td>
                            <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
                            <td colspan="" class="text-right">
                                <!-- <div class="d-flex justify-content-around"> -->
                                    <span>
                                        <a href="/companies/{{$company->id}}" class="btn btn-success">
                                            <i class="fa fa-eye"></i>Voir
                                        </a>
                                        <a href="/companies/{{$company->id}}/edit" class="btn btn-warning">
                                            <i class="fa fa-pencil"></i>Modifier
                                        </a>
                                        <a>
                                            {!! Form::open(['action' => ['CompaniesController@destroy', $company->id], 'method'=>'POST', 'style' => 'display:inline']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => "confirm('Vous allez supprimer cette compagnie')"])}}
                                            {!! Form::close() !!}
                                        </a>
                                    </span>
                                <!-- </div> -->
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            @else
                <div class="container d-flex justify-content-between bg-normal my-1 my-md-2">
                    {{ $title }} Vide
                </div>
            @endif
            
        </div>
    </div>
</div>
<!-- Create /*and edit*/ modals -->
    <!-- Create -->
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content bg-normal">
                <div class="modal-header bg-sombre">
                    <h2 class="modal-title d-flex justify-content-between">
                        <span>Ajouter une nouvelle compagnie</span>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </h2>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom de la compagnie'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            {{Form::submit('Submit', ['class' => 'btn btn-primary mt-2'])}}
                            <button type="cancel" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@yield('forms')