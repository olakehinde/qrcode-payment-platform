<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_url', 'Product Url:') !!}
    {!! Form::text('product_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Callback Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    {!! Form::text('callback_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Qrcode Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    {!! Form::text('qrcode_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('qrcodes.index') !!}" class="btn btn-default">Cancel</a>
</div>
