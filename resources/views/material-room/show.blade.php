@extends('layouts.app')

@section('template_title')
    {{ $materialRoom->name ?? 'Show Material Room' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Material Room</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('material-rooms.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Material Id:</strong>
                            {{ 'material_id',$materialRoom->material_id }}
                        </div>
                        <div class="form-group">
                            <strong>Room Id:</strong>
                            {{ $materialRoom->room_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
