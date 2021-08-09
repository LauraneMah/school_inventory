@extends('layouts.app')

@section('template_title')
    {{ $downgraded->name ?? 'Show Downgraded' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Downgraded</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('downgradeds.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $downgraded->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Motive:</strong>
                            {{ $downgraded->motive }}
                        </div>
                        <div class="form-group">
                            <strong>Material Id:</strong>
                            {{ $downgraded->material_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
