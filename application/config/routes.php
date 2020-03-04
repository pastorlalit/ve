<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'Best_Bank_Coaching_in_Bhopal';
$route['best-bank-coaching-in-bhopal'] = 'Best_Bank_Coaching_in_Bhopal';
$route['about-us'] = 'aboutus';
$route['courses-offered'] = 'CoursesOffered/Bank_Entrance_Exams';
$route['courses/bank-entrance-exams'] = 'CoursesOffered/Bank_Entrance_Exams';
$route['courses/ssc-entrance-exams'] = 'CoursesOffered/SSC_Entrance_Exams';
$route['courses/railways-entrance-exams'] = 'CoursesOffered/Railways_Entrance_Exams';
$route['courses/insurance-entrance-exams'] = 'CoursesOffered/Insurance_Entrance_Exams';
$route['courses/english-for-all-competitive-exams'] = 'CoursesOffered/English_for_Competitive_Exams';
$route['courses/descriptive-english-for-competitive-exams'] = 'CoursesOffered/Descriptive_English_for_Competitive_Exams';
$route['courses/personal-interviews-and-group-discussion'] = 'CoursesOffered/gdpi';
$route['courses/spoken-english-classes-for-all'] = 'CoursesOffered/spoken_english';
$route['entrance-exams/online-testseries'] = 'Testseries';
$route['entrance-exams/download-previous-years-papers'] = 'Previouspapers';
$route['resources'] = 'Resources/index';
$route['resources/current-affairs'] = 'Resources/Current_affairs';
$route['resources/vocabulary'] = 'Resources/Vocabulary';

$route['resources/practice-questions'] = 'Resources/Practice_questions';

$route['resources/posts'] = 'Resources/Posts';
$route['resources/post/(:any)'] = 'Resources/Post_details/$1';
$route['contact-us'] = 'Contactus';
$route['login'] = 'User/login';
$route['admin-panel'] = 'AdminPanel';
$route['add-blogs'] = 'Blog/addBlog';
$route['view-blogs'] = 'Blog/viewBlog';
$route['blog-details'] = 'Blog/blogDetails';
$route['enquiries'] = 'Enquiries/index';
$route['add-enquiries'] = 'Enquiries/addEnquiries';
$route['delete-enquiries'] = 'Enquiries/deleteEnquiry';


$route['posts'] = 'posts/index';
$route['add-post'] = 'posts/add';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
