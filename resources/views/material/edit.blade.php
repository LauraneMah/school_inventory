@extends('layouts.app')

@section('template_title')
    Update Material
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Material</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materials.update', $material->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('material.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
