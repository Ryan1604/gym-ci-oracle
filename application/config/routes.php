<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Auth';

$route['auth'] = 'Auth';

// ------------------------------------------------------------------------
// SuperAdmin
// ------------------------------------------------------------------------
$route['superadmin/dashboard']                            = 'SuperAdmin/DashboardController';

$route['superadmin/admin']                                = 'SuperAdmin/AdminController';
$route['superadmin/admin/create']                        = 'SuperAdmin/AdminController/create';
$route['superadmin/admin/store']                        = 'SuperAdmin/AdminController/store';
$route['superadmin/admin/edit/(:any)']                    = 'SuperAdmin/AdminController/edit/$1';
$route['superadmin/admin/update']                        = 'SuperAdmin/AdminController/update';
$route['superadmin/admin/delete/(:any)']                = 'SuperAdmin/AdminController/delete/$1';

$route['superadmin/client']                              = 'SuperAdmin/ClientController';
$route['superadmin/service']                            = 'SuperAdmin/ServiceController';
$route['superadmin/service/support']                    = 'SuperAdmin/SupportController';
$route['superadmin/service/package']                    = 'SuperAdmin/PackageController';
$route['superadmin/service/alkes']                        = 'SuperAdmin/AlkesController';

$route['superadmin/laporan/pengeluaran']                   = 'SuperAdmin/ReportController/pengeluaran';
$route['superadmin/report/ambulance']                   = 'SuperAdmin/ReportController/ambulance';
$route['superadmin/report/alkes']                       = 'SuperAdmin/ReportController/alkes';
$route['superadmin/report/service']                       = 'SuperAdmin/ReportController/service';
$route['superadmin/report/filter']                       = 'SuperAdmin/ReportController/filter';
$route['superadmin/report/filter1']                       = 'SuperAdmin/ReportController/filter1';
$route['superadmin/report/filter2']                       = 'SuperAdmin/ReportController/filter2';
$route['superadmin/report/filter3']                       = 'SuperAdmin/ReportController/filter3';
$route['superadmin/report/print_pengeluaran']              = 'SuperAdmin/ReportController/print_pengeluaran';
$route['superadmin/report/print_ambulance']              = 'SuperAdmin/ReportController/print_ambulance';
$route['superadmin/report/print_alkes']                   = 'SuperAdmin/ReportController/print_alkes';
$route['superadmin/report/print_layanan']                  = 'SuperAdmin/ReportController/print_layanan';

$route['superadmin/employees']                           = 'SuperAdmin/EmployeesController';
$route['superadmin/employees/filter_profesi']           = 'SuperAdmin/EmployeesController/filter_profesi';

$route['superadmin/calendar']                           = 'SuperAdmin/CalendarController';
$route['superadmin/calendar/load_calendar']             = 'SuperAdmin/CalendarController/load_calendar';

// ------------------------------------------------------------------------
// Admin
// ------------------------------------------------------------------------
$route['admin/dashboard']                                = 'Admin/DashboardController';
$route['admin/dashboard/service']                       = 'Admin/DashboardController/service';
$route['admin/dashboard/service_']                      = 'Admin/DashboardController/service_';
$route['admin/dashboard/ambulance']                     = 'Admin/DashboardController/ambulance';

$route['admin/client']                                  = 'Admin/ClientController';
$route['admin/client/create']                            = 'Admin/ClientController/create';
$route['admin/client/store']                             = 'Admin/ClientController/store';
$route['admin/client/edit/(:any)']                        = 'Admin/ClientController/edit/$1';
$route['admin/client/update']                            = 'Admin/ClientController/update';
$route['admin/client/delete/(:any)']                    = 'Admin/ClientController/delete/$1';

$route['admin/service']                                    = 'Admin/ServiceController';
$route['admin/service/create']                            = 'Admin/ServiceController/create';
$route['admin/service/store']                            = 'Admin/ServiceController/store';
$route['admin/service/edit/(:any)']                        = 'Admin/ServiceController/edit/$1';
$route['admin/service/update']                            = 'Admin/ServiceController/update';
$route['admin/service/delete/(:any)']                    = 'Admin/ServiceController/delete/$1';

$route['admin/service/support']                            = 'Admin/SupportController';
$route['admin/service/support/create']                    = 'Admin/SupportController/create';
$route['admin/service/support/store']                    = 'Admin/SupportController/store';
$route['admin/service/support/edit/(:any)']                = 'Admin/SupportController/edit/$1';
$route['admin/service/support/update']                    = 'Admin/SupportController/update';
$route['admin/service/support/delete/(:any)']            = 'Admin/SupportController/delete/$1';

$route['admin/service/package']                            = 'Admin/PackageController';
$route['admin/service/package/create']                    = 'Admin/PackageController/create';
$route['admin/service/package/store']                    = 'Admin/PackageController/store';
$route['admin/service/package/edit/(:any)']                = 'Admin/PackageController/edit/$1';
$route['admin/service/package/update']                    = 'Admin/PackageController/update';
$route['admin/service/package/delete/(:any)']            = 'Admin/PackageController/delete/$1';

$route['admin/service/alkes']                            = 'Admin/AlkesController';
$route['admin/service/alkes/create']                    = 'Admin/AlkesController/create';
$route['admin/service/alkes/store']                        = 'Admin/AlkesController/store';
$route['admin/service/alkes/edit/(:any)']                = 'Admin/AlkesController/edit/$1';
$route['admin/service/alkes/update']                    = 'Admin/AlkesController/update';
$route['admin/service/alkes/delete/(:any)']                = 'Admin/AlkesController/delete/$1';

$route['admin/ambulance']                                = 'Admin/AmbulanceController';
$route['admin/ambulance/create']                        = 'Admin/AmbulanceController/create';
$route['admin/ambulance/store']                            = 'Admin/AmbulanceController/store';
$route['admin/ambulance/edit/(:any)']                    = 'Admin/AmbulanceController/edit/$1';
$route['admin/ambulance/update']                        = 'Admin/AmbulanceController/update';
$route['admin/ambulance/delete/(:any)']                    = 'Admin/AmbulanceController/delete/$1';

$route['admin/ambulance/sewa']                            = 'Admin/SewaAmbulanceController';
$route['admin/ambulance/sewa/store']                    = 'Admin/SewaAmbulanceController/store';
$route['admin/ambulance/sewa/update/(:any)']            = 'Admin/SewaAmbulanceController/update/$1';
$route['admin/ambulance/sewa/delete/(:any)']            = 'Admin/SewaAmbulanceController/delete/$1';
$route['admin/ambulance/sewa/history']                    = 'Admin/SewaAmbulanceController/history';

$route['admin/invoice']                                 = 'Admin/InvoiceController';
$route['admin/invoice/store']                            = 'Admin/InvoiceController/store';
$route['admin/invoice/request']                         = 'Admin/InvoiceController/request';
$route['admin/invoice/add_cart']                         = 'Admin/InvoiceController/add_cart';
$route['admin/invoice/load']                            = 'Admin/InvoiceController/load';
$route['admin/invoice/remove']                            = 'Admin/InvoiceController/remove';
$route['admin/invoice/clear']                            = 'Admin/InvoiceController/clear';
$route['admin/invoice/detail/(:any)']                    = 'Admin/InvoiceController/detail/$1';
$route['admin/invoice/failed']                            = 'Admin/InvoiceController/failed';
$route['admin/invoice/confirm/(:any)']                    = 'Admin/InvoiceController/confirm/$1';
$route['admin/invoice/cancel/(:any)']                    = 'Admin/InvoiceController/cancel/$1';
$route['admin/invoice/success']                            = 'Admin/InvoiceController/success';
$route['admin/invoice/download/(:any)']                    = 'Admin/InvoiceController/download/$1';
$route['admin/invoice/preview/(:any)']                    = 'Admin/InvoiceController/preview/$1';

$route['admin/pengeluaran']                              = 'Admin/PengeluaranController';
$route['admin/pengeluaran/create']                        = 'Admin/PengeluaranController/create';
$route['admin/pengeluaran/store']                         = 'Admin/PengeluaranController/store';
$route['admin/pengeluaran/edit/(:any)']                    = 'Admin/PengeluaranController/edit/$1';
$route['admin/pengeluaran/update']                        = 'Admin/PengeluaranController/update';
$route['admin/pengeluaran/delete/(:any)']                = 'Admin/PengeluaranController/delete/$1';

$route['admin/laporan/pengeluaran']                       = 'Admin/ReportController/pengeluaran';
$route['admin/report/ambulance']                           = 'Admin/ReportController/ambulance';
$route['admin/report/service']                           = 'Admin/ReportController/service';
$route['admin/report/filter']                           = 'Admin/ReportController/filter';
$route['admin/report/filter1']                           = 'Admin/ReportController/filter1';
$route['admin/report/filter2']                           = 'Admin/ReportController/filter2';
$route['admin/report/filter3']                           = 'Admin/ReportController/filter3';
$route['admin/report/filterambulan']                     = 'Admin/ReportController/filterambulan';
$route['admin/report/filterservis']                        = 'Admin/ReportController/filterservis';
$route['admin/report/filterservisgagal']                        = 'Admin/ReportController/filterservisgagal';
$route['admin/report/filterservispending']                        = 'Admin/ReportController/filterservispending';
$route['admin/report/filterservissukses']                        = 'Admin/ReportController/filterservissukses';
$route['admin/report/filterkeuangan']                        = 'Admin/ReportController/filterkeuangan';
$route['admin/report/filterhistoryambulance']                        = 'Admin/ReportController/filterhistoryambulance';
$route['admin/report/print_pengeluaran']                  = 'Admin/ReportController/print_pengeluaran';
$route['admin/report/print_ambulance']                  = 'Admin/ReportController/print_ambulance';
$route['admin/report/print_alkes']                       = 'Admin/ReportController/print_alkes';
$route['admin/report/print_layanan']                      = 'Admin/ReportController/print_layanan';

$route['admin/calendar']                                   = 'Admin/CalendarController';
$route['admin/calendar/load_calendar']                  = 'Admin/CalendarController/load_calendar';

// ------------------------------------------------------------------------
// Koordinator
// ------------------------------------------------------------------------
$route['koordinator/dashboard']                            = 'Koordinator/DashboardController';

$route['koordinator/employees']                            = 'Koordinator/EmployeesController';
$route['koordinator/employees/create']                  = 'Koordinator/EmployeesController/create';
$route['koordinator/employees/store']                    = 'Koordinator/EmployeesController/store';
$route['koordinator/employees/edit/(:any)']                = 'Koordinator/EmployeesController/edit/$1';
$route['koordinator/employees/update']                    = 'Koordinator/EmployeesController/update';
$route['koordinator/employees/delete/(:any)']            = 'Koordinator/EmployeesController/delete/$1';
$route['koordinator/employees/filter_profesi']          = 'Koordinator/EmployeesController/filter_profesi';

$route['koordinator/calendar']                            = 'Koordinator/CalendarController';
$route['koordinator/calendar/load']                        = 'Koordinator/CalendarController/load';



$route['profile/edit']                                    = 'ProfileController/edit';
$route['profile/update']                                = 'ProfileController/update';
$route['profile/changepassword']                        = 'ProfileController/changepassword';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
