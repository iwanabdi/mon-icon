<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	
<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 06:43:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '<?= base_url('assets/')?>../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/pages/login/classic/login-31894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/plugins/global/plugins.bundle1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/style.bundle1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/themes/layout/header/base/light1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/themes/layout/header/menu/light1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/themes/layout/brand/dark1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/')?>theme/html/demo1/dist/assets/css/themes/layout/aside/dark1894.css?v=7.1.9" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(<?= base_url('assets/')?>theme/html/demo1/dist/assets/media/bg/bg-1.jpg);">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<img src="<?= base_url('assets/')?>theme/html/demo1/dist/assets/media/logos/logo-letter-9.png" class="max-h-100px" alt="" />
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<form class="form" action="<?= site_url('Auth/process_login')?>" method="POST">
							<?php echo $this->session->flashdata('pesan');?>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="email" placeholder="Email" name="username" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" required/>
								</div>
								<div class="form-group">
									<label>Login Sebagai </label>
									<select class="form-control h-auto text-white placeholder-white opacity-100 bg-primary rounded-pill border-0 py-4 px-8 mb-5" name="type" required >
									<option value="1">Pegawai</option>
									<option value="2">Mitra</option>
									</select>
								</div>
								<div class="form-group text-center mt-10">
									<button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign in form-->	
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?= base_url('assets/')?>theme/html/demo1/dist/assets/plugins/global/plugins.bundle1894.js?v=7.1.9"></script>
		<script src="<?= base_url('assets/')?>theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1894.js?v=7.1.9"></script>
		<script src="<?= base_url('assets/')?>theme/html/demo1/dist/assets/js/scripts.bundle1894.js?v=7.1.9"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?= base_url('assets/')?>theme/html/demo1/dist/assets/js/pages/custom/login/login-general1894.js?v=7.1.9"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 06:43:14 GMT -->
</html>
