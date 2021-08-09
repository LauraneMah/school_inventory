@extends('layouts.app')

@section('template_title')
    {{ $material->name ?? 'Show Material' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Material</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materials.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $material->description }}
                        </div>
                        <div class="form-group">
                            <strong>Material Type</strong>
                            {{ $material->materialType->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
