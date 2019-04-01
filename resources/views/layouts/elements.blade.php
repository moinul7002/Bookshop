<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Online Bookshop</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="{{ asset('public/css/images/favicon.ico') }}"  />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
	<script type="text/javascript" src="{{ asset('js/jquery-1.6.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.jcarousel.min.js') }}"></script>

	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
</head>
