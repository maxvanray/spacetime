<!-- Fixed navbar -->

<?php
if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 1;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return ' active';
    }
}
?>


<nav class="navbar navbar-inverse navbar-fixed-top" id="headernav">
  <div class="container">
    <div class="navbar-header">
      <button
	      	type="button"
	      	class="navbar-toggle collapsed"
	      	data-toggle="collapse"
	      	data-target="#navbar"
	      	aria-expanded="false"
	      	aria-controls="navbar">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <!-- Branding Image -->
	    <a class="navbar-brand" href="{{ url('/') }}">
	        {{ config('app.name', 'Laravel') }}
	    </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">

			<li class="{{ classActivePath('') }}">
				<a href="/">Home</a>
			</li>
			<li class="{{ classActivePath('about') }}">
				<a href="/about" >About</a>
			</li>
			<li class="{{ classActivePath('calendar') }}">
				<a href="/calendar">Calendar</a>
			</li>
			<li class="{{ classActivePath('contact') }}">
				<a href="/contact">Contact</a>
			</li>
		</ul>

      	<!-- Right Side Of Navbar -->
		<ul class="nav navbar-nav navbar-right">
		    <!-- Authentication Links -->
		    @if (Auth::guest())
		        <li><a href="{{ route('login') }}" class="{!! classActivePath('login') !!}">Login</a></li>
		        <li><a href="{{ route('register') }}" class="{!! classActivePath('register') !!}">Register</a></li>
		    @else
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                {{ Auth::user()->name }} <span class="caret"></span>
		            </a>

		            <ul class="dropdown-menu" role="menu">
		                <li>
		                    <a href="{{ route('logout') }}"
		                        onclick="event.preventDefault();
		                                 document.getElementById('logout-form').submit();">
		                        Logout
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        {{ csrf_field() }}
		                    </form>
		                </li>
		                <li>
		                	<li class="{{ classActivePath('dashboard') }}">
								<a href="/dashboard">Dashboard</a>
							</li>
		                </li>
		            </ul>
		        </li>
		    @endif
		</ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>
