<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group" name="description">
            {{ Form::label('Choose IT material : ') }}
            {{ Form::select('description',$ITmat, null, ['class' => 'form-control', 'placeholder' => 'Material']) }}
        </div>

        <div class="form-group">
            {{ Form::label('Choose person : ') }}
            {{ Form::select('name',$listPeople,null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
