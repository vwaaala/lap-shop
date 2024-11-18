<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('index') }}">Dashboard 1</a></li>
                    <li><a href="{{ url('index-2') }}">Dashboard 2</a></li>
                    <li><a href="{{ url('index-3') }}">Dashboard 3</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="{{ url('event-management') }}" aria-expanded="false">
                    <i class="la la-calendar"></i>
                    <span class="nav-text">Event Management</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Professors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-professors') }}">All Professor</a></li>
                    <li><a href="{{ url('add-professor') }}">Add Professor</a></li>
                    <li><a href="{{ url('edit-professor') }}">Edit Professor</a></li>
                    <li><a href="{{ url('professor-profile') }}">Professor Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-students') }}">All Students</a></li>
                    <li><a href="{{ url('add-student') }}">Add Students</a></li>
                    <li><a href="{{ url('edit-student') }}">Edit Students</a></li>
                    <li><a href="{{ url('about-student') }}">About Students</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-courses') }}">All Courses</a></li>
                    <li><a href="{{ url('add-courses') }}">Add Courses</a></li>
                    <li><a href="{{ url('edit-courses') }}">Edit Courses</a></li>
                    <li><a href="{{ url('about-courses') }}">About Courses</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-book"></i>
                    <span class="nav-text">Library</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-library') }}">All Library</a></li>
                    <li><a href="{{ url('add-library') }}">Add Library</a></li>
                    <li><a href="{{ url('edit-library') }}">Edit Library</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-building"></i>
                    <span class="nav-text">Departments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-departments') }}">All Departments</a></li>
                    <li><a href="{{ url('add-departments') }}">Add Departments</a></li>
                    <li><a href="{{ url('edit-departments') }}">Edit Departments</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Staff</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-staff') }}">All Staff</a></li>
                    <li><a href="{{ url('add-staff') }}">Add Staff</a></li>
                    <li><a href="{{ url('edit-staff') }}">Edit Staff</a></li>
                    <li><a href="{{ url('staff-profile') }}">Staff Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-gift"></i>
                    <span class="nav-text">Holiday</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('all-holiday') }}">All Holiday</a></li>
                    <li><a href="{{ url('add-holiday') }}">Add Holiday</a></li>
                    <li><a href="{{ url('edit-holiday') }}">Edit Holiday</a></li>
                    <li><a href="{{ url('holiday-calendar') }}">Holiday Calendar</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-dollar"></i>
                    <span class="nav-text">Fees</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('fees-collection') }}">Fees Collection</a></li>
                    <li><a href="{{ url('add-fees') }}">Add Fees</a></li>
                    <li><a href="{{ url('fees-receipt') }}">Fees Receipt</a></li>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('app-profile') }}">Profile</a></li>
                    <li><a href="{{ url('post-details') }}">Post Details</a></li>
                    <li><a href="{{ url('edit-profile') }}">Edit Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('email-compose') }}">Compose</a></li>
							<li><a href="{{ url('email-inbox') }}">Inbox</a></li>
							<li><a href="{{ url('email-read') }}">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('app-calender') }}">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('ecom-product-grid') }}">Product Grid</a></li>
							<li><a href="{{ url('ecom-product-list') }}">Product List</a></li>
							<li><a href="{{ url('ecom-product-detail') }}">Product Details</a></li>
							<li><a href="{{ url('ecom-product-order') }}">Order</a></li>
							<li><a href="{{ url('ecom-checkout') }}">Checkout</a></li>
							<li><a href="{{ url('ecom-invoice') }}">Invoice</a></li>
							<li><a href="{{ url('ecom-customers') }}">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-database-1"></i>
                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('content') }}">Content</a></li>
                    <li><a href="{{ url('menu') }}">Menus</a></li>
                    <li><a href="{{ url('email-template') }}">Email Template</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('content-add') }}">Add Content</a></li>
                    <li><a href="{{ url('add-email') }}">Add Email</a></li>
                    <li><a href="{{ url('add-blog') }}">Add Blog</a></li>
                    <li><a href="{{ url('blog-category') }}">Blog Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="la la-signal"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('chart-flot') }}">Flot</a></li>
					<li><a href="{{ url('chart-morris') }}">Morris</a></li>
					<li><a href="{{ url('chart-chartjs') }}">Chartjs</a></li>
					<li><a href="{{ url('chart-chartist') }}">Chartist</a></li>
					<li><a href="{{ url('chart-sparkline') }}">Sparkline</a></li>
					<li><a href="{{ url('chart-peity') }}">Peity</a></li>
                </ul>
            </li>
            <li class="nav-label">Components</li>
            <li class="ui-menu"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="la la-globe"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('ui-accordion') }}">Accordion</a></li>
                    <li><a href="{{ url('ui-alert') }}">Alert</a></li>
					<li><a href="{{ url('ui-badge') }}">Badge</a></li>
					<li><a href="{{ url('ui-button') }}">Button</a></li>
					<li><a href="{{ url('ui-modal') }}">Modal</a></li>
					<li><a href="{{ url('ui-button-group') }}">Button Group</a></li>
					<li><a href="{{ url('ui-list-group') }}">List Group</a></li>
                    <li><a href="{{ url('ui-media-object') }}">Media Object</a></li>
                    <li><a href="{{ url('ui-card') }}">Cards</a></li>
					<li><a href="{{ url('ui-carousel') }}">Carousel</a></li>
					<li><a href="{{ url('ui-dropdown') }}">Dropdown</a></li>
					<li><a href="{{ url('ui-popover') }}">Popover</a></li>
					<li><a href="{{ url('ui-progressbar') }}">Progressbar</a></li>
					<li><a href="{{ url('ui-tab') }}">Tab</a></li>
					<li><a href="{{ url('ui-typography') }}">Typography</a></li>
					<li><a href="{{ url('ui-pagination') }}">Pagination</a></li>
					<li><a href="{{ url('ui-grid') }}">Grid</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-plus-square-o"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('uc-select2') }}">Select 2</a></li>
					<li><a href="{{ url('uc-nestable') }}">Nestedable</a></li>
					<li><a href="{{ url('uc-noui-slider') }}">Noui Slider</a></li>
					<li><a href="{{ url('uc-sweetalert') }}">Sweet Alert</a></li>
					<li><a href="{{ url('uc-toastr') }}">Toastr</a></li>
					<li><a href="{{ url('map-jqvmap') }}">Jqv Map</a></li>
					<li><a href="{{ url('uc-lightgallery') }}">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{ url('widget-basic') }}" aria-expanded="false">
                    <i class="la la-desktop"></i>
                    <span class="nav-text">Widget</span>
                </a></li>
            <li class="nav-label">Forms</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-file-text"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('form-element') }}">Form Elements</a></li>
					<li><a href="{{ url('form-wizard') }}">Wizard</a></li>
					<li><a href="{{ url('form-ckeditor') }}">CkEditor</a></li>
					<li><a href="{{ url('form-pickers') }}">Pickers</a></li>
					<li><a href="{{ url('form-validation') }}">Form Validate</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('table-bootstrap-basic') }}">Bootstrap</a></li>
                    <li><a href="{{ url('table-datatable-basic') }}">Datatable</a></li>
                </ul>
            </li>
            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-th-list"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('page-login') }}">Login</a></li>
					<li><a href="{{ url('page-register') }}">Register</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('page-error-400') }}">Error 400</a></li>
							<li><a href="{{ url('page-error-403') }}">Error 403</a></li>
							<li><a href="{{ url('page-error-404') }}">Error 404</a></li>
							<li><a href="{{ url('page-error-500') }}">Error 500</a></li>
							<li><a href="{{ url('page-error-503') }}">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('page-lock-screen')}}">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p>Edumin Laravel Saas Admin © 2024 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div>
