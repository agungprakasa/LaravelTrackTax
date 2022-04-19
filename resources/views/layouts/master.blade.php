<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Admin Aplikasi</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/ace.min.css')}}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('admin/assets/css/jquery.gritter.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/ace-rtl.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-datepicker3.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-timepicker.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/daterangepicker.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-colorpicker.min.css')}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="{{asset('admin/assets/js/ace-extra.min.js')}}"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">


		@extends('layouts._sidebar')

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('admin/assets/js/jquery-2.1.4.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('admin/assets/js/jquery.mobile.custom.min.js')}}>"+"<"+"/script>");
		</script>
		<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->
		<script src="{{asset('admin/assets/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/buttons.flash.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/dataTables.select.min.js')}}"></script>

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		
		<script src="{{asset('admin/assets/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.sparkline.index.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.flot.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.flot.pie.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/jquery.flot.resize.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{asset('admin/assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/ace.min.js')}}"></script>
		<!-- <script>
		    var table = $('#dynamic-table').DataTable({
		        // "aoColumns": [
		        //               { "bSortable": false },
		        //               null, null,null, null,
		        //               { "bSortable": false },
		        //             ],
		        'ordering'    : false,
		        'lengthChange': false,
		        "aaSorting": [],
		        //"sScrollY": "300px",
		        "bPaginate": true,
		        //"sScrollX": "140%",
		        "iDisplayLength": 10,
		    });
		  </script> -->

		 <script type="text/javascript">
			jQuery(function($) {

			$('#modal-wizard-container').ace_wizard();
			$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
			})
		</script>
		<script src="{{asset('admin/assets/js/bootstrap-datepicker.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/bootstrap-timepicker.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/moment.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/daterangepicker.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/bootstrap-colorpicker.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/holder.min.js')}}"></script>
			<script src="{{asset('admin/assets/js/jquery.gritter.min.js')}}"></script>	
			<script src="{{asset('admin/assets/js/jquery.nestable.min.js')}}"></script>

		
	</body>
</html>
