<aside class="sidebar sidebar-left sidebar-menu">
	<!-- START Sidebar Content -->
    <section class="content slimscroll">
		<!-- START Template Navigation/Menu -->
        <ul class="topmenu topmenu-responsive" data-toggle="menu">
            <li>
                <a href="/" data-target="#dashboard" data-parent=".topmenu">
                    <span class="figure"><i class="ico-home2"></i></span>
                    <span class="text">{{trans('app.menu.home')}}</span>
                </a>
            </li>
            @if ( 0 )
			<li class="active open" >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                    <span class="figure"><i class="ico-grid"></i></span>
                    <span class="text">Layouts</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="layout" class="submenu collapse in">
                    <li class="submenu-header ellipsis">Page Layout</li>
                    <li>
                        <a href="layout-default.html">
                            <span class="text">Default</span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-with-footer.html">
                            <span class="text">With footer</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-reveal-header.html">
                            <span class="text">Reveal header</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li class="active" >
                        <a href="layout-fixed-header.html">
                            <span class="text">Fixed header</span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-fixed-sidebar.html">
                            <span class="text">Fixed sidebar</span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-navbar-collapse.html">
                            <span class="text">Navbar Collapse</span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
			<li>
                <a href="widget.html" data-parent=".topmenu">
                    <span class="figure"><i class="ico-tasks"></i></span>
                    <span class="text">Stats & Widgets</span>
					<span class="number"><span class="label label-danger">6</span></span>
                </a>
            </li>
            <li >
                <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                    <span class="figure"><i class="ico-screen4"></i></span>
                    <span class="text">UI Elements</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="components" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Components</li>
                    <li >
                        <a href="component-animation.html">
                            <span class="text">Animation</span>
                        </a>
                    </li>
					<li >
                        <a href="component-button.html">
                            <span class="text">Button</span>
                            <span class="number"><span class="label label-info">U</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="component-carousel.html">
                            <span class="text">Carousel</span>
                        </a>
                    </li>
					<li >
                        <a href="component-grid.html">
                            <span class="text">Grid</span>
                        </a>
                    </li>
					<li >
                        <a href="component-icon.html">
                            <span class="text">Icon</span>
                        </a>
                    </li>
					<li >
                        <a href="component-loading.html">
                            <span class="text">Loading indicator</span>
                        </a>
                    </li>
					<li >
                        <a href="component-notification.html">
                            <span class="text">Notification</span>
                        </a>
                    </li>
                    <li >
                        <a href="component-panel.html">
                            <span class="text">Panel</span>
                        </a>
                    </li>
                    <li >
                        <a href="component-pricing.html">
                            <span class="text">Pricing table / box</span>
                        </a>
                    </li>
					<li >
                        <a href="component-slider.html">
                            <span class="text">Slider</span>
                        </a>
                    </li>
					<li >
                        <a href="component-sortable.html">
                            <span class="text">Sortable</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="component-tabsaccordion.html">
                            <span class="text">Tabs &amp; accordion</span>
                        </a>
                    </li>
                    <li >
                        <a href="component-typography.html">
                            <span class="text">Typography</span>
                        </a>
                    </li>
                    <li >
                        <a href="component-others.html">
                            <span class="text">Miscelleneous</span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
            <li >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                    <span class="figure"><i class="ico-file"></i></span>
                    <span class="text">Forms</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="form" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Forms</li>
                    <li >
                        <a href="form-element.html">
                            <span class="text">Element</span>
                            <span class="number"><span class="label label-info">U</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="form-layout.html">
                            <span class="text">Layout</span>
                        </a>
                    </li>
                    <li >
                        <a href="form-validation.html">
                            <span class="text">Validation</span>
                        </a>
                    </li>
                    <li >
                        <a href="form-wizard.html">
                            <span class="text">Wizard</span>
                        </a>
                    </li>
                    <li >
                        <a href="form-wysiwyg.html">
                            <span class="text">WYSIWYG Editor</span>
                        </a>
                    </li>
                    <li >
                        <a href="form-xeditable.html">
                            <span class="text">X-editable</span>
                        </a>
                    </li>
                    <li >
                        <a href="form-fileupload.html">
                            <span class="text">File Upload</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="form-imagecrop.html">
                            <span class="text">Image Crop</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
            <li >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                    <span class="figure"><i class="ico-table22"></i></span>
                    <span class="text">Tables</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="table" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Tables</li>
                    <li >
                        <a href="table-default.html">
                            <span class="text">Basic Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="table-datatable.html">
                            <span class="text">Data Tables</span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
            <li >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                    <span class="figure"><i class="ico-copy4"></i></span>
                    <span class="text">Miscelleneous</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="page" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Miscelleneous</li>
                    <li >
                        <a href="page-starter.html">
                            <span class="text">Blank </span>
                        </a>
                    </li>
					<li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#blog" data-parent="#page">
                            <span class="text">Blog page</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="blog" class="submenu collapse ">
                            <li >
                                <a href="page-blog-default.html"><span class="text">Blog default</span></a>
                            </li>
                            <li >
                                <a href="page-blog-grid.html"><span class="text">Blog grid</span></a>
                            </li>
                            <li >
                                <a href="page-blog-single.html"><span class="text">Single post</span></a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
					<li >
                        <a href="page-calendar.html">
                            <span class="text">Calendar</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#email" data-parent="#page">
                            <span class="text">Email</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="email" class="submenu collapse ">
                            <li >
                                <a href="page-email-inbox.html"><span class="text">Inbox</span></a>
                            </li>
                            <li >
                                <a href="page-email-view.html"><span class="text">View</span></a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#error" data-parent="#page">
                            <span class="text">Error</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="error" class="submenu collapse ">
                            <li >
                                <a href="page-error-404.html"><span class="text">Not Found (404)</span></a>
                            </li>
                            <li >
                                <a href="page-error-403.html"><span class="text">Forbidden (403)</span></a>
                            </li>
                            <li >
                                <a href="page-error-500.html"><span class="text">Server Error (500)</span></a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
					<li >
                        <a href="page-faq.html">
                            <span class="text">FAQ</span>
                        </a>
                    </li>
					<li >
                        <a href="page-invoice.html">
                            <span class="text">Invoice</span>
                        </a>
                    </li>
					<li >
                        <a href="page-profile.html">
                            <span class="text">Profile</span>
                        </a>
                    </li>
                    <li >
                        <a href="page-login.html">
                            <span class="text">Login</span>
                        </a>
                    </li>
                    <li >
                        <a href="page-login-returned.html">
                            <span class="text">Lock Screen</span>
                        </a>
                    </li>
                    <li >
                        <a href="page-register.html">
                            <span class="text">Register</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#media" data-parent="#page">
                            <span class="text">Media</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="media" class="submenu collapse ">
                            <li >
                                <a href="page-media-album.html"><span class="text">Media album</span></a>
                            </li>
                            <li >
                                <a href="page-media-gallery.html"><span class="text">Media gallery</span></a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#message" data-parent="#page">
                            <span class="text">Message</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="message" class="submenu collapse ">
                            <li >
                                <a href="page-message-bubble.html"><span class="text">Bubble message</span></a>
                            </li>
                            <li >
                                <a href="page-message-rich.html"><span class="text">Rich message</span></a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="page-timeline-v2.html">
                            <span class="text">Timeline</span>
                        </a>
                    </li>

                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
            <li >
                <a href="chart-flot.html">
                    <span class="figure"><i class="ico-stats-up"></i></span>
                    <span class="text">Charts</span>
					<span class="number"><span class="label label-success">11</span></span>
                </a>
            </li>
            <li >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#maps" data-parent=".topmenu">
                    <span class="figure">
                        <i class="ico-map3"></i>
                    </span>
                    <span class="text">Maps</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="maps" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Maps</li>
                    <li >
                        <a href="maps-vector.html">
                            <span class="text">Vector</span>
                            <span class="number"><span class="label label-info">U</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="maps-google.html">
                            <span class="text">Google</span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
			<li >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu1" data-parent=".topmenu">
                    <span class="figure">
                        <i class="ico-sitemap"></i>
                    </span>
                    <span class="text">Menu Levels</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="submenu1" class="submenu collapse ">
                    <li class="submenu-header ellipsis">Menu Levels</li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu2" data-parent="#submenu">
                            <span class="text">Menu Level 1.1</span>
							<span class="arrow"></span>
                        </a>
						<ul id="submenu2" class="submenu collapse ">
							<li class="submenu-header ellipsis">Menu Levels 1.1</li>
							<li >
								<a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu3" data-parent="#submenu2">
									<span class="text">Menu Level 2.1</span>
									<span class="arrow"></span>
								</a>
								<ul id="submenu3" class="submenu collapse ">
									<li class="submenu-header ellipsis">Menu Levels 2.1</li>
									<li >
										<a href="#">
											<span class="text">Menu Level 3.1</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
            @endif
		</ul>
        <!--/ END Template Navigation/Menu -->
		<!-- START Sidebar summary -->

            @if( 0 )
                @include('layouts.partials.sidebar_left_summary')
            @endif
        <!--/ END Sidebar summary -->
    </section>
    <!--/ END Sidebar Container -->
</aside>