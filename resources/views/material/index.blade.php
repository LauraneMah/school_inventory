@extends('layouts.app')

@section('template_title')
    Material
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Material') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Description</th>
										<th>Material Type</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materials as $material)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $material->description }}</td>
											<td>{{ $material->materialType->name }}</td>

                                            <td>
                                                <form action="{{ route('materials.destroy',$material->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materials.show',$material->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materials.edit',$material->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('downgradeds.create', $material->id) }}"><i class="fa fa-fw fa-trash"></i> Downgrade</a>
                                                    @csrf

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materials->links() !!}
            </div>
        </div>
    </div>
@endsection
