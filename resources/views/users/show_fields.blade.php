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

<hr>
<!-- import all transactions for this user -->
@if($user->id == Auth::user()->id || Auth::user()->role_id < 3)
    @if(count($transactions) > 0)
        <h4>Transactions by {{ $user->name }} </h4>
        @include('transactions.table')
    @else
        <h4>No Transactions created yet.</h4>
    @endif
    
    <hr>

    @if(count($qrcodes) > 0)
        <h4>Qrcodes created by {{ $user->name }} </h4>
        @include('qrcodes.table')
    @else
        <h4>No Qrcode created by {{ $user->name }}.</h4>
    @endif
@endif