@extends('layouts.app')

@section('template_title')
    {{ $person->name ?? 'Show Person' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $person->name }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $person->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $person->username }}
                        </div>
                        <div class="form-group">
                            <strong>Role Id:</strong>
                            {{ $person->role_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
