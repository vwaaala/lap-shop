<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduminAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(EduminAdminController::class)->group(function () {
    Route::get('/', 'dashboard');
    Route::get('/index', 'dashboard')->name('dashboard');
    Route::get('/index-2','dashboard_2')->name('dashboard_2');
    Route::get('/index-3','dashboard_3')->name('index_3');
	Route::get('/about-courses', 'about_courses')->name('about_courses');
    Route::get('/about-student', 'about_student')->name('about_student');
	Route::get('/add-courses', 'add_courses')->name('add_courses');
	Route::get('/add-departments', 'add_departments')->name('add_departments');
	Route::get('/add-fees', 'add_fees')->name('add_fees');
	Route::get('/add-holiday', 'add_holiday')->name('add_holiday');
    Route::get('/add-library', 'add_library')->name('add_library');
    Route::get('/add-professor', 'add_professor')->name('add_professor');
    Route::get('/add-staff', 'add_staff')->name('add_staff');
    Route::get('/add-student', 'add_student')->name('add_student');
    Route::get('/all-courses', 'all_courses')->name('all_courses');
    Route::get('/all-departments', 'all_departments')->name('all_departments');
    Route::get('/all-holiday', 'all_holiday')->name('all_holiday');
    Route::get('/all-library', 'all_library')->name('all_library');
    Route::get('/all-professors', 'all_professors')->name('all_professors');
    Route::get('/all-staff', 'all_staff')->name('all_staff');
    Route::get('/all-students', 'all_students')->name('all_students');
    Route::get('/edit-courses', 'edit_courses')->name('edit_courses');
    Route::get('/edit-departments', 'edit_departments')->name('edit_departments');
    Route::get('/edit-holiday', 'edit_holiday')->name('edit_holiday');
    Route::get('/edit-library', 'edit_library')->name('edit_library');
    Route::get('/edit-professor', 'edit_professor')->name('edit_professor');
    Route::get('/edit-staff', 'edit_staff')->name('edit_staff');
    Route::get('/edit-student', 'edit_student')->name('edit_student');
    Route::get('/event-management', 'event_management')->name('event_management');
    Route::get('/fees-collection', 'fees_collection')->name('fees_collection');
    Route::get('/fees-receipt', 'fees_receipt')->name('fees_receipt');
    Route::get('/holiday-calendar', 'holiday_calendar')->name('holiday_calendar');
    Route::get('/professor-profile', 'professor_profile')->name('professor_profile');
    Route::get('/staff-profile', 'staff_profile')->name('staff_profile');
    Route::get('/content', 'content')->name('content');
    Route::get('/content-add', 'content_add')->name('content_add');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/email-template', 'email_template')->name('email_template');
    Route::get('/add-email', 'add_email')->name('add_email');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/add-blog', 'add_blog')->name('add_blog');
    Route::get('/blog-category', 'blog_category')->name('blog_category');
    Route::get('/celandar', 'celandar')->name('celandar');
    Route::get('/chat', 'chat')->name('chat');
    Route::get('/app-calender', 'app_calender')->name('app_calender');
    Route::get('/app-profile', 'app_profile')->name('app_profile');
    Route::get('/activity', 'activity')->name('chaactivityt');
    Route::get('/chart-chartist', 'chart_chartist')->name('chart_chartist');
    Route::get('/chart-chartjs', 'chart_chartjs')->name('chart_chartjs');
    Route::get('/chart-flot', 'chart_flot')->name('chart_flot');
    Route::get('/chart-morris', 'chart_morris')->name('chart_morris');
    Route::get('/chart-peity', 'chart_peity')->name('chart_peity');
    Route::get('/chart-sparkline', 'chart_sparkline')->name('chart_sparkline');
    Route::get('/ecom-checkout', 'ecom_checkout')->name('ecom_checkout');
    Route::get('/ecom-customers', 'ecom_customers')->name('ecom_customers');
    Route::get('/ecom-invoice', 'ecom_invoice')->name('ecom_invoice');
    Route::get('/ecom-product-detail', 'ecom_product_detail')->name('ecom_product_detail');
    Route::get('/ecom-product-grid', 'ecom_product_grid')->name('ecom_product_grid');
    Route::get('/ecom-product-list', 'ecom_product_list')->name('ecom_product_list');
    Route::get('/ecom-product-order', 'ecom_product_order')->name('ecom_product_order');
    Route::get('/edit-profile', 'edit_profile')->name('edit_profile');
    Route::match(['get','post'],'/email-compose','email_compose')->name('email_compose');
    Route::get('/email-inbox', 'email_inbox')->name('email_inbox');
    Route::get('/email-read', 'email_read')->name('email_read');
    Route::get('/empty-page', 'empty_page')->name('empty_page');
    Route::get('/form-ckeditor', 'form_ckeditor')->name('form_ckeditor');
    Route::get('/form-element', 'form_element')->name('form_element');
    Route::get('/form-pickers', 'form_pickers')->name('form_pickers');
    Route::get('/form-validation', 'form_validation')->name('form_validation');
    Route::get('/form-wizard', 'form_wizard')->name('form_wizard');
    Route::get('/map-jqvmap', 'map_jqvmap')->name('map_jqvmap');
    Route::get('/page-error-400', 'page_error_400')->name('page_error_400');
    Route::get('/page-error-403', 'page_error_403')->name('page_error_403');
    Route::get('/page-error-404', 'page_error_404')->name('page_error_404');
    Route::get('/page-error-500', 'page_error_500')->name('page_error_500');
    Route::get('/page-error-503', 'page_error_503')->name('page_error_503');
    Route::get('/page-forgot-password', 'page_forgot_password')->name('page_forgot_password');
    Route::get('/page-lock-screen', 'page_lock_screen')->name('page_lock_screen');
    Route::get('/page-login', 'page_login')->name('page_login');
    Route::get('/page-register', 'page_register')->name('page_register');
    Route::match(['get','post'],'/post-details','post_details')->name('post_details');
    Route::get('/table-bootstrap-basic', 'table_bootstrap_basic')->name('table_bootstrap_basic');
    Route::get('/table-datatable-basic', 'table_datatable_basic')->name('table_datatable_basic');
    Route::get('/uc-lightgallery', 'uc_lightgallery')->name('uc_lightgallery');
    Route::get('/uc-nestable', 'uc_nestable')->name('uc_nestable');
    Route::get('/uc-noui-slider', 'uc_noui_slider')->name('uc_noui_slider');
    Route::get('/uc-select2', 'uc_select2')->name('uc_select2');
    Route::get('/uc-sweetalert', 'uc_sweetalert')->name('uc_sweetalert');
    Route::get('/uc-toastr', 'uc_toastr')->name('uc_toastr');
    Route::get('/ui-accordion', 'ui_accordion')->name('ui_accordion');
    Route::get('/ui-alert', 'ui_alert')->name('ui_alert');
    Route::get('/ui-badge', 'ui_badge')->name('ui_badge');
    Route::get('/ui-button', 'ui_button')->name('ui_button');
    Route::get('/ui-button-group', 'ui_button_group')->name('ui_button_group');
    Route::get('/ui-card', 'ui_card')->name('ui_card');
    Route::get('/ui-carousel', 'ui_carousel')->name('ui_carousel');
    Route::get('/ui-dropdown', 'ui_dropdown')->name('ui_dropdown');
    Route::get('/ui-grid', 'ui_grid')->name('ui_grid');
    Route::get('/ui-list-group', 'ui_list_group')->name('ui_list_group');
    Route::get('/ui-media-object', 'ui_media_object')->name('ui_media_object');
    Route::get('/ui-modal', 'ui_modal')->name('ui_modal');
    Route::get('/ui-pagination', 'ui_pagination')->name('ui_pagination');
    Route::get('/ui-popover', 'ui_popover')->name('ui_popover');
    Route::get('/ui-progressbar', 'ui_progressbar')->name('ui_progressbar');
    Route::get('/ui-tab', 'ui_tab')->name('ui_tab');
    Route::get('/ui-typography', 'ui_typography')->name('ui_typography');
    Route::get('/widget-basic', 'widget_basic')->name('widget_basic');


    Route::post('/ajax/featuredcompanies', 'ajax_featuredcompanies')->name('ajax_featuredcompanies');
    Route::post('/ajax/recentactivity', 'ajax_recentactivity')->name('ajax_recentactivity');
    
});
