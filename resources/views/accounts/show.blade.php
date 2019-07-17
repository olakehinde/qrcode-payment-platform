@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            Account: {{ $account->id }} <small>{!! $account->applied_for_payout == 1 ? 'Payout request processing...' : '' !!}</small>
        </h1>

        <h1 class="pull-right">
            @if(Auth::user()->id == $account->user_id)
                {!! Form::open(['route' => ['accounts.apply_for_payout', $account->id], 'method' => 'post', 'class' => 'pull-left', 'style' => 'padding-right:5px']) !!}
                    {!! Form::button('Apply for Payout', ['type' => 'submit', 'class' => 'btn btn-info', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
            @endif

            @if(Auth::user()->role_id < 3)
                {!! Form::open(['route' => ['accounts.confirm_pay', $account->id], 'method' => 'post', 'class' => 'pull-right']) !!}
                    {!! Form::button('Pay', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
            @endif
        </h1>
    </section>
    
    <div class="clearfix"></div>
    
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('accounts.show_fields')
                </div>
                <a href="{!! route('accounts.index') !!}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
@endsection
