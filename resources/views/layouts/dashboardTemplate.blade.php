  @section('title', ': Dashboard')

@extends('layouts.frontendContainer')

@section('container')


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">

<?php // General Navigation ?>
		  <ul class="nav nav-sidebar">
		    <li class="{{ $sidebarNum==1 ? 'active' : ' ' }}"><a href="/dashboard/myprofile">My Profile</a></li>
		    <li class="{{ $sidebarNum==2 ? 'active' : ' ' }}"><a href="/dashboard/registration-history">Registration History</a></li>
		    <li class="{{ $sidebarNum==3 ? 'active' : ' ' }}"><a href="/dashboard/progress">Progress</a></li>
		    <li class="{{ $sidebarNum==4 ? 'active' : ' ' }}"><a href="/dashboard/diary">Diary</a></li>
		  </ul>

<?php // Admin Navigation ?>
@if( Auth::user()->hasRole('admin') )
		  <ul class="nav nav-sidebar">
		    <li class="{{ $sidebarNum==5 ? 'active' : ' ' }}"><a href="/dashboard/manage-classes">Manage Classes</a></li>
		    <li class="{{ $sidebarNum==6 ? 'active' : ' ' }}"><a href="/dashboard/manage-locations">Manage Locations</a></li>
		    <li class="{{ $sidebarNum==7 ? 'active' : ' ' }}"><a href="/dashboard/manage-staff">Manage Staff</a></li>
		    <li class="{{ $sidebarNum==8 ? 'active' : ' ' }}"><a href="/dashboard/manage-schedule">Manage Schedule</a></li>
		    <li class="{{ $sidebarNum==9 ? 'active' : ' ' }}"><a href="/dashboard/messaging">Messaging</a></li>
		  </ul>
@endif

<?php // Owner Navigation ?>
@if( Auth::user()->hasRole('owner') )
		  <ul class="nav nav-sidebar">
		    <li class="{{ $sidebarNum==10 ? 'active' : ' ' }}"><a href="/dashboard/manage-users">Manage Users</a></li>
		    <li class="{{ $sidebarNum==11 ? 'active' : ' ' }}"><a href="/dashboard/manage-security">Manage Security</a></li>
		    <li class="{{ $sidebarNum==12 ? 'active' : ' ' }}"><a href="/dashboard/settings">Settings</a></li>
		  </ul>
@endif
		</div>



		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


@yield('content')




		</div>
	</div>
</div>


@endsection
