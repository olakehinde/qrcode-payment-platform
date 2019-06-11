<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    <p>{!! $user->role['name'] !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified On:') !!}
    <p>
        {!!(!is_null($user->email_verified_at) ? $user->email_verified_at->format('D d M, Y h:i:s') : $user->email_verified_at)!!}
    </p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Joined:') !!}
    <p>{!! $user->created_at->format('D d M, Y h:i:s') !!}</p>
</div>