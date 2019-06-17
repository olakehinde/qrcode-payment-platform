<!-- Account Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_id', 'Account Id:') !!}
    {!! Form::number('account_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_message', 'Status Message:') !!}
    {!! Form::text('status_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('accountHistories.index') !!}" class="btn btn-default">Cancel</a>
</div>
