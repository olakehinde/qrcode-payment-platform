@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="col-md-6 pull-left">
            Role - {{ $role->name }}
        </h1>

        <a href="{!! route('roles.edit', [$role->id]) !!}" class='btn btn-primary pull-right ' style="padding-bottom: 5px;">
            <i class="glyphicon glyphicon-edit"></i> Edit</a>
    </section>
    <div class="content" style="margin-top: 5px;">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body"> 
                <div class="row" style="padding-left: 20px">
                    @include('roles.show_fields')
                </div>
                <a href="{!! route('roles.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
@endsection
