<!-- All users can access their profile-->
<li class="{{ Request::is('users/show') ? 'active' : '' }}">
    <a href="{!! route('users.show') !!}"><i class="fa fa-user"></i><span> My Profile</span></a>
</li>

<!-- All users can access their Account-->
<li class="{{ Request::is('accounts/show') ? 'active' : '' }}">
    <a href="{!! route('accounts.show') !!}"><i class="fa fa-line-chart"></i><span> My Account</span></a>
</li>

<!-- All users can access -->
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('transactions.index') !!}"><i class="fa fa-line-chart"></i><span>Transactions</span></a>
</li>

<!-- Webmaster -->
@if(Auth::user()->role_id < 4)
	<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
	    <a href="{!! route('qrcodes.index') !!}"><i class="fa fa-qrcode"></i><span>Qrcodes</span></a>
	</li>
@endif

<!-- Moderator -->
@if(Auth::user()->role_id < 3)
	<li class="{{ Request::is('users') ? 'active' : '' }}">
	    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
	</li>

	<li class="{{ Request::is('accounts') ? 'active' : '' }}">
	    <a href="{!! route('accounts.index') !!}"><i class="fa fa-line-chart"></i><span>Accounts</span></a>
	</li>

	<li class="{{ Request::is('accountHistories*') ? 'active' : '' }}">
	    <a href="{!! route('accountHistories.index') !!}"><i class="fa fa-history"></i><span>Account Histories</span></a>
	</li>
@endif

<!-- Only Admin can access -->
@if(Auth::user()->role_id == 1)
	<li class="{{ Request::is('roles*') ? 'active' : '' }}">
	    <a href="{!! route('roles.index') !!}"><i class="fa fa-user"></i><span>Roles</span></a>
	</li>
@endif

