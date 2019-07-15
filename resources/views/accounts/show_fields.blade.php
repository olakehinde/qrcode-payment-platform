<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $account->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    <p>{!! $account->user_id !!}</p>
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    <p>{!! $account->balance !!}</p>
</div>

<!-- Total Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_balance', 'Total Balance:') !!}
    <p>{!! $account->total_balance !!}</p>
</div>

<!-- Total Debit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_debit', 'Total Debit:') !!}
    <p>{!! $account->total_debit !!}</p>
</div>

<!-- Withdrawal Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
    <p>{!! $account->withdrawal_method !!}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $account->email !!}</p>
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    <p>{!! $account->bank_name !!}</p>
</div>

<!-- Bank Branch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    <p>{!! $account->bank_branch !!}</p>
</div>

<!-- Bank Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    <p>{!! $account->bank_account !!}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $account->country !!}</p>
</div>

<!-- Applied For Payout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('applied_for_payout', 'Applied For Payout:') !!}
    <p>{!! $account->applied_for_payout !!}</p>
</div>

<!-- Is Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_paid', 'Is Paid:') !!}
    <p>{!! $account->is_paid !!}</p>
</div>

<!-- Last Date Applied Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
    <p>{!! $account->last_date_applied !!}</p>
</div>

<!-- Last Date Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
    <p>{!! $account->last_date_paid !!}</p>
</div>

<!-- Other Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_details', 'Other Details:') !!}
    <p>{!! $account->other_details !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $account->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $account->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $account->updated_at !!}</p>
</div>

