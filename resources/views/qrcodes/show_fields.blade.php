<div class="col-md-6 ">
    <!-- Product Name Field -->
    <div class="form-group">
        <h3>{!! $qrcode->product_name !!} <br>
            <small>{!! (isset($qrcode->company_name) ? 'By: '.$qrcode->company_name : '') !!}</small>
        </h3>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        <h4>{!! 'Amount: &#x20A6;'. $qrcode->amount !!}</h4>
    </div>

    <!-- Website Field -->
   <!--  <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{!! $qrcode->website !!}</p>
    </div> -->

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product:') !!}
        <p><a href="{!! $qrcode->product_url !!}" target="_blank"> {!! $qrcode->product_url !!}</a></p>
    </div>
    <hr>

    @if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'User Id:') !!}
            <p>{!! $qrcode->user_id !!}</p>
        </div>

        <!-- Callback Url Field -->
        <div class="form-group">
            {!! Form::label('callback_url', 'Callback Url:') !!}
            <p>{!! $qrcode->callback_url !!}</p>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>{!! ($qrcode->status == 1 ? 'Active' : 'Inactive') !!}</p>
        </div>

        

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $qrcode->created_at->format('D d M, Y') !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $qrcode->updated_at->format('D d M, Y') !!}</p>
        </div>
    @endif
</div>

<div class="col-md-6 pull-right">
    <!-- Qrcode Image -->
    <div class="form-group">
        <h3>Scan QR code to Pay</h3>
        <img src="{!! asset($qrcode->qrcode_path) !!}">
    </div>
</div>