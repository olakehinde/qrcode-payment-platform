<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Role:') !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created:') !!}
    <p>{!! $role->created_at->format('D d M, Y') !!}</p>
</div>

