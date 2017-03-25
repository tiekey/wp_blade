<!doctype html>
<html {{language_attributes()}} class="no-js">
	@include('../_includes/head')
	<body {{body_class()}} >
		<div class="wrapper">
			@include('../_includes/header')
			<div class="inner">
        @yield('content')
			</div><!-- inner -->
			@include('../_includes/footer')
		</div><!-- wrapper -->
		{{wp_footer()}}
	</body>
</html>
