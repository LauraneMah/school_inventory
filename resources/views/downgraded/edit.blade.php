@extends('layouts.app')

@section('template_title')
    Update Downgraded
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Downgraded</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('downgradeds.update', $downgraded->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('downgraded.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
