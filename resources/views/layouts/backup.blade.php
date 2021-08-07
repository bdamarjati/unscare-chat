<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
	<link rel="icon" href="{{asset('CostumStyle/images/favicon-32x32.png')}}" type="image/png" />
    <!-- Page Title -->
    <title>UNS CARE</title>
    <!--plugins-->
	<link href="{{asset('CostumStyle/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('CostumStyle/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('CostumStyle/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
	<link href="{{asset('CostumStyle/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('CostumStyle/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
	<link href="{{asset('CostumStyle/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('CostumStyle/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('CostumStyle/css/icons.css')}}" rel="stylesheet">
    <!-- Additional Css -->
	<link rel="stylesheet" href="{{asset('CostumStyle/style.css')}}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap JS -->
	<script src="{{asset('CostumStyle/js/bootstrap.bundle.min.js')}}"></script>

    <!--plugins-->
	<script src="{{asset('CostumStyle/js/jquery.min.js')}}"></script>
	<script src="{{asset('CostumStyle/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('CostumStyle/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('CostumStyle/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	
	<!--app JS-->
	<script src="{{asset('CostumStyle/js/app.js')}}"></script>
    
</body>
</html>
