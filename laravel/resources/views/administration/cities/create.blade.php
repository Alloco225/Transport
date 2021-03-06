@extends('administration.cities.index')
@section('forms')
    <div class="modal">
        <div class="modal-dialog" id="create">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Ajouter une nouvelle Ville
                    </h2>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'CitiesController@store', 'method' => 'POST']) !!}
                        <div class="form-grop">
                            {{Form::label('name', 'Nom')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom de la ville'])}}
                        </div>
                        <div class="form-grop">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description de la ville'])}}
                        </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection