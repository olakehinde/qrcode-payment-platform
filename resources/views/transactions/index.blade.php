@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Transactions</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
            <div class="box box-primary">
                <div class="box-body">
                    @if(count($transactions) > 0)
                        @include('transactions.table')
                    @else
                        <h4>No transactions performed yet</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

