<!DOCTYPE html>
<html lang="en">
<head>
<title>Dicka's Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="all">  
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">   <!-- font-awesome icons -->
<link href="{{ asset('assets/css/swipebox.css') }}" rel="stylesheet" > 
<link href="{{ asset('assets/images/laravel-1.png') }}" type="image/x-icon" rel="icon" >
<!-- //Custom Theme files -->   
<!-- js -->
<script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script> 
<!-- //js -->
<script src="{{ asset('assets/js/scrollreveal.js') }}"></script>
<script>
      window.sr = ScrollReveal();
</script>
<!-- web-fonts -->    
<!-- //web-fonts -->  
</head>
<body>
	
	@include('layouts.banner')
	@include('layouts.profile')
	@include('layouts.pendidikan')
	@include('layouts.skill')
	@include('layouts.courses')
	@include('layouts.team')
	@include('layouts.portfolio')
	@include('layouts.contact')
	@include('layouts.footer')

	@include('script.js')
	
</body>
</html>