@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="col-md-6 pull-left">
            Qrcode
        </h1>
        
        @if(Auth::user()->id == $qrcode->user_id)
        <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-primary pull-right ' style="padding-bottom: 5px;">
            <i class="glyphicon glyphicon-edit"></i> Edit
        </a>
        @endif
    </section>
    <div class="content" style="margin-top: 5px;">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                    <a href="{!! route('qrcodes.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
