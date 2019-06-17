@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Account
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($account, ['route' => ['accounts.update', $account->id], 'method' => 'patch']) !!}

                        @include('accounts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection