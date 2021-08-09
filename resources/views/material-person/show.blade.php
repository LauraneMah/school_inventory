@extends('layouts.app')

@section('template_title')
    {{ $materialPerson->name ?? 'Show Material Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Material Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('material-people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Material Id:</strong>
                            {{ $materialPerson->material_id }}
                        </div>
                        <div class="form-group">
                            <strong>Person Id:</strong>
                            {{ $materialPerson->person_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
