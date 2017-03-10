
@section('title', ': About')

@extends('layouts.dashboardTemplate')


@section('content')

<?php

switch ($section) {

    case 'myprofile':
    		$sidebarNum = 1; ?>
			@include('layouts.dashboards.myprofile')
	<?php  break;

    case 'registration-history':
    		$sidebarNum = 2; ?>
			@include('layouts.dashboards.registrationHistory')
    <?php break;

    case 'progress':
    		$sidebarNum = 3; ?>
			@include('layouts.dashboards.progress')
    <?php break;

	case 'diary':
			$sidebarNum = 4; ?>
			@include('layouts.dashboards.diary')
    <?php break;

	case 'manage-classes':
			$sidebarNum = 5; ?>
			@include('layouts.dashboards.manageClasses')
    <?php break;

    case 'manage-locations':
    		$sidebarNum = 6; ?>
			@include('layouts.dashboards.manageLocations')
    <?php break;

    case 'manage-staff':
    		$sidebarNum = 7; ?>
			@include('layouts.dashboards.manageStaff')
    <?php break;

    case 'manage-schedule':
    		$sidebarNum = 8; ?>
			@include('layouts.dashboards.manageSchedule')
    <?php break;

    case 'messaging':
    		$sidebarNum = 9; ?>
			@include('layouts.dashboards.messaging')
    <?php break;

    case 'manage-users':
    		$sidebarNum = 10; ?>
			@include('layouts.dashboards.manageUsers')
    <?php break;

    case 'manage-security':
    		$sidebarNum = 11; ?>
			@include('layouts.dashboards.manageSecurity')
    <?php break;

    case 'settings':
    		$sidebarNum = 12; ?>
			@include('layouts.dashboards.settings')
    <?php break;

    default:
    	$sidebarNum = 1; ?>
    	@include('layouts.dashboards.myprofile')
	<?php

}
?>
@endsection

@section('legroom')
<?php
switch ($section) {
    case 'manage-schedule': ?>
            @include('layouts.dashboards.schedule-legroom')
    <?php break;

} ?>
@endsection
