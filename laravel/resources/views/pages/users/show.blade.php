@extends('layouts.admin')
@section('content_')
<div class="container" id="edit">
        <div class="modal-dialog">
            <div class="modal-content bg-normal">
                <div class="modal-header">
                    <h2 class="modal-title" style="color:var(--bright);">"{{$company->name}}"</h2>
                    <a href="/companies/{{$company->id}}/edit" class="btn bg-sombre text-bright">Modifier</a>
                </div>
                <div class="modal-body  bg-sombre" style="overflow-y:hidden;">
                    <div class="" style="overflow-y:hidden;">
                        <img src="" alt="{{$company->name}}">
                    </div>
                        <hr>
                    <p class="lead">
                        {{$company->description}}
                    </p>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <a>
                        {!! Form::open(['action' => ['CompaniesController@destroy', $company->id], 'method'=>'POST', 'style' => 'display:inline']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Supprimer', ['class' => 'btn btn-danger', 'onclick' => "confirm('Vous allez supprimer cette compagnie')"])}}
                        {!! Form::close() !!}
                    </a>
                    <a href="/companies" class="btn bg-bright text-sombre">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection