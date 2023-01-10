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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['login'] = 'Auth/login';
$route['sign-up'] = 'Auth/sign_up';
$route['forgot-password'] = 'Auth/forgot_password';
$route['reset-password'] = 'Auth/reset_password';

$route['faq'] = 'LandingPage/faq';

/** User Route */
$route['home'] = 'User/Home';

$route['profile/(:any)'] = 'User/Profile';

$route['setting'] = 'User/Setting';

/** End User Route */

$route['tournament'] = 'Tournament';
$route['tournament/view/(:any)'] = 'Tournament/detail';
$route['tournament/bracket/(:any)'] = 'Tournament/bracket';

$route['exchange'] = 'Exchange';
$route['exchange/view/(:any)'] = 'Exchange/detail';
$route['exchange/transaction/(:any)'] = 'Exchange/transaction';
$route['exchange/transaction-response'] = 'Exchange/transaction_callback';

$route['wallet'] = 'Wallet';

$route['withdraw'] = 'Withdraw';
$route['withdraw/transaction/(:any)'] = 'Withdraw/transaction';
$route['withdraw/transaction-response'] = 'Withdraw/transaction_callback';

$route['topup'] = 'Topup';
$route['topup/transaction/(:any)'] = 'Topup/transaction';
$route['topup/payment/(:any)'] = 'Topup/payment';
$route['topup/transaction-response'] = 'Topup/transaction_callback';

$route['history'] = 'History';

$route['default_controller'] = 'LandingPage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
