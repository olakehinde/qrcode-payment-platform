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

    @if (!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'Owner:') !!}
            <p>{!! $qrcode->user['name'] !!}</p>
        </div>

        <!-- Callback Url Field -->
        <div class="form-group">
            {!! Form::label('callback_url', 'Callback Url:') !!}
            <p><a href="{!! $qrcode->callback_url !!}">{!! $qrcode->callback_url !!}</a></p>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>{!! ($qrcode->status == 1 ? 'Active' : 'Inactive') !!}</p>
        </div>

        

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created On:') !!}
            <p>{!! $qrcode->created_at->format('D d M, Y') !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated On:') !!}
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

    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    {{ $qrcode->product_name }}
                    ₦ {{ $qrcode->amount }}
                </div>
            </p>
            <input type="hidden" name="email" value="olakehinde59@gmail.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="{{$qrcode->id}}">
            <input type="hidden" name="amount" value="{{$qrcode->amount * 100}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
</form>
</div>

<!-- import all transactions for this qrcode -->
@if(!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))
    @if(count($transactions) > 0)
        <h4>List of Transactions </h4>
        @include('transactions.table')
    @else
        <h4>No Transactions created yet.</h4>
    @endif
@endif