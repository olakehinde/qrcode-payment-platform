<div class="row">
<div class="col-md-6">
    <!-- User name Field -->
    <div class="form-group">
        {!! Form::label('user_id', 'Account Holder:') !!}
        <p>{!! $account->user['name'] !!}</p>
    </div>

    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        <p>{!! $account->email !!}</p>
    </div>

    <!-- Bank Account Field -->
    <div class="form-group">
        {!! Form::label('bank_account', 'Account Number:') !!}
        <p>{!! $account->bank_account !!}</p>
    </div>

    <!-- Applied For Payout Field -->
    <div class="form-group">
        {!! Form::label('applied_for_payout', 'Payout Requested:') !!}
        <p>{!! $account->applied_for_payout == 1 ? 'Yes' : 'No' !!}</p>
    </div>

    <!-- Is Paid Field -->
    <div class="form-group">
        {!! Form::label('is_paid', 'Paid ?:') !!}
        <p>{!! $account->is_paid == 0 ? 'No' : 'Yes' !!}</p>
    </div>

    <!-- Withdrawal Method Field -->
    <div class="form-group">
        {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
        <p>{!! $account->withdrawal_method !!}</p>
    </div>

    <!-- Last Date Applied Field -->
    <div class="form-group">
        {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
        <p>{!! !is_null($account->last_date_applied) ? $account->last_date_applied->format('D d, M Y') : '' !!}</p>
    </div>

    <!-- Last Date Paid Field -->
    <div class="form-group">
        {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
        <p>{!! !is_null($account->last_date_paid) ? $account->last_date_paid->format('D d, M Y') : '' !!}</p>
    </div>

    <!-- Other Details Field -->
    <div class="form-group">
        {!! Form::label('other_details', 'Other Details:') !!}
        <p>{!! $account->other_details !!}</p>
    </div>

    <!-- Deleted At Field -->
    <div class="form-group">
        {!! Form::label('deleted_at', 'Deleted:') !!}
        <p>{!! !is_null($account->deleted_at) ? $account->deleted_at->format('D d, M Y H:i') : '' !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created On:') !!}
        <p>{!! !is_null($account->created_at) ? $account->created_at->format('D d, M Y H:i') : '' !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated On:') !!}
        <p>{!! !is_null($account->updated_at) ? $account->updated_at->format('D d, M Y H:i') : '' !!}</p>
    </div>
</div>

<!-- second div -->
<div class="col-md-6">
    <!-- Bank Name Field -->
    <div class="form-group">
        {!! Form::label('bank_name', 'Bank Name:') !!}
        <p>{!! $account->bank_name !!}</p>
    </div>

    <!-- Bank Branch Field -->
    <div class="form-group">
        {!! Form::label('bank_branch', 'Branch:') !!}
        <p>{!! $account->bank_branch !!}</p>
    </div>

    <!-- Country Field -->
    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        <p>{!! $account->country !!}</p>
    </div>

    <!-- Balance Field -->
    <div class="form-group">
        {!! Form::label('balance', 'Balance:') !!}
        <p>&#x20A6;{!! number_format($account->balance) !!}</p>
    </div>

    <!-- Total Balance Field -->
    <div class="form-group">
        {!! Form::label('total_balance', 'Total Balance:') !!}
        <p>&#x20A6;{!! number_format($account->total_balance) !!}</p>
    </div>

    <!-- Total Debit Field -->
    <div class="form-group">
        {!! Form::label('total_debit', 'Total Debit:') !!}
        <p>&#x20A6;{!! number_format($account->total_debit) !!}</p>
    </div>
</div>
</div>
<hr>
<!-- Add Account History section content here -->
<h4>Account History</h4>
<div class="box box-primary">
    <div class="box-body">
        <div class="row" style="padding-left: 20px">
            @if(count($accountHistories) < 1)
                <p>No Account History data yet</p>
            @else
                @include('account_histories.table')
            @endif
        </div>
    </div>
</div>