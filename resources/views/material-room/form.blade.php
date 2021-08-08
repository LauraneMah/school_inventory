<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group" name="description">
            {{ Form::label('Choose furniture material : ') }}
            {{ Form::select('description',$Fmat, null, ['class' => 'form-control', 'placeholder' => 'Material']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Choose room : ') }}
            {{ Form::select('name',$listRooms,null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
