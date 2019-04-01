@extends('layouts.admin')
@section('content_')
    <div class="container" id="edit">
        <div class="modal-dialog">
            <div class="modal-content bg-normal">
                <div class="modal-header bg-sombre">
                    <h2 class="modal-title">
                        Modifier : 
                        <small style="color:var(--bright);">"{{$company->name}}"</small>
                    </h2>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => ['CompaniesController@update', $company->id], 'method' => 'POST']) !!}
                        <div class="form-grop">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $company->name, ['class' => 'form-control', 'placeholder' => 'Nom de la compagnie'])}}
                        </div>
                        <div class="form-grop">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', $company->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                        {{Form::hidden('_method', 'PUT')}}
                        <div class="form-group d-flex justify-content-between mt-2">
                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                            <a href="/companies" class="btn btn-danger">Annuler</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection