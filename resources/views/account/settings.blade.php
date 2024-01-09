<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.2.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../" />
	<title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Metronic by Keenthemes" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header">
				<!--begin::Header primary-->
				<div class="app-header-primary">
					<!--begin::Header primary container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_primary_container">
						<!--begin::Header primary wrapper-->
						<div class="d-flex flex-stack flex-grow-1">
							<div class="d-flex">
								<!--begin::Logo-->
								<div class="app-header-logo d-flex flex-center gap-2 me-lg-15">
									<!--begin::Sidebar toggle-->
									<button class="btn btn-icon btn-sm btn-custom d-flex d-lg-none ms-n2" id="kt_app_header_menu_toggle">
										<i class="ki-outline ki-abstract-14 fs-2"></i>
									</button>
									<!--end::Sidebar toggle-->
									<!--begin::Logo image-->
									<a href="index.html">
										<img alt="Logo" src="media/logos/demo60.svg" class="mh-25px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
									<!--begin::Menu holder-->
									<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-gray-900 menu-icon-gray-500 menu-arrow-gray-500 menu-state-icon-primary menu-state-bullet-primary fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0" id="#kt_app_header_menu" data-kt-menu="true">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-title">Dashboards</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
													<!--begin:Dashboards menu-->
													<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="index.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-element-11 text-primary fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Default</span>
																					<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/ecommerce.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-basket text-danger fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																					<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/projects.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-abstract-44 text-info fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Projects</span>
																					<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/online-courses.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-color-swatch text-success fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																					<span class="fs-7 fw-semibold text-muted">Student progress</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/marketing.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-chart-simple text-gray-900 fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																					<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/bidding.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-switch text-warning fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																					<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/pos.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-abstract-42 text-danger fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">POS System</span>
																					<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-6 mb-3">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="dashboards/call-center.html" class="menu-link">
																				<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																					<i class="ki-outline ki-call text-primary fs-1"></i>
																				</span>
																				<span class="d-flex flex-column">
																					<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																					<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																				</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
																<div class="separator separator-dashed mx-5 my-5"></div>
																<!--begin:Landing-->
																<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
																	<div class="d-flex flex-column me-5">
																		<div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
																		<div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing & others</div>
																	</div>
																	<a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
																</div>
																<!--end:Landing-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
																<!--begin:Heading-->
																<h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
																<!--end:Heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/logistics.html" class="menu-link py-2">
																		<span class="menu-title">Logistics</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/website-analytics.html" class="menu-link py-2">
																		<span class="menu-title">Website Analytics</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/finance-performance.html" class="menu-link py-2">
																		<span class="menu-title">Finance Performance</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/store-analytics.html" class="menu-link py-2">
																		<span class="menu-title">Store Analytics</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/social.html" class="menu-link py-2">
																		<span class="menu-title">Social</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/delivery.html" class="menu-link py-2">
																		<span class="menu-title">Delivery</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/crypto.html" class="menu-link py-2">
																		<span class="menu-title">Crypto</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/school.html" class="menu-link py-2">
																		<span class="menu-title">School</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="dashboards/podcast.html" class="menu-link py-2">
																		<span class="menu-title">Podcast</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Dashboards menu-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-title">Pages</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
													<!--begin:Pages menu-->
													<div class="menu-active-bg px-4 px-lg-0">
														<!--begin:Tabs nav-->
														<div class="d-flex w-100 overflow-auto">
															<ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
																<!--begin:Nav item-->
																<li class="nav-item mx-lg-1">
																	<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
																</li>
																<!--end:Nav item-->
																<!--begin:Nav item-->
																<li class="nav-item mx-lg-1">
																	<a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
																</li>
																<!--end:Nav item-->
																<!--begin:Nav item-->
																<li class="nav-item mx-lg-1">
																	<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
																</li>
																<!--end:Nav item-->
																<!--begin:Nav item-->
																<li class="nav-item mx-lg-1">
																	<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
																</li>
																<!--end:Nav item-->
																<!--begin:Nav item-->
																<li class="nav-item mx-lg-1">
																	<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
																</li>
																<!--end:Nav item-->
															</ul>
														</div>
														<!--end:Tabs nav-->
														<!--begin:Tab content-->
														<div class="tab-content py-4 py-lg-8 px-lg-7">
															<!--begin:Tab pane-->
															<div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_pages">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-8">
																		<!--begin:Row-->
																		<div class="row">
																			<!--begin:Col-->
																			<div class="col-lg-3 mb-6 mb-lg-0">
																				<!--begin:Menu heading-->
																				<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
																				<!--end:Menu heading-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/overview.html" class="menu-link">
																						<span class="menu-title">Overview</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/projects.html" class="menu-link">
																						<span class="menu-title">Projects</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/campaigns.html" class="menu-link">
																						<span class="menu-title">Campaigns</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/documents.html" class="menu-link">
																						<span class="menu-title">Documents</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/followers.html" class="menu-link">
																						<span class="menu-title">Followers</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="pages/user-profile/activity.html" class="menu-link">
																						<span class="menu-title">Activity</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-3 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-6">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/about.html" class="menu-link">
																							<span class="menu-title">About</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/team.html" class="menu-link">
																							<span class="menu-title">Our Team</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/contact.html" class="menu-link">
																							<span class="menu-title">Contact Us</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/licenses.html" class="menu-link">
																							<span class="menu-title">Licenses</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/sitemap.html" class="menu-link">
																							<span class="menu-title">Sitemap</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/careers/list.html" class="menu-link">
																							<span class="menu-title">Careers List</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/careers/apply.html" class="menu-link">
																							<span class="menu-title">Careers Apply</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-3 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-6">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/faq/classic.html" class="menu-link">
																							<span class="menu-title">FAQ Classic</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/faq/extended.html" class="menu-link">
																							<span class="menu-title">FAQ Extended</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																				<!--begin:Menu section-->
																				<div class="mb-6">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/blog/home.html" class="menu-link">
																							<span class="menu-title">Blog Home</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/blog/post.html" class="menu-link">
																							<span class="menu-title">Blog Post</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/pricing.html" class="menu-link">
																							<span class="menu-title">Column Pricing</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/pricing/table.html" class="menu-link">
																							<span class="menu-title">Table Pricing</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-3 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/social/feeds.html" class="menu-link">
																							<span class="menu-title">Feeds</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/social/activity.html" class="menu-link">
																							<span class="menu-title">Activty</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/social/followers.html" class="menu-link">
																							<span class="menu-title">Followers</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="pages/social/settings.html" class="menu-link">
																							<span class="menu-title">Settings</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																		</div>
																		<!--end:Row-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-4">
																		<img src="media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Tab pane-->
															<!--begin:Tab pane-->
															<div class="tab-pane active w-lg-600px" id="kt_app_header_menu_pages_account">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-5 mb-6 mb-lg-0">
																		<!--begin:Row-->
																		<div class="row">
																			<!--begin:Col-->
																			<div class="col-lg-6">
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/overview.html" class="menu-link">
																						<span class="menu-title">Overview</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/settings.html" class="menu-link active">
																						<span class="menu-title">Settings</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/security.html" class="menu-link">
																						<span class="menu-title">Security</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/activity.html" class="menu-link">
																						<span class="menu-title">Activity</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/billing.html" class="menu-link">
																						<span class="menu-title">Billing</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-6">
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/statements.html" class="menu-link">
																						<span class="menu-title">Statements</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/referrals.html" class="menu-link">
																						<span class="menu-title">Referrals</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/api-keys.html" class="menu-link">
																						<span class="menu-title">API Keys</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																				<!--begin:Menu item-->
																				<div class="menu-item p-0 m-0">
																					<!--begin:Menu link-->
																					<a href="account/logs.html" class="menu-link">
																						<span class="menu-title">Logs</span>
																					</a>
																					<!--end:Menu link-->
																				</div>
																				<!--end:Menu item-->
																			</div>
																			<!--end:Col-->
																		</div>
																		<!--end:Row-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-7">
																		<img src="media/stock/900x600/46.jpg" class="rounded mw-100" alt="" />
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Tab pane-->
															<!--begin:Tab pane-->
															<div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu section-->
																		<div class="mb-6">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/corporate/sign-in.html" class="menu-link">
																					<span class="menu-title">Sign-In</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/corporate/sign-up.html" class="menu-link">
																					<span class="menu-title">Sign-Up</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/corporate/two-factor.html" class="menu-link">
																					<span class="menu-title">Two-Factor</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/corporate/reset-password.html" class="menu-link">
																					<span class="menu-title">Reset Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/corporate/new-password.html" class="menu-link">
																					<span class="menu-title">New Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																		<!--begin:Menu section-->
																		<div class="mb-0">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/overlay/sign-in.html" class="menu-link">
																					<span class="menu-title">Sign-In</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/overlay/sign-up.html" class="menu-link">
																					<span class="menu-title">Sign-Up</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/overlay/two-factor.html" class="menu-link">
																					<span class="menu-title">Two-Factor</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/overlay/reset-password.html" class="menu-link">
																					<span class="menu-title">Reset Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/overlay/new-password.html" class="menu-link">
																					<span class="menu-title">New Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu section-->
																		<div class="mb-6">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/creative/sign-in.html" class="menu-link">
																					<span class="menu-title">Sign-in</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/creative/sign-up.html" class="menu-link">
																					<span class="menu-title">Sign-up</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/creative/two-factor.html" class="menu-link">
																					<span class="menu-title">Two-Factor</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/creative/reset-password.html" class="menu-link">
																					<span class="menu-title">Reset Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/creative/new-password.html" class="menu-link">
																					<span class="menu-title">New Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																		<!--begin:Menu section-->
																		<div class="mb-6">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/fancy/sign-in.html" class="menu-link">
																					<span class="menu-title">Sign-In</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/fancy/sign-up.html" class="menu-link">
																					<span class="menu-title">Sign-Up</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/fancy/two-factor.html" class="menu-link">
																					<span class="menu-title">Two-Factor</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/fancy/reset-password.html" class="menu-link">
																					<span class="menu-title">Reset Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/layouts/fancy/new-password.html" class="menu-link">
																					<span class="menu-title">New Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu section-->
																		<div class="mb-0">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/extended/multi-steps-sign-up.html" class="menu-link">
																					<span class="menu-title">Multi-Steps Sign-Up</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/welcome.html" class="menu-link">
																					<span class="menu-title">Welcome Message</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/verify-email.html" class="menu-link">
																					<span class="menu-title">Verify Email</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/coming-soon.html" class="menu-link">
																					<span class="menu-title">Coming Soon</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/password-confirmation.html" class="menu-link">
																					<span class="menu-title">Password Confirmation</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/account-deactivated.html" class="menu-link">
																					<span class="menu-title">Account Deactivation</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/error-404.html" class="menu-link">
																					<span class="menu-title">Error 404</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/general/error-500.html" class="menu-link">
																					<span class="menu-title">Error 500</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-3 mb-6 mb-lg-0">
																		<!--begin:Menu section-->
																		<div class="mb-0">
																			<!--begin:Menu heading-->
																			<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
																			<!--end:Menu heading-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/welcome-message.html" class="menu-link">
																					<span class="menu-title">Welcome Message</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/reset-password.html" class="menu-link">
																					<span class="menu-title">Reset Password</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/subscription-confirmed.html" class="menu-link">
																					<span class="menu-title">Subscription Confirmed</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/card-declined.html" class="menu-link">
																					<span class="menu-title">Credit Card Declined</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/promo-1.html" class="menu-link">
																					<span class="menu-title">Promo 1</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/promo-2.html" class="menu-link">
																					<span class="menu-title">Promo 2</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																			<!--begin:Menu item-->
																			<div class="menu-item p-0 m-0">
																				<!--begin:Menu link-->
																				<a href="authentication/email/promo-3.html" class="menu-link">
																					<span class="menu-title">Promo 3</span>
																				</a>
																				<!--end:Menu link-->
																			</div>
																			<!--end:Menu item-->
																		</div>
																		<!--end:Menu section-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Tab pane-->
															<!--begin:Tab pane-->
															<div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-7">
																		<!--begin:Row-->
																		<div class="row">
																			<!--begin:Col-->
																			<div class="col-lg-4 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/general/invite-friends.html" class="menu-link">
																							<span class="menu-title">Invite Friends</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/general/view-users.html" class="menu-link">
																							<span class="menu-title">View Users</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/general/select-users.html" class="menu-link">
																							<span class="menu-title">Select Users</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/general/upgrade-plan.html" class="menu-link">
																							<span class="menu-title">Upgrade Plan</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/general/share-earn.html" class="menu-link">
																							<span class="menu-title">Share & Earn</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/forms/new-target.html" class="menu-link">
																							<span class="menu-title">New Target</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/forms/new-card.html" class="menu-link">
																							<span class="menu-title">New Card</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/forms/new-address.html" class="menu-link">
																							<span class="menu-title">New Address</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/forms/create-api-key.html" class="menu-link">
																							<span class="menu-title">Create API Key</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/forms/bidding.html" class="menu-link">
																							<span class="menu-title">Bidding</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-4 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-6">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/create-app.html" class="menu-link">
																							<span class="menu-title">Create App</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/create-campaign.html" class="menu-link">
																							<span class="menu-title">Create Campaign</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/create-account.html" class="menu-link">
																							<span class="menu-title">Create Business Acc</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/create-project.html" class="menu-link">
																							<span class="menu-title">Create Project</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
																							<span class="menu-title">Top Up Wallet</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/offer-a-deal.html" class="menu-link">
																							<span class="menu-title">Offer a Deal</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/two-factor-authentication.html" class="menu-link">
																							<span class="menu-title">Two Factor Auth</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/search/horizontal.html" class="menu-link">
																							<span class="menu-title">Horizontal</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/search/vertical.html" class="menu-link">
																							<span class="menu-title">Vertical</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/search/users.html" class="menu-link">
																							<span class="menu-title">Users</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/search/select-location.html" class="menu-link">
																							<span class="menu-title">Select Location</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																			<!--begin:Col-->
																			<div class="col-lg-4 mb-6 mb-lg-0">
																				<!--begin:Menu section-->
																				<div class="mb-0">
																					<!--begin:Menu heading-->
																					<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
																					<!--end:Menu heading-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/horizontal.html" class="menu-link">
																							<span class="menu-title">Horizontal</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/vertical.html" class="menu-link">
																							<span class="menu-title">Vertical</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/two-factor-authentication.html" class="menu-link">
																							<span class="menu-title">Two Factor Auth</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/create-app.html" class="menu-link">
																							<span class="menu-title">Create App</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/create-campaign.html" class="menu-link">
																							<span class="menu-title">Create Campaign</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/create-account.html" class="menu-link">
																							<span class="menu-title">Create Account</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/create-project.html" class="menu-link">
																							<span class="menu-title">Create Project</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
																							<span class="menu-title">Top Up Wallet</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																					<!--begin:Menu item-->
																					<div class="menu-item p-0 m-0">
																						<!--begin:Menu link-->
																						<a href="utilities/wizards/offer-a-deal.html" class="menu-link">
																							<span class="menu-title">Offer a Deal</span>
																						</a>
																						<!--end:Menu link-->
																					</div>
																					<!--end:Menu item-->
																				</div>
																				<!--end:Menu section-->
																			</div>
																			<!--end:Col-->
																		</div>
																		<!--end:Row-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-5 pe-lg-5">
																		<img src="media/stock/600x600/img-84.jpg" class="rounded mw-100" alt="" />
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Tab pane-->
															<!--begin:Tab pane-->
															<div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="col-lg-4 mb-6 mb-lg-0">
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/lists.html" class="menu-link">
																				<span class="menu-title">Lists</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/statistics.html" class="menu-link">
																				<span class="menu-title">Statistics</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/charts.html" class="menu-link">
																				<span class="menu-title">Charts</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/mixed.html" class="menu-link">
																				<span class="menu-title">Mixed</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/tables.html" class="menu-link">
																				<span class="menu-title">Tables</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="widgets/feeds.html" class="menu-link">
																				<span class="menu-title">Feeds</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																	<!--begin:Col-->
																	<div class="col-lg-8">
																		<img src="media/stock/900x600/44.jpg" class="rounded mw-100" alt="" />
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Tab pane-->
														</div>
														<!--end:Tab content-->
													</div>
													<!--end:Pages menu-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-title">Apps</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-rocket fs-2"></i>
															</span>
															<span class="menu-title">Projects</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">My Projects</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Project</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/targets.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Targets</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/budget.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Budget</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/files.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Files</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/activity.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Activity</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/projects/settings.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Settings</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-handcart fs-2"></i>
															</span>
															<span class="menu-title">eCommerce</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Catalog</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/products.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Products</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/categories.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Categories</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Add Product</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Edit Product</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Add Category</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Edit Category</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Sales</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-accordion">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/sales/listing.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Orders Listing</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/sales/details.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Order Details</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/sales/add-order.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Add Order</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Edit Order</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customers</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-accordion">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/customers/listing.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Customers Listing</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/customers/details.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Customers Details</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Reports</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-accordion">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/reports/view.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Products Viewed</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/reports/sales.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Sales</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/reports/returns.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Returns</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Customer Orders</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/ecommerce/reports/shipping.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Shipping</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/ecommerce/settings.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Settings</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-chart fs-2"></i>
															</span>
															<span class="menu-title">Support Center</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/overview.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Overview</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tickets</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/support-center/tickets/list.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Ticket List</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/support-center/tickets/view.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Ticket View</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Tutorials</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/support-center/tutorials/list.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Tutorials List</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/support-center/tutorials/post.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Tutorials Post</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/faq.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">FAQ</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/licenses.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Licenses</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/support-center/contact.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Contact Us</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-shield-tick fs-2"></i>
															</span>
															<span class="menu-title">User Management</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/user-management/users/list.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Users List</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/user-management/users/view.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">View User</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Roles</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/user-management/roles/list.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Roles List</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/user-management/roles/view.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">View Roles</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/user-management/permissions.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Permissions</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-phone fs-2"></i>
															</span>
															<span class="menu-title">Contacts</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/contacts/getting-started.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Getting Started</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/contacts/add-contact.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Contact</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/contacts/edit-contact.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Edit Contact</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/contacts/view-contact.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Contact</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-basket fs-2"></i>
															</span>
															<span class="menu-title">Subscriptions</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/subscriptions/getting-started.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Getting Started</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/subscriptions/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Subscription List</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/subscriptions/add.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Add Subscription</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/subscriptions/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Subscription</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-briefcase fs-2"></i>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/customers/getting-started.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Getting Started</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/customers/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Listing</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/customers/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Customer Details</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-credit-cart fs-2"></i>
															</span>
															<span class="menu-title">Invoice Management</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
																<!--begin:Menu link-->
																<span class="menu-link">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Profile</span>
																	<span class="menu-arrow"></span>
																</span>
																<!--end:Menu link-->
																<!--begin:Menu sub-->
																<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/invoices/view/invoice-1.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Invoice 1</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/invoices/view/invoice-2.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Invoice 2</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item">
																		<!--begin:Menu link-->
																		<a class="menu-link" href="apps/invoices/view/invoice-3.html">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Invoice 3</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Menu sub-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/invoices/create.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Invoice</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-file-added fs-2"></i>
															</span>
															<span class="menu-title">File Manager</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/file-manager/folders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Folders</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/file-manager/files.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Files</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/file-manager/blank.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Blank Directory</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/file-manager/settings.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Settings</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-sms fs-2"></i>
															</span>
															<span class="menu-title">Inbox</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/inbox/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Messages</span>
																	<span class="menu-badge">
																		<span class="badge badge-light-success">3</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/inbox/compose.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Compose</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/inbox/reply.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View & Reply</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-icon">
																<i class="ki-outline ki-message-text-2 fs-2"></i>
															</span>
															<span class="menu-title">Chat</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/chat/private.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Private Chat</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/chat/group.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Group Chat</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="apps/chat/drawer.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Drawer Chat</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="apps/calendar.html">
															<span class="menu-icon">
																<i class="ki-outline ki-calendar-8 fs-2"></i>
															</span>
															<span class="menu-title">Calendar</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-title">Help</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
															<span class="menu-icon">
																<i class="ki-outline ki-rocket fs-2"></i>
															</span>
															<span class="menu-title">Components</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
															<span class="menu-icon">
																<i class="ki-outline ki-abstract-26 fs-2"></i>
															</span>
															<span class="menu-title">Documentation</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo60/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
															<span class="menu-icon">
																<i class="ki-outline ki-switch fs-2"></i>
															</span>
															<span class="menu-title">Layout Builder</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
															<span class="menu-icon">
																<i class="ki-outline ki-code fs-2"></i>
															</span>
															<span class="menu-title">Changelog v8.2.1</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu holder-->
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0 gap-2">
								<!--begin::Quick links-->
								<div class="app-navbar-item me-lg-3">
									<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" class="btn btn-sm btn-flex flex-center border border-300 bg-light-light btn-active-color-gray-900 px-0 px-lg-3 min-w-35px h-35px">
										<i class="ki-outline ki-share pe-0 pe-lg-2 fs-3"></i>
										<span class="d-none d-lg-inline">Share</span>
									</a>
								</div>
								<!--end::Quick links-->
								<!--begin::My apps-->
								<div class="app-navbar-item ms-1">
									<!--begin::Menu- wrapper-->
									<div class="btn btn-sm btn-icon btn-custom h-35px w-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-notification-status fs-3"></i>
									</div>
									<!--begin::My apps-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
										<!--begin::Card-->
										<div class="card">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">My Apps</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
														<i class="ki-outline ki-setting-3 fs-2"></i>
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
																<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-outline ki-information fs-6"></i>
																</span></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body py-5">
												<!--begin::Scroll-->
												<div class="mh-450px scroll-y me-n5 pe-5">
													<!--begin::Row-->
													<div class="row g-2">
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">AWS</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">AngularJS</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Atica</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Music</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Codeigniter</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Bootstrap</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">GTM</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Disqus</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Dribble</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Play Store</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Podcasts</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Figma</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Github</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Gitlab</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Instagram</span>
															</a>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-4">
															<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																<img src="media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt="" />
																<span class="fw-semibold">Pinterest</span>
															</a>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::My apps-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::My apps-->
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1">
									<!--begin::Menu- wrapper-->
									<div class="btn btn-sm btn-icon btn-custom h-35px w-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-3"></i>
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
												<span class="fs-8 opacity-75 ps-3">24 reports</span>
											</h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
												</li>
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
																<div class="text-gray-500 fs-7">Phase 1 development</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 hr</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-outline ki-information fs-2 text-danger"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
																<div class="text-gray-500 fs-7">Confidential staff documents</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-outline ki-briefcase fs-2 text-warning"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
																<div class="text-gray-500 fs-7">Corporeate staff profiles</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-success">
																	<i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
																<div class="text-gray-500 fs-7">New frontend admin theme</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-outline ki-colors-square fs-2 text-primary"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
																<div class="text-gray-500 fs-7">Product launch status update</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-info">
																	<i class="ki-outline ki-picture fs-2 text-info"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
																<div class="text-gray-500 fs-7">Collection of banner images</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">21 Jan</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
																<div class="text-gray-500 fs-7">Collection of SVG icons</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">20 March</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<i class="ki-outline ki-arrow-right fs-5"></i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column px-9">
													<!--begin::Section-->
													<div class="pt-10 pb-0">
														<!--begin::Title-->
														<h3 class="text-gray-900 text-center fw-bold">Get Pro Access</h3>
														<!--end::Title-->
														<!--begin::Text-->
														<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
														<!--end::Text-->
														<!--begin::Action-->
														<div class="text-center mt-5 mb-9">
															<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Section-->
													<!--begin::Illustration-->
													<div class="text-center px-4">
														<img class="mw-100 mh-200px" alt="image" src="media/illustrations/sketchy-1/1.png" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Tab panel-->
											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Just now</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">5 hrs</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">2 days</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 week</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-success me-4">200 OK</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Mar 5</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">May 15</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Apr 3</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jun 30</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Jul 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Sep 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Code-->
															<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
															<!--end::Code-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">Dec 10</span>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<i class="ki-outline ki-arrow-right fs-5"></i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::Notifications-->
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol position-relative symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="media/avatars/300-2.jpg" alt="user" />
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle mb-1 bottom-0 start-100 animation-blink"></span>
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="media/avatars/300-2.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">Ana Fox
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
													</div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">ana@nio.com</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="apps/projects/list.html" class="menu-link px-5">
												<span class="menu-text">My Projects</span>
												<span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title">My Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/billing.html" class="menu-link px-5">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/statements.html" class="menu-link px-5">Payments</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
														<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
															<i class="ki-outline ki-information-5 fs-5"></i>
														</span></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<span class="form-check-label text-muted fs-7">Notifications</span>
														</label>
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="account/statements.html" class="menu-link px-5">My Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
													<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
														<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
														<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
													</span></span>
											</a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-night-day fs-2"></i>
														</span>
														<span class="menu-title">Light</span>
													</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-moon fs-2"></i>
														</span>
														<span class="menu-title">Dark</span>
													</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-screen fs-2"></i>
														</span>
														<span class="menu-title">System</span>
													</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
													<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
														<img class="w-15px h-15px rounded-1 ms-2" src="media/flags/united-states.svg" alt="" /></span></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="media/flags/united-states.svg" alt="" />
														</span>English</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="media/flags/spain.svg" alt="" />
														</span>Spanish</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="media/flags/germany.svg" alt="" />
														</span>German</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="media/flags/japan.svg" alt="" />
														</span>Japanese</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="media/flags/france.svg" alt="" />
														</span>French</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none" title="Show header menu">
									<button class="btn btn-sm btn-icon btn-custom h-35px w-35px" id="kt_header_secondary_mobile_toggle">
										<i class="ki-outline ki-element-4 fs-2"></i>
									</button>
								</div>
								<!--end::Header menu toggle-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none me-n3" title="Show header menu">
									<button class="btn btn-sm btn-icon btn-custom h-35px w-35px" id="kt_app_sidebar_mobile_toggle">
										<i class="ki-outline ki-setting-3 fs-2"></i>
									</button>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header primary wrapper-->
					</div>
					<!--end::Header primary container-->
				</div>
				<!--end::Header primary-->
				<!--begin::Header secondary-->
				<div class="app-header-secondary app-header-mobile-drawer" data-kt-drawer="true" data-kt-drawer-name="app-header-secondary" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_secondary_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'append'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header'}">
					<!--begin::Header secondary wrapper-->
					<div class="d-flex flex-column flex-grow-1 overflow-hidden">
						<div class="app-header-secondary-menu-main d-flex flex-grow-lg-1 align-items-end pt-3 pt-lg-2 px-3 px-lg-0 w-auto overflow-auto flex-nowrap">
							<div class="app-container container-fluid">
								<!--begin::Main menu-->
								<div class="menu menu-rounded menu-nowrap flex-shrink-0 menu-row menu-active-bg menu-title-gray-700 menu-state-gray-900 menu-icon-gray-500 menu-arrow-gray-500 menu-state-icon-primary menu-state-bullet-primary fw-semibold fs-base align-items-stretch" id="#kt_app_header_secondary_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Account</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="index.html">
													<span class="menu-icon">
														<i class="ki-outline ki-chart-simple fs-3"></i>
													</span>
													<span class="menu-title">Dashboard</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link active" href="account/settings.html">
													<span class="menu-icon">
														<i class="ki-outline ki-share fs-3"></i>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="account/security.html">
													<span class="menu-icon">
														<i class="ki-outline ki-shield fs-3"></i>
													</span>
													<span class="menu-title">Security</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="account/activity.html">
													<span class="menu-icon">
														<i class="ki-outline ki-scan-barcode fs-3"></i>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="account/billing.html">
													<span class="menu-icon">
														<i class="ki-outline ki-dollar fs-3"></i>
													</span>
													<span class="menu-title">Billing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/statements.html">
													<span class="menu-icon">
														<i class="ki-outline ki-two-credit-cart fs-3"></i>
													</span>
													<span class="menu-title">Statements</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<div class="menu-content">
											<div class="menu-separator"></div>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="apps/projects/list.html">
											<span class="menu-title">Projects</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<div class="menu-content">
											<div class="menu-separator"></div>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="apps/customers/list.html">
											<span class="menu-title">Customers</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<div class="menu-content">
											<div class="menu-separator"></div>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
											<span class="menu-icon">
												<i class="ki-outline ki-plus fs-3"></i>
											</span>
											<span class="menu-title">Add New</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item flex-grow-1"></div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<div class="menu-content">
											<div class="menu-separator d-block d-lg-none"></div>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="utilities/modals/wizards/create-app.html">
											<span class="menu-icon">
												<i class="ki-outline ki-plus fs-3"></i>
											</span>
											<span class="menu-title">Extensions</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<div class="menu-content">
											<div class="menu-separator"></div>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end" class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Tools</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo60/layout-builder.html">
													<span class="menu-icon">
														<i class="ki-outline ki-chart-simple fs-3"></i>
													</span>
													<span class="menu-title">Layout Builder</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog">
													<span class="menu-icon">
														<i class="ki-outline ki-code fs-3"></i>
													</span>
													<span class="menu-title">Changelog</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs">
													<span class="menu-icon">
														<i class="ki-outline ki-abstract-26 fs-3"></i>
													</span>
													<span class="menu-title">Docs</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Menu-->
							</div>
						</div>
						<div class="app-header-secondary-menu-sub d-flex align-items-stretch flex-grow-1">
							<div class="app-container d-flex flex-column flex-lg-row align-items-stretch justify-content-lg-between container-fluid">
								<!--begin::Main menu-->
								<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-gray-900 menu-icon-gray-500 menu-arrow-gray-500 menu-state-icon-primary menu-state-bullet-primary fw-semibold fs-base align-items-stretch my-2 my-lg-0 px-2 px-lg-0" id="#kt_app_header_tertiary_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link active" href="#">
											<span class="menu-icon">
												<i class="ki-outline ki-element-9 fs-4"></i>
											</span>
											<span class="menu-title">Views</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-grid fs-4"></i>
											</span>
											<span class="menu-title">My Widgets</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/projects/targets.html">
													<span class="menu-icon">
														<i class="ki-outline ki-menu fs-3"></i>
													</span>
													<span class="menu-title">Task Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/customers/details.html">
													<span class="menu-icon">
														<i class="ki-outline ki-basket-ok fs-3"></i>
													</span>
													<span class="menu-title">Sales Tracker</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/invoices/create.html">
													<span class="menu-icon">
														<i class="ki-outline ki-scan-barcode fs-3"></i>
													</span>
													<span class="menu-title">Expense Calculator</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/file-manager/files.html">
													<span class="menu-icon">
														<i class="ki-outline ki-picture fs-3"></i>
													</span>
													<span class="menu-title">Media Dashboard</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/projects/targets.html">
													<span class="menu-icon">
														<i class="ki-outline ki-rocket fs-3"></i>
													</span>
													<span class="menu-title">Project Planner</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="apps/calendar.html">
													<span class="menu-icon">
														<i class="ki-outline ki-calendar-8 fs-3"></i>
													</span>
													<span class="menu-title">Event Calendar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-eye-slash fs-4"></i>
											</span>
											<span class="menu-title">Hide Fields</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-150px">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Product</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">SKU</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Quantity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Price</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Rating</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Status</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-filter fs-4"></i>
											</span>
											<span class="menu-title">Filter</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-lg-300px">
											<div data-kt-menu-dismiss="true">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-6">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_app_header_tertiary_menu" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-6">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-0">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Form-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Actions-->
												<div class="px-7 py-5 d-flex justify-content-end gap-2">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-sort fs-4"></i>
											</span>
											<span class="menu-title">Sort</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Default (No Sorting)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Name (A to Z)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Name (Z to A)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Date (Oldest to Newest)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Date (Newest to Oldest)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Price (Lowest to Highest)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="#">
													<span class="menu-title">Price (Highest to Lowest)</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Menu-->
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Search toggle-->
									<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
										<div class="btn btn-icon btn-active-color-primary ms-1">
											<i class="ki-outline ki-magnifier fs-3"></i>
										</div>
									</div>
									<!--end::Search toggle-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Form-->
											<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
												<!--begin::Icon-->
												<i class="ki-outline ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>
												<!--end::Icon-->
												<!--begin::Input-->
												<input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
												<!--end::Input-->
												<!--begin::Spinner-->
												<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
													<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
												</span>
												<!--end::Spinner-->
												<!--begin::Reset-->
												<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
													<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
												</span>
												<!--end::Reset-->
												<!--begin::Toolbar-->
												<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
													<!--begin::Preferences toggle-->
													<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
														<i class="ki-outline ki-setting-2 fs-2"></i>
													</div>
													<!--end::Preferences toggle-->
													<!--begin::Advanced search toggle-->
													<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
														<i class="ki-outline ki-down fs-2"></i>
													</div>
													<!--end::Advanced search toggle-->
												</div>
												<!--end::Toolbar-->
											</form>
											<!--end::Form-->
											<!--begin::Separator-->
											<div class="separator border-gray-200 mb-6"></div>
											<!--end::Separator-->
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="media/avatars/300-6.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="media/avatars/300-2.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="media/avatars/300-9.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="media/avatars/300-14.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="media/avatars/300-11.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="media/svg/brand-logos/tvit.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="media/svg/misc/infography.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="media/svg/brand-logos/leaf.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="media/svg/brand-logos/tower.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-notepad fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-frame fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-profile-circle fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="mb-5" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-laptop fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-sms fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-bank fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="users" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="orders" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="projects" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="any" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
							</div>
						</div>
					</div>
					<!--end::Header secondary wrapper-->
				</div>
				<!--end::Header secondary-->
			</div>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Sidebar-->
				<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
					<!--begin::Sidebar wrapper-->
					<div id="kt_app_sidebar_wrapper" class="flex-grow-1 hover-scroll-y mt-9 mb-5 px-2 mx-3 ms-lg-7 me-lg-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}" data-kt-scroll-offset="5px">
						<!--begin::Filter-->
						<div class="mb-4">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative mb-6">
								<i class="ki-outline ki-magnifier fs-4 text-gray-500 position-absolute ms-3 fw-bold"></i>
								<input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid w-100 ps-10 border border-300 bg-light-active" placeholder="Find a view" />
								<i class="ki-solid ki-setting-4 fs-5 text-gray-500 position-absolute top-50 end-0 translate-middle-y fw-bold me-3"></i>
							</div>
							<!--end::Search-->
							<!--begin::Items-->
							<div class="m-0">
								<!--begin::Item-->
								<a href="#" class="btn btn-sm d-flex flex-stack border border-300 bg-gray-100i btn-color-gray-700 btn-active-color-gray-900 px-3 mb-2">
									<span class="d-flex align-item-center">
										<i class="ki-outline ki-abstract-41 fs-4 me-2 text-primary"></i>All Features</span>
									<i class="ki-outline ki-check fs-4 text-gray-500 me-n2"></i>
								</a>
								<!--end::Item-->
								<!--begin::Item-->
								<a href="#" class="btn btn-sm px-3 border border-transparent btn-color-gray-700 btn-active-color-gray-900">
									<i class="ki-outline ki-calendar fs-4 me-1 text-success"></i>Feature Calendar</a>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Filter-->
						<!--begin::Main menu-->
						<div class="menu-sidebar menu menu-fit menu-column menu-rounded menu-title-gray-700 menu-icon-gray-700 menu-arrow-gray-700 fw-semibold fs-6 align-items-stretch flex-grow-1" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="true">
							<!--begin:Menu item-->
							<div class="menu-item py-1">
								<!--begin:Menu content-->
								<div class="menu-content">
									<div class="separator separator-dashed"></div>
								</div>
								<!--end:Menu content-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
								<!--begin:Menu link-->
								<span class="menu-link">
									<span class="menu-title">Create new</span>
									<span class="menu-arrow"></span>
								</span>
								<!--end:Menu link-->
								<!--begin:Menu sub-->
								<div class="menu-sub menu-sub-accordion menu-state-gray-900 menu-fit open">
									<!--begin:Menu item-->
									<div class="menu-item menu-accordion menu-fit">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-element-11 fs-4 text-gray-700"></i>
											</span>
											<span class="menu-title">Grid</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-subtitle fs-4 text-danger"></i>
											</span>
											<span class="menu-title">Form</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-calendar fs-4 text-success"></i>
											</span>
											<span class="menu-title">Calendar</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-picture fs-4 text-info"></i>
											</span>
											<span class="menu-title">Gallery</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-element-2 fs-4 text-warning"></i>
											</span>
											<span class="menu-title">Kanban</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-abstract-44 fs-4 text-danger"></i>
											</span>
											<span class="menu-title">Timeline</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end:Menu sub-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item py-1">
								<!--begin:Menu content-->
								<div class="menu-content">
									<div class="separator separator-dashed"></div>
								</div>
								<!--end:Menu content-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
								<!--begin:Menu link-->
								<span class="menu-link">
									<span class="menu-title">Create an interface</span>
									<span class="menu-arrow"></span>
								</span>
								<!--end:Menu link-->
								<!--begin:Menu sub-->
								<div class="menu-sub menu-sub-accordion menu-state-gray-900 menu-fit open">
									<!--begin:Menu item-->
									<div class="menu-item menu-accordion menu-fit">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-menu fs-4 text-gray-700"></i>
											</span>
											<span class="menu-title">Record review</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item menu-accordion menu-fit">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-graph-2 fs-4 text-gray-700"></i>
											</span>
											<span class="menu-title">Record summary</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item menu-accordion menu-fit">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-graph-3 fs-4 text-gray-700"></i>
											</span>
											<span class="menu-title">Dashboard</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item menu-accordion menu-fit">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-some-files fs-4 text-gray-700"></i>
											</span>
											<span class="menu-title">Blank</span>
											<span class="menu-badge">
												<button class="btn btn-sm btn-icon btn-action" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
													<i class="ki-outline ki-plus fs-4"></i>
												</button>
											</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end:Menu sub-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Sidebar wrapper-->
				</div>
				<!--end::Sidebar-->
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar pt-10 mb-0">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
								<!--begin::Toolbar wrapper-->
								<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Account Settings</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Account</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Save</a>
										<a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
											<i class="ki-outline ki-eye fs-4"></i>Preview</a>
										<a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
											<i class="ki-outline ki-exit-up fs-4"></i>Push</a>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap">
											<!--begin: Pic-->
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="media/avatars/300-1.jpg" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
															<a href="#">
																<i class="ki-outline ki-verify fs-1 text-primary"></i>
															</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-outline ki-profile-circle fs-4 me-1"></i>Developer</a>
															<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-outline ki-geolocation fs-4 me-1"></i>SF, Bay Area</a>
															<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
																<i class="ki-outline ki-sms fs-4"></i>max@kt.com</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
													<!--begin::Actions-->
													<div class="d-flex my-4">
														<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
															<i class="ki-outline ki-check fs-3 d-none"></i>
															<!--begin::Indicator label-->
															<span class="indicator-label">Follow</span>
															<!--end::Indicator label-->
															<!--begin::Indicator progress-->
															<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															<!--end::Indicator progress-->
														</a>
														<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
														<!--begin::Menu-->
														<div class="me-0">
															<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-solid ki-dots-horizontal fs-2x"></i>
															</button>
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3">Create Payment
																		<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-outline ki-information fs-6"></i>
																		</span></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Subscription</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Plans</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Billing</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Statements</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu separator-->
																		<div class="separator my-2"></div>
																		<!--end::Menu separator-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<div class="menu-content px-3">
																				<!--begin::Switch-->
																				<label class="form-check form-switch form-check-custom form-check-solid">
																					<!--begin::Input-->
																					<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																					<!--end::Input-->
																					<!--end::Label-->
																					<span class="form-check-label text-muted fs-6">Recuring</span>
																					<!--end::Label-->
																				</label>
																				<!--end::Switch-->
																			</div>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
																	<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Earnings</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
																	<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Projects</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
																	<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Progress-->
													<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
															<span class="fw-bold fs-6">50%</span>
														</div>
														<div class="h-5px mx-3 w-100 bg-light mb-3">
															<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Navs-->
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/overview.html">Overview</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="account/settings.html">Settings</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/security.html">Security</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/activity.html">Activity</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/billing.html">Billing</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/statements.html">Statements</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/referrals.html">Referrals</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/api-keys.html">API Keys</a>
											</li>
											<!--end::Nav item-->
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="account/logs.html">Logs</a>
											</li>
											<!--end::Nav item-->
										</ul>
										<!--begin::Navs-->
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::Basic info-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Profile Details</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="ki-outline ki-pencil fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																<input type="hidden" name="avatar_remove" />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="ki-outline ki-cross fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																<i class="ki-outline ki-cross fs-2"></i>
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Row-->
														<div class="row">
															<!--begin::Col-->
															<div class="col-lg-6 fv-row">
																<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6 fv-row">
																<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">
														<span class="required">Contact Phone</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
															<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">
														<span class="required">Country</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
															<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
															<option value="">Select a Country...</option>
															<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
															<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
															<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
															<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
															<option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
															<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
															<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
															<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
															<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
															<option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
															<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
															<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
															<option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
															<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
															<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
															<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
															<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
															<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
															<option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
															<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
															<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
															<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
															<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
															<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
															<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
															<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
															<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
															<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
															<option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
															<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
															<option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
															<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
															<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
															<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
															<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
															<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
															<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
															<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
															<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
															<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
															<option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
															<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
															<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
															<option data-kt-flag="flags/china.svg" value="CN">China</option>
															<option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
															<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
															<option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
															<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
															<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
															<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
															<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
															<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
															<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
															<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
															<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
															<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
															<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
															<option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
															<option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
															<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
															<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
															<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
															<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
															<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
															<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
															<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
															<option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
															<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
															<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
															<option data-kt-flag="flags/france.svg" value="FR">France</option>
															<option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
															<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
															<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
															<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
															<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
															<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
															<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
															<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
															<option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
															<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
															<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
															<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
															<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
															<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
															<option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
															<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
															<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
															<option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
															<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
															<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
															<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
															<option data-kt-flag="flags/india.svg" value="IN">India</option>
															<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
															<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
															<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
															<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
															<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
															<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
															<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
															<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
															<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
															<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
															<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
															<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
															<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
															<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
															<option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
															<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
															<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
															<option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
															<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
															<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
															<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
															<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
															<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
															<option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
															<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
															<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
															<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
															<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
															<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
															<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
															<option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
															<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
															<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
															<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
															<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
															<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
															<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
															<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
															<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
															<option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
															<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
															<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
															<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
															<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
															<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
															<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
															<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
															<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
															<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
															<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
															<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
															<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
															<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
															<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
															<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
															<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
															<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
															<option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
															<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
															<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
															<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
															<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
															<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
															<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
															<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
															<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
															<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
															<option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
															<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
															<option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
															<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
															<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
															<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
															<option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
															<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
															<option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
															<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
															<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
															<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
															<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
															<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
															<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
															<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
															<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
															<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
															<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
															<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
															<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
															<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
															<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
															<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
															<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
															<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
															<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
															<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
															<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
															<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
															<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
															<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
															<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
															<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
															<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
															<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
															<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
															<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
															<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
															<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
															<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
															<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
															<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
															<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
															<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
															<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
															<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
															<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
															<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
															<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
															<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
															<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
															<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
															<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
															<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
															<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
															<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
															<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
															<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
															<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
															<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
															<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
															<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
															<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<!--begin::Input-->
														<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
															<option value="">Select a Language...</option>
															<option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
															<option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
															<option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
															<option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
															<option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
															<option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
															<option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
															<option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
															<option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
															<option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
															<option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
															<option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
															<option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
															<option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
															<option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
															<option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
															<option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
															<option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
															<option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
															<option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
															<option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
															<option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
															<option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
															<option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
															<option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
															<option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
															<option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
															<option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
															<option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
															<option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
															<option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
															<option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
															<option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
															<option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
															<option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
															<option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
															<option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
															<option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
															<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
															<option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
															<option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
															<option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
															<option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
															<option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
														</select>
														<!--end::Input-->
														<!--begin::Hint-->
														<div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Time Zone</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
															<option value="">Select a Timezone..</option>
															<option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
															<option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
															<option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
															<option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
															<option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
															<option data-bs-offset="-25200" value="Pacific Time (US & Canada)">(GMT-07:00) Pacific Time (US & Canada)</option>
															<option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
															<option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
															<option data-bs-offset="-21600" value="Mountain Time (US & Canada)">(GMT-06:00) Mountain Time (US & Canada)</option>
															<option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
															<option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
															<option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
															<option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
															<option data-bs-offset="-18000" value="Central Time (US & Canada)">(GMT-05:00) Central Time (US & Canada)</option>
															<option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
															<option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
															<option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
															<option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
															<option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
															<option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
															<option data-bs-offset="-14400" value="Eastern Time (US & Canada)">(GMT-04:00) Eastern Time (US & Canada)</option>
															<option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
															<option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
															<option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
															<option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
															<option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
															<option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
															<option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
															<option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
															<option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
															<option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
															<option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
															<option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
															<option data-bs-offset="0" value="Azores">(GMT) Azores</option>
															<option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
															<option data-bs-offset="0" value="UTC">(GMT) UTC</option>
															<option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
															<option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
															<option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
															<option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
															<option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
															<option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
															<option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
															<option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
															<option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
															<option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
															<option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
															<option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
															<option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
															<option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
															<option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
															<option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
															<option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
															<option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
															<option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
															<option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
															<option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
															<option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
															<option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
															<option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
															<option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
															<option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
															<option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
															<option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
															<option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
															<option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
															<option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
															<option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
															<option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
															<option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
															<option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
															<option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
															<option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
															<option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
															<option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
															<option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
															<option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
															<option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
															<option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
															<option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
															<option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
															<option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
															<option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
															<option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
															<option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
															<option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
															<option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
															<option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
															<option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
															<option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
															<option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
															<option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
															<option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
															<option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
															<option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
															<option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
															<option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
															<option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
															<option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
															<option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
															<option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
															<option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
															<option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
															<option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
															<option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
															<option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
															<option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
															<option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
															<option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
															<option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
															<option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
															<option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
															<option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
															<option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
															<option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
															<option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
															<option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
															<option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
															<option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
															<option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
															<option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
															<option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
															<option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
															<option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
															<option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
															<option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
															<option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
															<option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
															<option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
															<option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
															<option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
															<option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
															<option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
															<option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
															<option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
															<option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
															<option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
															<option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
															<option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
															<option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
															<option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
															<option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
															<option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<select name="currnecy" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
															<option value="">Select a currency..</option>
															<option data-kt-flag="flags/united-states.svg" value="USD">
																<b>USD</b>&nbsp;-&nbsp;USA dollar
															</option>
															<option data-kt-flag="flags/united-kingdom.svg" value="GBP">
																<b>GBP</b>&nbsp;-&nbsp;British pound
															</option>
															<option data-kt-flag="flags/australia.svg" value="AUD">
																<b>AUD</b>&nbsp;-&nbsp;Australian dollar
															</option>
															<option data-kt-flag="flags/japan.svg" value="JPY">
																<b>JPY</b>&nbsp;-&nbsp;Japanese yen
															</option>
															<option data-kt-flag="flags/sweden.svg" value="SEK">
																<b>SEK</b>&nbsp;-&nbsp;Swedish krona
															</option>
															<option data-kt-flag="flags/canada.svg" value="CAD">
																<b>CAD</b>&nbsp;-&nbsp;Canadian dollar
															</option>
															<option data-kt-flag="flags/switzerland.svg" value="CHF">
																<b>CHF</b>&nbsp;-&nbsp;Swiss franc
															</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<!--begin::Options-->
														<div class="d-flex align-items-center mt-3">
															<!--begin::Option-->
															<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
																<input class="form-check-input" name="communication[]" type="checkbox" value="1" />
																<span class="fw-semibold ps-2 fs-6">Email</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label class="form-check form-check-custom form-check-inline form-check-solid">
																<input class="form-check-input" name="communication[]" type="checkbox" value="2" />
																<span class="fw-semibold ps-2 fs-6">Phone</span>
															</label>
															<!--end::Option-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-0">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
													<!--begin::Label-->
													<!--begin::Label-->
													<div class="col-lg-8 d-flex align-items-center">
														<div class="form-check form-check-solid form-switch form-check-custom fv-row">
															<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
															<label class="form-check-label" for="allowmarketing"></label>
														</div>
													</div>
													<!--begin::Label-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Basic info-->
								<!--begin::Sign-in Method-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Sign-in Method</h3>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_signin_method" class="collapse show">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Email Address-->
											<div class="d-flex flex-wrap align-items-center">
												<!--begin::Label-->
												<div id="kt_signin_email">
													<div class="fs-6 fw-bold mb-1">Email Address</div>
													<div class="fw-semibold text-gray-600">support@keenthemes.com</div>
												</div>
												<!--end::Label-->
												<!--begin::Edit-->
												<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
													<!--begin::Form-->
													<form id="kt_signin_change_email" class="form" novalidate="novalidate">
														<div class="row mb-6">
															<div class="col-lg-6 mb-4 mb-lg-0">
																<div class="fv-row mb-0">
																	<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
																	<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
																</div>
															</div>
															<div class="col-lg-6">
																<div class="fv-row mb-0">
																	<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
																	<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
																</div>
															</div>
														</div>
														<div class="d-flex">
															<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
															<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
														</div>
													</form>
													<!--end::Form-->
												</div>
												<!--end::Edit-->
												<!--begin::Action-->
												<div id="kt_signin_email_button" class="ms-auto">
													<button class="btn btn-light btn-active-light-primary">Change Email</button>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Email Address-->
											<!--begin::Separator-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Separator-->
											<!--begin::Password-->
											<div class="d-flex flex-wrap align-items-center mb-10">
												<!--begin::Label-->
												<div id="kt_signin_password">
													<div class="fs-6 fw-bold mb-1">Password</div>
													<div class="fw-semibold text-gray-600">************</div>
												</div>
												<!--end::Label-->
												<!--begin::Edit-->
												<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
													<!--begin::Form-->
													<form id="kt_signin_change_password" class="form" novalidate="novalidate">
														<div class="row mb-1">
															<div class="col-lg-4">
																<div class="fv-row mb-0">
																	<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
																	<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
																</div>
															</div>
															<div class="col-lg-4">
																<div class="fv-row mb-0">
																	<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
																	<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
																</div>
															</div>
															<div class="col-lg-4">
																<div class="fv-row mb-0">
																	<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
																	<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
																</div>
															</div>
														</div>
														<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
														<div class="d-flex">
															<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
															<button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
														</div>
													</form>
													<!--end::Form-->
												</div>
												<!--end::Edit-->
												<!--begin::Action-->
												<div id="kt_signin_password_button" class="ms-auto">
													<button class="btn btn-light btn-active-light-primary">Reset Password</button>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Password-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
												<!--begin::Icon-->
												<i class="ki-outline ki-shield-tick fs-2tx text-primary me-4"></i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
													<!--begin::Content-->
													<div class="mb-3 mb-md-0 fw-semibold">
														<h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
														<div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
													</div>
													<!--end::Content-->
													<!--begin::Action-->
													<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
													<!--end::Action-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Sign-in Method-->
								<!--begin::Connected Accounts-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Connected Accounts</h3>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_connected_accounts" class="collapse show">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
												<!--begin::Icon-->
												<i class="ki-outline ki-design-1 fs-2tx text-primary me-4"></i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
															<a href="#" class="fw-bold">Learn More</a>
														</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--begin::Items-->
											<div class="py-2">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
															<div class="fs-6 fw-semibold text-gray-500">Plan properly your workflow</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<div class="form-check form-check-solid form-check-custom form-switch">
															<input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
															<label class="form-check-label" for="googleswitch"></label>
														</div>
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
															<div class="fs-6 fw-semibold text-gray-500">Keep eye on on your Repositories</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<div class="form-check form-check-solid form-check-custom form-switch">
															<input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
															<label class="form-check-label" for="githubswitch"></label>
														</div>
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
															<div class="fs-6 fw-semibold text-gray-500">Integrate Projects Discussions</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<div class="form-check form-check-solid form-check-custom form-switch">
															<input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
															<label class="form-check-label" for="slackswitch"></label>
														</div>
													</div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
											<button class="btn btn-primary">Save Changes</button>
										</div>
										<!--end::Card footer-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Connected Accounts-->
								<!--begin::Notifications-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Email Preferences</h3>
										</div>
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_email_preferences" class="collapse show">
										<!--begin::Form-->
										<form class="form">
											<!--begin::Card body-->
											<div class="card-body border-top px-9 py-9">
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Successful Payments</span>
														<span class="text-muted fs-6">Receive a notification for every successful payment.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Payouts</span>
														<span class="text-muted fs-6">Receive a notification for every initiated payout.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Fee Collection</span>
														<span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Customer Payment Dispute</span>
														<span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Refund Alerts</span>
														<span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Invoice Payments</span>
														<span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Option-->
												<!--begin::Option-->
												<label class="form-check form-check-custom form-check-solid align-items-start">
													<!--begin::Input-->
													<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label d-flex flex-column align-items-start">
														<span class="fw-bold fs-5 mb-0">Webhook API Endpoints</span>
														<span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>
													</span>
													<!--end::Label-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
												<button class="btn btn-primary px-6">Save Changes</button>
											</div>
											<!--end::Card footer-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Notifications-->
								<!--begin::Notifications-->
								<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Notifications</h3>
										</div>
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_notifications" class="collapse show">
										<!--begin::Form-->
										<form class="form">
											<!--begin::Card body-->
											<div class="card-body border-top px-9 pt-3 pb-4">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-row-dashed border-gray-300 align-middle gy-6">
														<tbody class="fs-6 fw-semibold">
															<!--begin::Table row-->
															<tr>
																<td class="min-w-250px fs-4 fw-bold">Notifications</td>
																<td class="w-125px">
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
																		<label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>
																	</div>
																</td>
																<td class="w-125px">
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
																		<label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>
																	</div>
																</td>
															</tr>
															<!--begin::Table row-->
															<!--begin::Table row-->
															<tr>
																<td>Billing Updates</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
																		<label class="form-check-label ps-2" for="billing1"></label>
																	</div>
																</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
																		<label class="form-check-label ps-2" for="billing2"></label>
																	</div>
																</td>
															</tr>
															<!--begin::Table row-->
															<!--begin::Table row-->
															<tr>
																<td>New Team Members</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
																		<label class="form-check-label ps-2" for="team1"></label>
																	</div>
																</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
																		<label class="form-check-label ps-2" for="team2"></label>
																	</div>
																</td>
															</tr>
															<!--begin::Table row-->
															<!--begin::Table row-->
															<tr>
																<td>Completed Projects</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
																		<label class="form-check-label ps-2" for="project1"></label>
																	</div>
																</td>
																<td>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
																		<label class="form-check-label ps-2" for="project2"></label>
																	</div>
																</td>
															</tr>
															<!--begin::Table row-->
															<!--begin::Table row-->
															<tr>
																<td class="border-bottom-0">Newsletters</td>
																<td class="border-bottom-0">
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
																		<label class="form-check-label ps-2" for="newsletter1"></label>
																	</div>
																</td>
																<td class="border-bottom-0">
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
																		<label class="form-check-label ps-2" for="newsletter2"></label>
																	</div>
																</td>
															</tr>
															<!--begin::Table row-->
														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
												<button class="btn btn-primary px-6">Save Changes</button>
											</div>
											<!--end::Card footer-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Notifications-->
								<!--begin::Deactivate Account-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Deactivate Account</h3>
										</div>
									</div>
									<!--end::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_deactivate" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_deactivate_form" class="form">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-semibold">
															<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
															<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
																<br />
																<a class="fw-bold" href="#">Learn more</a>
															</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--begin::Form input row-->
												<div class="form-check form-check-solid fv-row">
													<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
													<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
												</div>
												<!--end::Form input row-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
											</div>
											<!--end::Card footer-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Deactivate Account-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					<div id="kt_app_footer" class="app-footer">
						<!--begin::Footer container-->
						<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
							<!--begin::Copyright-->
							<div class="text-gray-900 order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Footer container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none border-0 rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
						<i class="ki-outline ki-cross fs-1"></i>
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline timeline-border-dashed">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon me-4">
								<i class="ki-outline ki-flag fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="apps/projects/project.html" class="w-30px me-3" src="media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="apps/projects/project.html" class="w-30px me-3" src="media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-sms fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-semibold">
												<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-basket fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-semibold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-0">
						<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<i class="ki-outline ki-dots-square fs-2"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-outline ki-information fs-7"></i>
									</span></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
						<i class="ki-outline ki-cross-square fs-2"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="ki-outline ki-paper-clip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="ki-outline ki-cloud-add fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
		<!--begin::Messenger-->
		<div class="card card-flush w-100 rounded-0">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Title-->
				<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
						<i class="ki-outline ki-cross fs-2"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body hover-scroll-overlay-y h-400px pt-5">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
							<span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 350</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-1.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
							<span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-3.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
							<span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 150</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-8.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-26.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
							<span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-21.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
							<span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 720</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-34.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 430</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="media/stock/600x400/img-27.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Total</span>
					<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
				</div>
				<!--end::Item-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Sub total</span>
					<span class="text-primary fw-bolder fs-5">$ 246.35</span>
				</div>
				<!--end::Item-->
				<!--end::Action-->
				<div class="d-flex justify-content-end mt-9">
					<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-outline ki-arrow-up"></i>
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Create Campaign-->
	<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-fullscreen p-9">
			<!--begin::Modal content-->
			<div class="modal-content modal-rounded">
				<!--begin::Modal header-->
				<div class="modal-header py-7 d-flex justify-content-between">
					<!--begin::Modal title-->
					<h2>Create Campaign</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
						<!--begin::Nav-->
						<div class="stepper-nav justify-content-center py-2">
							<!--begin::Step 1-->
							<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Campaign Details</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Creative Uploads</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Audiences</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Budget Estimates</h3>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Completed</h3>
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
										<!--begin::Title-->
										<h2 class="fw-bold d-flex align-items-center text-gray-900">Setup Campaign Details
											<span class="ms-1" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span>
										</h2>
										<!--end::Title-->
										<!--begin::Notice-->
										<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="required form-label mb-3">Campaign Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-block fw-semibold fs-6 mb-5">
											<span class="required">Company Logo</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Image input placeholder-->
										<style>
											.image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image.svg');
											}

											[data-bs-theme="dark"] .image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image-dark.svg');
											}
										</style>
										<!--end::Image input placeholder-->
										<!--begin::Image input-->
										<div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-125px h-125px"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
												<i class="ki-outline ki-pencil fs-7"></i>
												<!--begin::Inputs-->
												<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="avatar_remove" />
												<!--end::Inputs-->
											</label>
											<!--end::Label-->
											<!--begin::Cancel-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
												<i class="ki-outline ki-cross fs-2"></i>
											</span>
											<!--end::Cancel-->
											<!--begin::Remove-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
												<i class="ki-outline ki-cross fs-2"></i>
											</span>
											<!--end::Remove-->
										</div>
										<!--end::Image input-->
										<!--begin::Hint-->
										<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
										<!--end::Hint-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
										<!--end::Label-->
										<!--begin::Roles-->
										<!--begin::Input row-->
										<div class="d-flex fv-row">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_0">
													<div class="fw-bold text-gray-800">Get more visitors</div>
													<div class="text-gray-600">Increase impression traffic onto the platform</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Radio-->
										</div>
										<!--end::Input row-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Input row-->
										<div class="d-flex fv-row">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_1">
													<div class="fw-bold text-gray-800">Get more messages on chat</div>
													<div class="text-gray-600">Increase community interaction and communication</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Radio-->
										</div>
										<!--end::Input row-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Input row-->
										<div class="d-flex fv-row">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_2">
													<div class="fw-bold text-gray-800">Get more calls</div>
													<div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Radio-->
										</div>
										<!--end::Input row-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Input row-->
										<div class="d-flex fv-row">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_3">
													<div class="fw-bold text-gray-800">Get more likes</div>
													<div class="text-gray-600">Increase positive interactivity on social media platforms</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Radio-->
										</div>
										<!--end::Input row-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Input row-->
										<div class="d-flex fv-row">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_4">
													<div class="fw-bold text-gray-800">Lead generation</div>
													<div class="text-gray-600">Collect contact information for potential customers</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Radio-->
										</div>
										<!--end::Input row-->
										<!--end::Roles-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Upload Files</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Dropzone-->
										<div class="dropzone" id="kt_modal_create_campaign_files_upload">
											<!--begin::Message-->
											<div class="dz-message needsclick">
												<!--begin::Icon-->
												<i class="ki-outline ki-file-up fs-3hx text-primary"></i>
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-4">
													<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
													<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
												</div>
												<!--end::Info-->
											</div>
										</div>
										<!--end::Dropzone-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
										<!--End::Label-->
										<!--begin::Files-->
										<div class="mh-300px scroll-y me-n7 pe-7">
											<!--begin::File-->
											<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/pdf.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
														<div class="fw-semibold text-muted">230kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/tif.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
														<div class="fw-semibold text-muted">2.4mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/folder-document.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
														<div class="fw-semibold text-muted">1.12mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/css.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
														<div class="fw-semibold text-muted">85kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/ai.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
														<div class="fw-semibold text-muted">48mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex flex-stack py-4">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="media/svg/files/doc.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
														<div class="fw-semibold text-muted">27kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
														<option></option>
														<option value="1">Remove</option>
														<option value="2">Modify</option>
														<option value="3">Select</option>
													</select>
												</div>
												<!--end::Menu-->
											</div>
											<!--end::File-->
										</div>
										<!--end::Files-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Configure Audiences</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Gender
											<span class="ms-1" data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--End::Label-->
										<!--begin::Row-->
										<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
													<!--begin::Radio-->
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bold text-gray-800 d-block">All</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
													<!--begin::Radio-->
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio" name="campaign_gender" value="2" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
													<!--begin::Radio-->
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio" name="campaign_gender" value="3" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Age
											<span class="ms-1" data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--End::Label-->
										<!--begin::Slider-->
										<div class="d-flex flex-stack">
											<div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
											<div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
											<div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
										</div>
										<!--end::Slider-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Location
											<span class="ms-1" data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--End::Label-->
										<!--begin::Tagify-->
										<input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="media/flags/" />
										<!--end::Tagify-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Budget Estimates</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Campaign Duration
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose how long you want your ad to run for">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--end::Label-->
										<!--begin::Duration option-->
										<div class="d-flex gap-9 mb-7">
											<!--begin::Button-->
											<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">Continuous duration
												<br />
												<span class="fs-7">Your ad will run continuously for a daily budget.</span></button>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">Fixed duration
												<br />
												<span class="fs-7">Your ad will run on the specified dates only.</span></button>
											<!--end::Button-->
										</div>
										<!--end::Duration option-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Daily Budget
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--end::Label-->
										<!--begin::Slider-->
										<div class="d-flex flex-column text-center">
											<div class="d-flex align-items-start justify-content-center mb-7">
												<span class="fw-bold fs-4 mt-1 me-2">$</span>
												<span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
												<span class="fw-bold fs-3x">.00</span>
											</div>
											<div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
										</div>
										<!--end::Slider-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-12 text-center">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Campaign Created!</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly created campaign!</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-center pb-20">
										<button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Campaign</button>
										<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Campaign</a>
									</div>
									<!--end::Actions-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img src="media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
										<i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
											<i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--begin::Modal body-->
			</div>
		</div>
	</div>
	<!--end::Modal - Create Campaign-->
	<!--begin::Modal - New Target-->
	<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
					<!--begin:Form-->
					<form id="kt_modal_new_target_form" class="form" action="#">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<!--begin::Title-->
							<h1 class="mb-3">Set First Target</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
								<a href="#" class="fw-bold link-primary">Project Guidelines</a>.
							</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Target Title</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
									<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
								</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row g-9 mb-8">
							<!--begin::Col-->
							<div class="col-md-6 fv-row">
								<label class="required fs-6 fw-semibold mb-2">Assign</label>
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
									<option value="">Select user...</option>
									<option value="1">Karina Clark</option>
									<option value="2">Robert Doe</option>
									<option value="3">Niel Owen</option>
									<option value="4">Olivia Wild</option>
									<option value="5">Sean Bean</option>
								</select>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6 fv-row">
								<label class="required fs-6 fw-semibold mb-2">Due Date</label>
								<!--begin::Input-->
								<div class="position-relative d-flex align-items-center">
									<!--begin::Icon-->
									<i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
									<!--end::Icon-->
									<!--begin::Datepicker-->
									<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
									<!--end::Datepicker-->
								</div>
								<!--end::Input-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-8">
							<label class="fs-6 fw-semibold mb-2">Target Details</label>
							<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Tags</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
									<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
								</span>
							</label>
							<!--end::Label-->
							<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-stack mb-8">
							<!--begin::Label-->
							<div class="me-5">
								<label class="fs-6 fw-semibold">Adding Users by Team Members</label>
								<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="mb-15 fv-row">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="fw-semibold me-5">
									<label class="fs-6">Notifications</label>
									<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
								</div>
								<!--end::Label-->
								<!--begin::Checkboxes-->
								<div class="d-flex align-items-center">
									<!--begin::Checkbox-->
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Email</span>
									</label>
									<!--end::Checkbox-->
									<!--begin::Checkbox-->
									<label class="form-check form-check-custom form-check-solid">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
										<span class="form-check-label fw-semibold">Phone</span>
									</label>
									<!--end::Checkbox-->
								</div>
								<!--end::Checkboxes-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center">
							<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
							<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end:Form-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - New Target-->
	<!--begin::Modal - New Card-->
	<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Add New Card</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
					<!--begin::Form-->
					<form id="kt_modal_new_card_form" class="form" action="#">
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-7 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
								<span class="required">Name On Card</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
									<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
								</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-7 fv-row">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
							<!--end::Label-->
							<!--begin::Input wrapper-->
							<div class="position-relative">
								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
								<!--end::Input-->
								<!--begin::Card logos-->
								<div class="position-absolute translate-middle-y top-50 end-0 me-5">
									<img src="media/svg/card-logos/visa.svg" alt="" class="h-25px" />
									<img src="media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
									<img src="media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
								</div>
								<!--end::Card logos-->
							</div>
							<!--end::Input wrapper-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Col-->
							<div class="col-md-8 fv-row">
								<!--begin::Label-->
								<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
								<!--end::Label-->
								<!--begin::Row-->
								<div class="row fv-row">
									<!--begin::Col-->
									<div class="col-6">
										<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
											<option></option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
											<option value="2028">2028</option>
											<option value="2029">2029</option>
											<option value="2030">2030</option>
											<option value="2031">2031</option>
											<option value="2032">2032</option>
											<option value="2033">2033</option>
										</select>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-4 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">CVV</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
										<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
									</span>
								</label>
								<!--end::Label-->
								<!--begin::Input wrapper-->
								<div class="position-relative">
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
									<!--end::Input-->
									<!--begin::CVV icon-->
									<div class="position-absolute translate-middle-y top-50 end-0 me-3">
										<i class="ki-outline ki-credit-cart fs-2hx"></i>
									</div>
									<!--end::CVV icon-->
								</div>
								<!--end::Input wrapper-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5">
								<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
								<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Save Card</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center pt-15">
							<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
							<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - New Card-->
	<!--begin::Modal - New Target-->
	<div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
					<!--begin:Form-->
					<form id="kt_modal_bidding_form" class="form" action="#">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<!--begin::Title-->
							<h1 class="mb-3">Place your bids</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
								<a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.
							</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Bid Amount</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Specify the bid amount to place in.">
									<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
								</span>
							</label>
							<!--end::Label-->
							<!--begin::Bid options-->
							<div class="d-flex flex-stack gap-5 mb-3">
								<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">10</button>
								<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">50</button>
								<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
							</div>
							<!--begin::Bid options-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount" name="bid_amount" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-8">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Currency Type</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
									<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
								</span>
							</label>
							<!--end::Label-->
							<!--begin::Select2-->
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Currency Type" name="currency_type">
								<option value=""></option>
								<option value="dollar" selected="selected">Dollar</option>
								<option value="crypto">Crypto</option>
							</select>
							<!--end::Select2-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-8">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span>Currency</span>
							</label>
							<!--end::Label-->
							<!--begin::Dollar type-->
							<div class="" data-kt-modal-bidding-type="dollar">
								<!--begin::Select2-->
								<select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
									<option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected="selected">
										<b>USD</b>&nbsp;-&nbsp;USA dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
										<b>GBP</b>&nbsp;-&nbsp;British pound
									</option>
									<option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
										<b>AUD</b>&nbsp;-&nbsp;Australian dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
										<b>JPY</b>&nbsp;-&nbsp;Japanese yen
									</option>
									<option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
										<b>SEK</b>&nbsp;-&nbsp;Swedish krona
									</option>
									<option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
										<b>CAD</b>&nbsp;-&nbsp;Canadian dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
										<b>CHF</b>&nbsp;-&nbsp;Swiss franc
									</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Dollar type-->
							<!--begin::Crypto type-->
							<div class="d-none" data-kt-modal-bidding-type="crypto">
								<!--begin::Select2-->
								<select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
									<option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected="selected">Bitcoin</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Crypto type-->
						</div>
						<!--end::Input group-->
						<!--begin::Notice-->
						<!--begin::Notice-->
						<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
							<!--begin::Icon-->
							<i class="ki-outline ki-wallet fs-2tx text-primary me-4"></i>
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-semibold">
									<h4 class="text-gray-900 fw-bold">Top up funds</h4>
									<div class="fs-6 text-gray-700">Not enough funds in your wallet?
										<a href="utilities/modals/wizards/top-up-wallet.html" class="text-bolder">Top up wallet</a>.
									</div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
						<!--end::Notice-->
						<!--begin::Actions-->
						<div class="text-center">
							<button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">Cancel</button>
							<button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end:Form-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - New Target-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
										<div class="fw-semibold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
										<div class="fw-semibold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
										<div class="fw-semibold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
										<div class="fw-semibold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
										<div class="fw-semibold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
										<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
										<div class="fw-semibold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
										<div class="fw-semibold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
										<div class="fw-semibold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
										<div class="fw-semibold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
										<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
										<div class="fw-semibold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-semibold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--begin::Modal - Create Campaign-->
	<div class="modal fade" id="kt_modal_top_up_wallet" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-fullscreen p-9">
			<!--begin::Modal content-->
			<div class="modal-content modal-rounded">
				<!--begin::Modal header-->
				<div class="modal-header py-7 d-flex justify-content-between">
					<!--begin::Modal title-->
					<h2>Top Up Wallet</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column gap-5" id="kt_modal_top_up_wallet_stepper">
						<!--begin::Nav-->
						<div class="stepper-nav justify-content-center py-2">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Deposit Amount</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Currency</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Authentication</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Completed</h3>
							</div>
							<!--end::Step 4-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_top_up_wallet_stepper_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
										<!--begin::Title-->
										<h2 class="fw-bold d-flex align-items-center text-gray-900">Set Amount to Top Up
											<span class="ms-1" data-bs-toggle="tooltip" title="You will be charged the set amount from your selected payment option">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span>
										</h2>
										<!--end::Title-->
										<!--begin::Notice-->
										<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">
											<span class="required">Top Up Amount</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="top_up_amount" placeholder="" value="" autocomplete="off" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="required fw-semibold fs-6 mb-5">Currency Type</label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row row-cols-1 row-cols-md-2 g-5">
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="currency_type" value="dollar" id="kt_radio_buttons_2_option_1" checked="checked" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_1">
													<i class="ki-outline ki-dollar fs-3hx text-primary"></i>
													<span class="d-block fw-semibold text-start">
														<span class="text-gray-900 fw-bold d-block fs-3">Cash</span>
														<span class="text-muted fw-semibold fs-6">Top up wallet using cash from one of your saved payment options.</span>
													</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="currency_type" value="crypto" id="kt_radio_buttons_2_option_2" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_2">
													<i class="ki-outline ki-bitcoin fs-3hx text-primary"></i>
													<span class="d-block fw-semibold text-start">
														<span class="text-gray-900 fw-bold d-block fs-3">Crypto</span>
														<span class="text-muted fw-semibold fs-6">Top up wallet using a crypto currency.</span>
													</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Currency</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-6">If you need more info, please check
											<a href="#" class="link-primary">Top Up Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Dollar options-->
									<div class="" data-kt-modal-top-up-wallet-option="dollar">
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Select a payment method</label>
											<!--End::Label-->
											<!--begin::Row-->
											<div class="row row-cols-1 row-cols-md-2 g-5">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_0" checked="checked" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_0">
														<!--begin::Icon-->
														<img src="media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Card details-->
														<div class="d-flex align-items-start flex-column gap-3">
															<div class="d-flex align-items-center">
																<!--begin::Card name-->
																<span>Personal</span>
																<!--end::Card name-->
																<!--begin::Badge-->
																<div class="badge badge-primary ms-5">Primary</div>
																<!--end::Badge-->
															</div>
															<!--begin::Card number-->
															<div class="text-gray-900 fw-bold">**** 8742</div>
															<!--end::Card number-->
															<!--begin::Card expiry-->
															<div class="text-muted">exp 01/23</div>
															<!--end::Card expiry-->
														</div>
														<!--end::Card details-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_1" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_1">
														<!--begin::Icon-->
														<img src="media/svg/card-logos/visa.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Card details-->
														<div class="d-flex align-items-start flex-column gap-3">
															<div class="d-flex align-items-center">
																<!--begin::Card name-->
																<span>Family</span>
																<!--end::Card name-->
															</div>
															<!--begin::Card number-->
															<div class="text-gray-900 fw-bold">**** 1141</div>
															<!--end::Card number-->
															<!--begin::Card expiry-->
															<div class="text-muted">exp 05/24</div>
															<!--end::Card expiry-->
														</div>
														<!--end::Card details-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_2" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_2">
														<!--begin::Icon-->
														<img src="media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Card details-->
														<div class="d-flex align-items-start flex-column gap-3">
															<div class="d-flex align-items-center">
																<!--begin::Card name-->
																<span>Company</span>
																<!--end::Card name-->
															</div>
															<!--begin::Card number-->
															<div class="text-gray-900 fw-bold">**** 8839</div>
															<!--end::Card number-->
															<!--begin::Card expiry-->
															<div class="text-muted">exp 07/24</div>
															<!--end::Card expiry-->
														</div>
														<!--end::Card details-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Add new card-->
													<a href="utilities/modals/forms/new-card.html" class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100">
														<!--begin::Icon-->
														<i class="ki-outline ki-plus-circle fs-3hx text-primary"></i>
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Add New Card</div>
														<!--end::Label-->
													</a>
													<!--end::Add new card-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Dollar options-->
									<!--begin::Crypto options-->
									<div class="d-none" data-kt-modal-top-up-wallet-option="crypto">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Select a coin</label>
											<!--End::Label-->
											<!--begin::Row-->
											<div class="row row-cols-2 row-cols-md-4 g-5">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_0" checked="checked" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_0">
														<!--begin::Icon-->
														<img src="media/svg/coins/binance.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Binance</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_1" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_1">
														<!--begin::Icon-->
														<img src="media/svg/coins/bitcoin.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Bitcoin</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_2" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_2">
														<!--begin::Icon-->
														<img src="media/svg/coins/chainlink.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Chainlink</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_3" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_3">
														<!--begin::Icon-->
														<img src="media/svg/coins/coin.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Coin</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_4" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_4">
														<!--begin::Icon-->
														<img src="media/svg/coins/ethereum.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Ethereum</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_5" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_5">
														<!--begin::Icon-->
														<img src="media/svg/coins/filecoin.svg" alt="" class="w-50px" />
														<!--end::Icon-->
														<!--begin::Label-->
														<div class="fs-5 fw-bold">Filecoin</div>
														<!--end::Label-->
													</label>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Crypto options-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Authentication</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-6">If you need more info, please check
											<a href="#" class="link-primary">Top Up Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Secret key-->
									<div class="d-flex flex-column mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Secret Key
											<span class="ms-1" data-bs-toggle="tooltip" title="Please ensure that your secret key matches your saved image and keyword">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--end::Label-->
										<div class="d-flex align-items-center gap-5">
											<!--begin::Image-->
											<div class="symbol symbol-100px symbol-circle">
												<img src="media/avatars/300-11.jpg" alt="Secret Image" />
											</div>
											<!--end::Image-->
											<!--begin::Keyword-->
											<div class="fw-bold fs-5">my_secret_key</div>
											<!--end::Keyword-->
										</div>
									</div>
									<!--end::Secret key-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Enter Password
											<span class="ms-1" data-bs-toggle="tooltip" title="Please enter your password to authenticate the wallet top up">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></label>
										<!--End::Label-->
										<!--begin::Input-->
										<input type="password" class="form-control form-control-lg form-control-solid" name="top_up_password" placeholder="" value="" autocomplete="off" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-12 text-center">
										<!--begin::Title-->
										<h1 class="fw-bold text-gray-900">Successful Top Up!</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your latest top up!</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-center pb-20">
										<button id="kt_modal_top_up_wallet_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Top Up Wallet</button>
										<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Wallet</a>
									</div>
									<!--end::Actions-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img src="media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
											<i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--begin::Modal body-->
			</div>
		</div>
	</div>
	<!--end::Modal - Create Campaign-->
	<!--begin::Modal - Share & Earn-->
	<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-800px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y pt-0 pb-15">
					<!--begin::Wrapper-->
					<div class="mw-lg-600px mx-auto">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<!--begin::Title-->
							<h1 class="mb-3">Share & Earn</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
								<a href="#" class="link-primary fw-bold">Author Commision</a>.
							</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Input group-->
						<div class="mb-10">
							<!--begin::Title-->
							<h4 class="fs-5 fw-semibold text-gray-800">Share my referral link with friends</h4>
							<!--end::Title-->
							<!--begin::Title-->
							<div class="d-flex">
								<input id="kt_share_earn_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="https://keenthemes.com/?ref=skitechnology" />
								<button id="kt_share_earn_link_copy_button" class="btn btn-light fw-bold flex-shrink-0" data-clipboard-target="#kt_share_earn_link_input">Copy Link</button>
							</div>
							<!--end::Title-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="d-flex">
							<a href="#" class="btn btn-light w-100">
								<img alt="Logo" src="media/svg/social-logos/google.svg" class="h-15px me-3" />Import Contacts</a>
							<a href="#" class="btn btn-light w-100 mx-6">
								<img alt="Logo" src="media/svg/social-logos/facebook.svg" class="h-20px me-3" />Facebook</a>
							<a href="#" class="btn btn-light w-100">
								<img alt="Logo" src="media/svg/social-logos/twitter.svg" class="h-20px me-3" />Twitter</a>
						</div>
						<!--end::Actions-->
						<!--begin::Input group-->
						<div class="d-flex align-items-center mt-10">
							<!--begin::Label-->
							<div class="flex-grow-1">
								<span class="fs-6 fw-semibold text-gray-800 d-block">Adding Users by Team Members</span>
								<span class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</span>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Share & Earn-->
	<!--begin::Modal - Upgrade plan-->
	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="mb-3">Upgrade a Plan</h1>
						<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
						</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
												<div class="fw-semibold opacity-75">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
												<div class="fw-semibold opacity-75">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
												</div>
												<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
												<div class="fw-semibold opacity-75">Requet a custom license</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<a href="#" class="btn btn-sm btn-success">Contact Us</a>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_custom">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for corporations</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
							<!--begin::Indicator label-->
							<span class="indicator-label">Upgrade Plan</span>
							<!--end::Indicator label-->
							<!--begin::Indicator progress-->
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							<!--end::Indicator progress-->
						</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Upgrade plan-->
	<!--begin::Modal - View Users-->
	<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Browse Users</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
							<a href="#" class="link-primary fw-bold">Users Directory</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Users-->
					<div class="mb-15">
						<!--begin::List-->
						<div class="mh-375px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">smith@kpmg.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$23,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">melody@altbox.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$50,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">max@kt.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$75,900</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">sean@dellito.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$10,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">brian@exchange.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$20,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">mik@pex.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$9,300</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$15,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$23,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$45,800</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">dam@consilting.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$90,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">emma@intenso.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$5,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$70,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">robert@benko.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-gray-900">$45,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex justify-content-between">
						<!--begin::Label-->
						<div class="fw-semibold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - View Users-->
	<!--begin::Modal - Offer A Deal-->
	<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-1000px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header py-7 d-flex justify-content-between">
					<!--begin::Modal title-->
					<h2>Offer a Deal</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
						<!--begin::Nav-->
						<div class="stepper-nav justify-content-center py-2">
							<!--begin::Step 1-->
							<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Deal Type</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Deal Details</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Finance Settings</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Completed</h3>
							</div>
							<!--end::Step 4-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
							<!--begin::Type-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Type</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-15" data-kt-buttons="true">
										<!--begin::Option-->
										<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
											<!--begin::Input-->
											<input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<i class="ki-outline ki-profile-circle fs-3hx"></i>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4">
													<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Deal</span>
													<span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
											<!--begin::Input-->
											<input class="btn-check" type="radio" name="offer_type" value="2" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<i class="ki-outline ki-element-11 fs-3hx"></i>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4">
													<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate Deal</span>
													<span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
											<span class="indicator-label">Offer Details</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Type-->
							<!--begin::Details-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Details</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Customer</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
											<option></option>
											<option value="1" selected="selected">Keenthemes</option>
											<option value="2">CRM App</option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Deal Title</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Deal Description</label>
										<!--end::Label-->
										<!--begin::Label-->
										<textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
										<!--end::Label-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="required fs-6 fw-semibold mb-2">Activation Date</label>
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />
											<!--end::Datepicker-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="required fs-6 fw-semibold">Notifications</label>
												<div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
											</div>
											<!--end::Label-->
											<!--begin::Checkboxes-->
											<div class="d-flex">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-10">
													<!--begin::Input-->
													<input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-semibold">Email</span>
													<!--end::Label-->
												</label>
												<!--end::Checkbox-->
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-semibold">Phone</span>
													<!--end::Label-->
												</label>
												<!--end::Checkbox-->
											</div>
											<!--end::Checkboxes-->
										</div>
										<!--begin::Wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
											<span class="indicator-label">Financing</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Details-->
							<!--begin::Budget-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Finance</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
											<span class="required">Setup Budget</span>
											<span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-outline ki-bank fs-3 me-3&quot;&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Dialer-->
										<div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
											<!--begin::Decrease control-->
											<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
												<i class="ki-outline ki-minus-circle fs-1"></i>
											</button>
											<!--end::Decrease control-->
											<!--begin::Input control-->
											<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
											<!--end::Input control-->
											<!--begin::Increase control-->
											<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
												<i class="ki-outline ki-plus-circle fs-1"></i>
											</button>
											<!--end::Increase control-->
										</div>
										<!--end::Dialer-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
											<!--begin::Col-->
											<div class="col-md-6 col-lg-12 col-xxl-6">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
													<!--begin::Radio-->
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
														<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 col-lg-12 col-xxl-6">
												<!--begin::Option-->
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
													<!--begin::Radio-->
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio" name="finance_usage" value="2" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
														<span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
												<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
												<span class="form-check-label fw-semibold text-muted">Allowed</span>
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
											<span class="indicator-label">Build Team</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Budget-->
							<!--begin::Complete-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Created!</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-center pb-20">
										<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
										<a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
									</div>
									<!--end::Actions-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img src="media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Complete-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--begin::Modal body-->
			</div>
		</div>
	</div>
	<!--end::Modal - Offer A Deal-->
	<!--begin::Modal - Two-factor authentication-->
	<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
		<!--begin::Modal header-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header flex-stack">
					<!--begin::Title-->
					<h2>Choose An Authentication Method</h2>
					<!--end::Title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
					<!--begin::Options-->
					<div data-kt-element="options">
						<!--begin::Notice-->
						<p class="text-muted fs-5 fw-semibold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
						<!--end::Notice-->
						<!--begin::Wrapper-->
						<div class="pb-10">
							<!--begin::Option-->
							<input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
							<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
								<i class="ki-outline ki-setting-2 fs-4x me-4"></i>
								<span class="d-block fw-semibold text-start">
									<span class="text-gray-900 fw-bold d-block fs-3">Authenticator Apps</span>
									<span class="text-muted fw-semibold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
								</span>
							</label>
							<!--end::Option-->
							<!--begin::Option-->
							<input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
							<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
								<i class="ki-outline ki-message-text-2 fs-4x me-4"></i>
								<span class="d-block fw-semibold text-start">
									<span class="text-gray-900 fw-bold d-block fs-3">SMS</span>
									<span class="text-muted fw-semibold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
								</span>
							</label>
							<!--end::Option-->
						</div>
						<!--end::Options-->
						<!--begin::Action-->
						<button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
						<!--end::Action-->
					</div>
					<!--end::Options-->
					<!--begin::Apps-->
					<div class="d-none" data-kt-element="apps">
						<!--begin::Heading-->
						<h3 class="text-gray-900 fw-bold mb-7">Authenticator Apps</h3>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="text-gray-500 fw-semibold fs-6 mb-10">Using an authenticator app like
							<a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
							<a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
							<a href="https://authy.com/download/" target="_blank">Authy</a>, or
							<a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
							<!--begin::QR code image-->
							<div class="pt-5 text-center">
								<img src="media/misc/qr.png" alt="" class="mw-150px" />
							</div>
							<!--end::QR code image-->
						</div>
						<!--end::Description-->
						<!--begin::Notice-->
						<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
							<!--begin::Icon-->
							<i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-semibold">
									<div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
										<div class="fw-bold text-gray-900 pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div>
									</div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
						<!--begin::Form-->
						<form data-kt-element="apps-form" class="form" action="#">
							<!--begin::Input group-->
							<div class="mb-10 fv-row">
								<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex flex-center">
								<button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
								<button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Options-->
					<!--begin::SMS-->
					<div class="d-none" data-kt-element="sms">
						<!--begin::Heading-->
						<h3 class="text-gray-900 fw-bold fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
						<!--end::Heading-->
						<!--begin::Notice-->
						<div class="text-muted fw-semibold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
						<!--end::Notice-->
						<!--begin::Form-->
						<form data-kt-element="sms-form" class="form" action="#">
							<!--begin::Input group-->
							<div class="mb-10 fv-row">
								<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex flex-center">
								<button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
								<button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::SMS-->
				</div>
				<!--begin::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal header-->
	</div>
	<!--end::Modal - Two-factor authentication-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
								<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-semibold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
												<div class="fw-semibold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
												<div class="fw-semibold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
												<div class="fw-semibold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
												<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
												<div class="fw-semibold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
												<div class="fw-semibold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
												<div class="fw-semibold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
												<div class="fw-semibold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-semibold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="plugins/global/plugins.bundle.js"></script>
	<script src="js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="js/custom/account/settings/signin-methods.js"></script>
	<script src="js/custom/account/settings/profile-details.js"></script>
	<script src="js/custom/account/settings/deactivate-account.js"></script>
	<script src="js/custom/pages/user-profile/general.js"></script>
	<script src="js/custom/utilities/modals/create-campaign.js"></script>
	<script src="js/custom/utilities/modals/new-target.js"></script>
	<script src="js/custom/utilities/modals/new-card.js"></script>
	<script src="js/custom/utilities/modals/bidding.js"></script>
	<script src="js/custom/utilities/modals/top-up-wallet.js"></script>
	<script src="js/widgets.bundle.js"></script>
	<script src="js/custom/widgets.js"></script>
	<script src="js/custom/apps/chat/chat.js"></script>
	<script src="js/custom/utilities/modals/share-earn.js"></script>
	<script src="js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="js/custom/utilities/modals/offer-a-deal/type.js"></script>
	<script src="js/custom/utilities/modals/offer-a-deal/details.js"></script>
	<script src="js/custom/utilities/modals/offer-a-deal/finance.js"></script>
	<script src="js/custom/utilities/modals/offer-a-deal/complete.js"></script>
	<script src="js/custom/utilities/modals/offer-a-deal/main.js"></script>
	<script src="js/custom/utilities/modals/two-factor-authentication.js"></script>
	<script src="js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>