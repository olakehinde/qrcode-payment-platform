<!-- product name -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!} 
    <p>
        <a href="/qrcodes/{!! $transaction->qrcode['id'] !!}">
            <b>{!! $transaction->qrcode['product_name'] !!}</b>
        </a>
    </p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $transaction->amount !!}</p>
</div>

<!-- Buyer name -->
<div class="form-group">
    {!! Form::label('user_id', 'Buyer Name:') !!}
    <p>
        <a href="users/{!! $transaction->user['id'] !!}">
            <b>{!! $transaction->user['name' ] !!}</b>
        </a> | {!! $transaction->user['email' ] !!}
    </p>
</div>

<!-- Qrcode Owner Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Product Owner:') !!}
    <p>
        <a href="/users/{!! $transaction->qrcode_owner['id'] !!}">
            <b>{!! $transaction->qrcode_owner['name'] !!}</b>
        </a>
    </p>
</div>


<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transaction->payment_method !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transaction->status !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transaction->message !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transaction->created_at->format('D d M, Y h:i') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transaction->updated_at->format('D d M, Y h:i') !!}</p>
</div>

