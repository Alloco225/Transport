<!-- @extends('pages.companies.index')
@section('forms')
    <div class="modal">
        <div class="modal-dialog" id="create">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST']) !!}
                        <div class="form-grop">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom de la compagnie'])}}
                        </div>
                        <div class="form-grop">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection -->