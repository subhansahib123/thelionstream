  <!-- SIDEBAR -->
  @if (auth()->user()->admin_user)
  <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
    <!-- User Details -->
    <div class="side-user d-none">
        <div class="col-sm-12 text-center p-0 clearfix">
            <div class="d-inline-block pos-relative mr-b-10">
                <figure class="thumb-sm mr-b-0 user--online">
                    <img src="{{asset('admin-assets/img/users/avatar.jpg')}}" class="rounded-circle" alt="">
                </figure><a href="profile.php" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
            </div>
            <!-- /.d-inline-block -->
            <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">test</a>
            </div>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="current-page"><a href="index.php"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Dashboard</span></a></li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon fa fa-group"></i> <span class="hide-menu">Manage Users</span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="{{route('admin.add_user')}}">Add New</a>
                    </li>
                    <li class=""><a href="{{route('admin.active_users')}}">Active Users</a>
                    </li>
                    <li class=""><a href="in_active_users.php">Inactive Users</a>
                    </li>
                    <li class=""><a href="users.php">Manage Users</a>
                    </li>
                </ul>
            </li>
            <li class=""><a href="withdraw.php"><i class="list-icon fa fa-money"></i> <span class="hide-menu">Withdrawals</span></a></li>

            <li class=""><a href="reports.php"><i class="list-icon feather feather-bar-chart-2"></i> <span class="hide-menu">Reports</span></a></li>
            <li class=""><a href="lead.php"><i class="list-icon fa fa-exchange"></i> <span class="hide-menu">Lead</span></a></li>
            <li class=""><a href="feed_backs.php"><i class="list-icon fa fa-send"></i> <span class="hide-menu">Feed Backs</span></a></li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-mail"></i> <span class="hide-menu">Messages </span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="msg_new.php">Compose</a>
                    </li>
                    <li class=""><a href="msg_inbox.php">Inbox</a>
                    </li>
                </ul>
            </li>
             <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon fa fa-send-o"></i> <span class="hide-menu">Broadcast</span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="broadcast.php">New Broadcast</a>
                    <li class=""><a href="broadcasted.php">Broadcasted</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children   "><a href="javascript:void(0);"><i class="list-icon fa fa-send-o"></i> <span class="hide-menu">Rotating</span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="add_rotating.php">Add Links</a>

                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon fa fa-send"></i> <span class="hide-menu">Auto Responders</span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="autoresponders.php">Auto Responder</a>
                    <li class=""><a href="autoresponders_list.php">Auto Responder List</a>
                    </li>
                </ul>
            </li>
            <li class=""><a href="banner_adds.php"><i class="list-icon fa fa-link"></i> <span class="hide-menu">User Banner Adds</span></a></li>
            <li class="menu-item-has-children "><a href="javascript:void(0);"><i class="list-icon fa fa-download"></i> <span class="hide-menu">Downloads</span></a>
                <ul class="list-unstyled sub-menu">
                    <li class=""><a href="download_new.php">Add New Download</a>
                    <li class=""><a href="download_list.php">Downloads List</a>
                    </li>
                </ul>
            </li>
            <li class=""><a href="preferences.php"><i class="list-icon feather feather-edit"></i> <span class="hide-menu">Preferences</span></a></li>

            <li class=""><a href="settings.php">
                <i class="list-icon feather feather-settings"></i> <span class="hide-menu">Settings</span></a></li>
        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
@else
<aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
    <!-- User Details -->
    <div class="side-user d-none">
        <div class="col-sm-12 text-center p-0 clearfix">
            <div class="d-inline-block pos-relative mr-b-10">
                <figure class="thumb-sm mr-b-0 user--online">
                    <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                </figure><a href="page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
            </div>
            <!-- /.d-inline-block -->
            <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
                <br><small class="hide-menu">Developer</small>
            </div>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.side-user -->
    <!-- Call to Action -->
    <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-success ripple fw-600" href="#"><i class="fa fa-plus-square-o mr-1 mr-0-rtl ml-1-rtl"></i> New Project</a>
    </div>
    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="current-page menu-item-has-children"><a href="index.html"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Dashboard</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/index.html">Default</a>
                    </li>
                    <li><a href="../collapsed-light/index.html">Collapsed Light</a>
                    </li>
                    <li><a href="../dark/index.html">Dark</a>
                    </li>
                    <li><a href="../horizontal-nav-icons/index.html">Horizontal Nav</a>
                    </li>
                    <li><a href="../rtl/index.html">RTL Demo</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children active"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Apps <span class="badge bg-primary">6</span></span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/app-calender.html">Calender</a>
                    </li>
                    <li><a href="../default/app-chat.html">Chat</a>
                    </li>
                    <li><a href="../default/app-inbox.html">Inbox</a>
                    </li>
                    <li><a href="../default/app-contacts.html">Contacts</a>
                    </li>
                    <li><a href="../default/app-products.html">Products</a>
                    </li>
                    <li><a href="../default/app-blog.html">Blog</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-user"></i> <span class="hide-menu">Profile Pages</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/page-profile.html">Profile</a>
                    </li>
                    <li><a href="../default/page-login.html">Login Page</a>
                    </li>
                    <li><a href="../default/page-login2.html">Login Page 2</a>
                    </li>
                    <li><a href="../default/page-register.html">Sign Up</a>
                    </li>
                    <li><a href="../default/page-register2.html">Sign Up 2</a>
                    </li>
                    <li><a href="../default/page-register-3-step.html">3 Step Sign Up</a>
                    </li>
                    <li><a href="../default/page-forgot-pwd.html">Forgot Password</a>
                    </li>
                    <li><a href="../default/page-email-confirm.html">Confirm Email</a>
                    </li>
                    <li><a href="../default/page-lock-screen.html">Lock Screen</a>
                    </li>
                    <li><a href="../default/page-timeline.html">Timeline</a>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);">Error Pages</a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/page-error-403.html">Error 403</a>
                            </li>
                            <li><a href="../default/page-error-404.html">Error 404</a>
                            </li>
                            <li><a href="../default/page-error-500.html">Error 500</a>
                            </li>
                            <li><a href="../default/page-error-503.html">Error 503</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-folder"></i> <span class="hide-menu">Sample Pages</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="page-blank.html">Blank Page</a>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);">Email Templates</a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/email-templates/basic.html">Basic</a>
                            </li>
                            <li><a href="../default/email-templates/billing.html">Billing</a>
                            </li>
                            <li><a href="../default/email-templates/friend-request.html">Friend Request</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);">Maps</a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="../default/maps-google.html">Google Maps</a>
                            </li>
                            <li><a href="../default/maps-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../default/page-lightbox.html">Lightbox Popup</a>
                    </li>
                    <li><a href="../default/page-sitemap.html">Sitemap</a>
                    </li>
                    <li><a href="../default/page-search-results.html">Search Results</a>
                    </li>
                    <li><a href="../default/page-custom-scroll.html">Custom Scroll</a>
                    </li>
                    <li><a href="../default/page-utility-classes.html">Utility Classes</a>
                    </li>
                    <li><a href="../default/page-animations.html">Animations</a>
                    </li>
                    <li><a href="../default/page-faq.html">FAQ</a>
                    </li>
                    <li><a href="../default/page-pricing-table.html">Pricing</a>
                    </li>
                    <li><a href="../default/page-invoice.html">Invoice</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-feather"></i> <span class="hide-menu">UI Elements <span class="badge bg-info">7</span></span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/ui-typography.html">Typography</a>
                    </li>
                    <li><a href="../default/ui-buttons.html">Buttons</a>
                    </li>
                    <li><a href="../default/ui-cards.html">Cards</a>
                    </li>
                    <li><a href="../default/ui-tabs.html">Tabs</a>
                    </li>
                    <li><a href="../default/ui-accordions.html">Accordions</a>
                    </li>
                    <li><a href="../default/ui-modals.html">Modals</a>
                    </li>
                    <li><a href="../default/ui-icon-boxes.html">Icon Boxes</a>
                    </li>
                    <li><a href="../default/ui-lists.html">Lists &amp; Media Object</a>
                    </li>
                    <li><a href="../default/ui-grid.html">Grid</a>
                    </li>
                    <li><a href="../default/ui-progress.html">Progress Bars</a>
                    </li>
                    <li><a href="../default/ui-notifications.html">Notifications &amp; Alerts</a>
                    </li>
                    <li><a href="../default/ui-pagination.html">Pagination</a>
                    </li>
                    <li><a href="../default/ui-media.html">Media</a>
                    </li>
                    <li><a href="../default/ui-carousel.html">Carousel</a>
                    </li>
                    <li><a href="../default/ui-bootstrap.html">Bootstrap Elements</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-layout"></i> <span class="hide-menu">Forms</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/form-elements.html">Elements</a>
                    </li>
                    <li><a href="../default/form-material.html">Material Design</a>
                    </li>
                    <li><a href="../default/form-validation.html">Form Validation</a>
                    </li>
                    <li><a href="../default/form-dropzone.html">File Upload</a>
                    </li>
                    <li><a href="../default/form-pickers.html">Picker</a>
                    </li>
                    <li><a href="../default/form-select.html">Select and Multiselect</a>
                    </li>
                    <li><a href="../default/form-tags-categories.html">Tags and Categories</a>
                    </li>
                    <li><a href="../default/form-addons.html">Addons</a>
                    </li>
                    <li><a href="../default/form-editors.html">Editors</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-clipboard"></i> <span class="hide-menu">Tables</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/tables-basic.html">Basic Tables</a>
                    </li>
                    <li><a href="../default/tables-data-table.html">Data Table</a>
                    </li>
                    <li><a href="../default/tables-bootstrap.html">Bootstrap Tables</a>
                    </li>
                    <li><a href="../default/tables-responsive.html">Responsive Tables</a>
                    </li>
                    <li><a href="../default/tables-editable.html">Editable Tables</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-pie-chart"></i> <span class="hide-menu">Charts</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/charts-flot.html">Flot Charts</a>
                    </li>
                    <li><a href="../default/charts-morris.html">Morris Charts</a>
                    </li>
                    <li><a href="../default/charts-js.html">Chart-js</a>
                    </li>
                    <li><a href="../default/charts-sparkline.html">Sparkline Charts</a>
                    </li>
                    <li><a href="../default/charts-knob.html">Knob Charts</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-heart"></i> <span class="hide-menu">Icons</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="../default/icons-material-design.html">Material Design</a>
                    </li>
                    <li><a href="../default/icons-font-awesome.html">Font Awesome</a>
                    </li>
                    <li><a href="../default/icons-mono-social.html">Social Icons</a>
                    </li>
                    <li><a href="../default/icons-weather.html">Weather Icons</a>
                    </li>
                    <li><a href="../default/icons-linea.html">Linea Icons</a>
                    </li>
                    <li><a href="../default/icons-feather.html">Feather Icons</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
  @endif

