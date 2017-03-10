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

	<!-- HEADER -->
	<header id="header">

		<div id="logo-group">

			<!-- PLACE YOUR LOGO HERE -->
			<span id="logo"> <img src="{{ asset('storage/images/logo.png') }}" alt="SmartAdmin"> </span>
			<!-- END LOGO PLACEHOLDER -->

			<!-- Note: The activity badge color changes when clicked and resets the number to 0
			Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
			<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

			<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
			<div class="ajax-dropdown">

				<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
				<div class="btn-group btn-group-justified" data-toggle="buttons">
					<label class="btn btn-default">
						<input type="radio" name="activity" id="<?php echo url()->current(); ?>/ajax/notify/mail.php">
						Msgs (14) </label>
					<label class="btn btn-default">
						<input type="radio" name="activity" id="<?php echo url()->current(); ?>/ajax/notify/notifications.php">
						notify (3) </label>
					<label class="btn btn-default">
						<input type="radio" name="activity" id="<?php echo url()->current(); ?>/ajax/notify/tasks.php">
						Tasks (4) </label>
				</div>

				<!-- notification content -->
				<div class="ajax-notifications custom-scroll">

					<div class="alert alert-transparent">
						<h4>Click a button to show messages here</h4>
						This blank page message helps protect your privacy, or you can show the first message here automatically.
					</div>

					<i class="fa fa-lock fa-4x fa-border"></i>

				</div>
				<!-- end notification content -->

				<!-- footer: refresh area -->
				<span> Last updated on: 12/12/2013 9:43AM
					<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
						<i class="fa fa-refresh"></i>
					</button> </span>
				<!-- end footer -->

			</div>
			<!-- END AJAX-DROPDOWN -->
		</div>

		<!-- projects dropdown -->
		<div class="project-context hidden-xs">

			<span class="label">Projects:</span>
			<span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent history <i class="fa fa-angle-down"></i></span>

			<!-- Suggestion: populate this list with fetch and push technique -->
			<ul class="dropdown-menu">
				<li>
					<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
				</li>
				<li>
					<a href="javascript:void(0);">Notes on pipeline upgradee</a>
				</li>
				<li>
					<a href="javascript:void(0);">Assesment Report for merchant account</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
				</li>
			</ul>
			<!-- end dropdown-menu-->

		</div>
		<!-- end projects dropdown -->

		<!-- pulled right: nav area -->
		<div class="pull-right">

			<!-- collapse menu button -->
			<div id="hide-menu" class="btn-header pull-right">
				<span> <a href="javascript:void(0);" title="Collapse Menu" data-action="toggleMenu"><i class="fa fa-reorder"></i></a> </span>
			</div>
			<!-- end collapse menu -->

			<!-- #MOBILE -->
			<!-- Top menu profile link : this shows only when top menu is active -->
			<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
				<li class="">
					<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
						<img src="{{ asset('storage/images/avatars/sunny.png') }}" alt="John Doe" class="online" />
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="profile.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="{{ route('logout') }}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
						</li>
					</ul>
				</li>
			</ul>

			<!-- logout button -->
			<div id="logout" class="btn-header transparent pull-right">
				<span> <a href="{{ route('logout') }}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
			</div>
			<!-- end logout button -->

			<!-- search mobile button (this is hidden till mobile view port) -->
			<div id="search-mobile" class="btn-header transparent pull-right">
				<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
			</div>
			<!-- end search mobile button -->

			<!-- input: search field -->
			<form action="<?php echo url()->current(); ?>/search.php" class="header-search pull-right">
				<input type="text" name="param" placeholder="Find reports and more" id="search-fld">
				<button type="submit">
					<i class="fa fa-search"></i>
				</button>
				<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
			</form>
			<!-- end input: search field -->

			<!-- fullscreen button -->
			<div id="fullscreen" class="btn-header transparent pull-right">
				<span> <a href="javascript:void(0);" title="Full Screen" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i></a> </span>
			</div>
			<!-- end fullscreen button -->



		</div>
		<!-- end pulled right: nav area -->

	</header>
	<!-- END HEADER -->




	<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="{{ asset('storage/images/avatars/sunny.png') }}" alt="me" class="online" />
						<span>
							@if (Auth::guest())
								Guest
							@else
								{{ Auth::user()->name }}
							@endif
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!--
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul>
					<li class="active">
						<a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
						<ul>
							<li class="active">
								<a href="{{ url('/dashboard/myprofile') }}" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
							</li>
							<li class="">
								<a href="dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
							</li>
						</ul>
					</li>
					<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
						<ul>
							<li class="">
								<a href="layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
							</li>
							<li class="">
								<a href="skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
							</li>
							<li>
								<a href="applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Email</span> <span class="badge inbox-badge margin-right-13">14</span></a>
						<ul>
							<li class="">
								<a href="{{ url('/dashboard/email') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Messages</span></a>
							</li>
							<li class="">
								<a href="{{ url('/dashboard/mailing-list') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Mailing List</span></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-group"></i> <span class="menu-item-parent">Staff</span></a>
						<ul>
							<li>
								<a href="{{ url('/dashboard/manage-staff') }}" title="Dashboard"><span class="menu-item-parent">Staff List</span></a>
							</li>
							<li class="">
								<a href="dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Add Staff</span></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-location-arrow"></i> <span class="menu-item-parent">Locations</span></a>
						<ul>
							<li>
								<a href="{{ url('/dashboard/manage-locations') }}" title="Dashboard"><span class="menu-item-parent">Location Manager</span></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Schedule</span></a>
						<ul>
							<li>
								<a href="{{ url('/dashboard/manage-schedule') }}" title="Dashboard"><span class="menu-item-parent">Schedule Manager</span></a>
							</li>
						</ul>
					</li>



					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
						<ul>
							<li>
								<a href="flot.html">Flot Chart</a>
							</li>
							<li>
								<a href="morris.html">Morris Charts</a>
							</li>
							<li>
								<a href="sparkline-charts.html">Sparklines</a>
							</li>
							<li>
								<a href="easypie-charts.html">EasyPieCharts</a>
							</li>
							<li>
								<a href="dygraphs.html">Dygraphs</a>
							</li>
							<li>
								<a href="chartjs.html">Chart.js</a>
							</li>
							<li>
								<a href="hchartable.html">HighchartTable <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
						<ul>
							<li>
								<a href="table.html">Normal Tables</a>
							</li>
							<li>
								<a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
						<ul>
							<li>
								<a href="form-elements.html">Smart Form Elements</a>
							</li>
							<li>
								<a href="form-templates.html">Smart Form Layouts</a>
							</li>
							<li>
								<a href="validation.html">Smart Form Validation</a>
							</li>
							<li>
								<a href="bootstrap-forms.html">Bootstrap Form Elements</a>
							</li>
							<li>
								<a href="bootstrap-validator.html">Bootstrap Form Validation</a>
							</li>
							<li>
								<a href="plugins.html">Form Plugins</a>
							</li>
							<li>
								<a href="wizard.html">Wizards</a>
							</li>
							<li>
								<a href="other-editors.html">Bootstrap Editors</a>
							</li>
							<li>
								<a href="dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="image-editor.html">Image Cropping</a>
							</li>
							<li>
								<a href="ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
						<ul>
							<li>
								<a href="general-elements.html">General Elements</a>
							</li>
							<li>
								<a href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="#">Icons</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
									</li>
									<li>
										<a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
									</li>
									<li>
										<a href="flags.html"><i class="fa fa-flag"></i> Flags</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="grid.html">Grid</a>
							</li>
							<li>
								<a href="treeview.html">Tree View</a>
							</li>
							<li>
								<a href="nestable-list.html">Nestable Lists</a>
							</li>
							<li>
								<a href="jqui.html">JQuery UI</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a href="#">Six Level Menu</a>
								<ul>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2</a>
										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-plus"></i> Expand</a>
														<ul>
															<li>
																<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #3</a>

										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="inactive"><i class="fa fa-fw fa-folder-open"></i> Item #4 (disabled)</a>
									</li>

								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span></a>
						<ul>
							<li>
								<a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
							</li>
							<li>
								<a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
						<ul>
							<li>
								<a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
							</li>
							<li>
								<a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							<li>
								<a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
								<ul>
									<li><a href="forum.html">General View</a></li>
									<li><a href="forum-topic.html">Topic View</a></li>
									<li><a href="forum-post.html">Post View</a></li>
								</ul>
							</li>
							<li>
								<a href="profile.html"><i class="fa fa-group"></i> Profile</a>
							</li>
							<li>
								<a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
							</li>
							<li>
								<a href="search.html"><i class="fa fa-search"></i>  Search Page</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>
						<ul>
							<li><a href="orders.html">Orders</a></li>
							<li><a href="products-view.html">Products View</a></li>
							<li><a href="products-detail.html">Products Detail</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
						<ul>
							<li>
								<a href="../Landing_Page/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
							</li>
							<li>
								<a href="pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="invoice.html">Invoice</a>
							</li>
							<li>
								<a href="login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="forgotpassword.html" target="_top">Forgot Password</a>
							</li>
							<li>
								<a href="lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="error404.html">Error 404</a>
							</li>
							<li>
								<a href="error500.html">Error 500</a>
							</li>
							<li>
								<a href="blank_.html">Blank Page</a>
							</li>
						</ul>
					</li>
					<li class="chat-users top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
						<ul>
							<li>
								<!-- DISPLAY USERS -->
								<div class="display-users">

									<input class="form-control chat-user-filter" placeholder="Filter" type="text">

								  	<a href="#" class="usr"
									  	data-chat-id="cha1"
									  	data-chat-fname="Sadi"
									  	data-chat-lname="Orlaf"
									  	data-chat-status="busy"
									  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!"
									  	data-chat-alertshow="true"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										">
									  	<i></i>Sadi Orlaf
								  	</a>

									<a href="#" class="usr"
										data-chat-id="cha2"
									  	data-chat-fname="Jessica"
									  	data-chat-lname="Dolof"
									  	data-chat-status="online"
									  	data-chat-alertmsg=""
									  	data-chat-alertshow="false"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										">
									  	<i></i>Jessica Dolof
									</a>

									<a href="#" class="usr"
									  	data-chat-id="cha3"
									  	data-chat-fname="Zekarburg"
									  	data-chat-lname="Almandalie"
									  	data-chat-status="online"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										">
									  	<i></i>Zekarburg Almandalie
									</a>

									<a href="#" class="usr"
									  	data-chat-id="cha4"
									  	data-chat-fname="Barley"
									  	data-chat-lname="Krazurkth"
									  	data-chat-status="away"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
									  	<i></i>Barley Krazurkth
									</a>

									<a href="#" class="usr offline"
									  	data-chat-id="cha5"
									  	data-chat-fname="Farhana"
									  	data-chat-lname="Amrin"
									  	data-chat-status="incognito"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										">
									  	<i></i>Farhana Amrin (offline)
									</a>

									<a href="#" class="usr offline"
										data-chat-id="cha6"
									  	data-chat-fname="Lezley"
									  	data-chat-lname="Jacob"
									  	data-chat-status="incognito"
									  	data-rel="popover-hover"
									  	data-placement="right"
									  	data-html="true"
									  	data-content="
											<div class='usr-card'>
												<img src='images/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
									  	<i></i>Lezley Jacob (offline)
									</a>

									<a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

								</div>
								<!-- END DISPLAY USERS -->
							</li>
						</ul>
					</li>
				</ul>
			</nav>

			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->


<?php /*

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
</nav> */ ?>
