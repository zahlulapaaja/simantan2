@extends('layout.master')
@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content app-content-stretch">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
								<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
							</div>
							<!--end::Search-->
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
							@can('view_chart_on_dashboard')
							<div class="w-100 mw-150px">
								<!--begin::Select2-->
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
									<option></option>
									<option value="all">All</option>
									<option value="published">Published</option>
									<option value="scheduled">Scheduled</option>
									<option value="inactive">Inactive</option>
								</select>
								<!--end::Select2-->
							</div>
							@endcan
							@can('view_dashboard')
							<!-- ini coba-coba aja ges -->
							<!--begin::Add product-->
							<a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Product</a>
							<!--end::Add product-->
							@endcan
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
							<thead>
								<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
										</div>
									</th>
									<th class="min-w-200px">Product</th>
									<th class="text-end min-w-100px">SKU</th>
									<th class="text-end min-w-70px">Qty</th>
									<th class="text-end min-w-100px">Price</th>
									<th class="text-end min-w-100px">Rating</th>
									<th class="text-end min-w-100px">Status</th>
									<th class="text-end min-w-70px">Actions</th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02865005</span>
									</td>
									<td class="text-end pe-0" data-order="16">
										<span class="fw-bold ms-3">16</span>
									</td>
									<td class="text-end pe-0">148</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04511009</span>
									</td>
									<td class="text-end pe-0" data-order="45">
										<span class="fw-bold ms-3">45</span>
									</td>
									<td class="text-end pe-0">72</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/3.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04837008</span>
									</td>
									<td class="text-end pe-0" data-order="28">
										<span class="fw-bold ms-3">28</span>
									</td>
									<td class="text-end pe-0">231</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01230001</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">59</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/5.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01145003</span>
									</td>
									<td class="text-end pe-0" data-order="34">
										<span class="fw-bold ms-3">34</span>
									</td>
									<td class="text-end pe-0">193</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03569006</span>
									</td>
									<td class="text-end pe-0" data-order="25">
										<span class="fw-bold ms-3">25</span>
									</td>
									<td class="text-end pe-0">138</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01452006</span>
									</td>
									<td class="text-end pe-0" data-order="12">
										<span class="fw-bold ms-3">12</span>
									</td>
									<td class="text-end pe-0">13</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/8.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04368003</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">66</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/9.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04601004</span>
									</td>
									<td class="text-end pe-0" data-order="39">
										<span class="fw-bold ms-3">39</span>
									</td>
									<td class="text-end pe-0">174</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/10.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03311009</span>
									</td>
									<td class="text-end pe-0" data-order="27">
										<span class="fw-bold ms-3">27</span>
									</td>
									<td class="text-end pe-0">138</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/11.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01413009</span>
									</td>
									<td class="text-end pe-0" data-order="47">
										<span class="fw-bold ms-3">47</span>
									</td>
									<td class="text-end pe-0">278</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/12.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04801007</span>
									</td>
									<td class="text-end pe-0" data-order="32">
										<span class="fw-bold ms-3">32</span>
									</td>
									<td class="text-end pe-0">98</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/13.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03198009</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">90</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/14.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04555004</span>
									</td>
									<td class="text-end pe-0" data-order="4">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">4</span>
									</td>
									<td class="text-end pe-0">186</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/15.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04171006</span>
									</td>
									<td class="text-end pe-0" data-order="33">
										<span class="fw-bold ms-3">33</span>
									</td>
									<td class="text-end pe-0">72</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/16.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02495008</span>
									</td>
									<td class="text-end pe-0" data-order="12">
										<span class="fw-bold ms-3">12</span>
									</td>
									<td class="text-end pe-0">69</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/17.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02210003</span>
									</td>
									<td class="text-end pe-0" data-order="20">
										<span class="fw-bold ms-3">20</span>
									</td>
									<td class="text-end pe-0">84</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/18.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04698002</span>
									</td>
									<td class="text-end pe-0" data-order="25">
										<span class="fw-bold ms-3">25</span>
									</td>
									<td class="text-end pe-0">263</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/19.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04651007</span>
									</td>
									<td class="text-end pe-0" data-order="21">
										<span class="fw-bold ms-3">21</span>
									</td>
									<td class="text-end pe-0">121</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/20.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04811003</span>
									</td>
									<td class="text-end pe-0" data-order="8">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">8</span>
									</td>
									<td class="text-end pe-0">267</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/21.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03979003</span>
									</td>
									<td class="text-end pe-0" data-order="38">
										<span class="fw-bold ms-3">38</span>
									</td>
									<td class="text-end pe-0">192</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/22.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01457008</span>
									</td>
									<td class="text-end pe-0" data-order="30">
										<span class="fw-bold ms-3">30</span>
									</td>
									<td class="text-end pe-0">99</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/23.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03250009</span>
									</td>
									<td class="text-end pe-0" data-order="13">
										<span class="fw-bold ms-3">13</span>
									</td>
									<td class="text-end pe-0">245</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/24.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03854001</span>
									</td>
									<td class="text-end pe-0" data-order="19">
										<span class="fw-bold ms-3">19</span>
									</td>
									<td class="text-end pe-0">276</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/25.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01489002</span>
									</td>
									<td class="text-end pe-0" data-order="17">
										<span class="fw-bold ms-3">17</span>
									</td>
									<td class="text-end pe-0">294</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/26.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01242003</span>
									</td>
									<td class="text-end pe-0" data-order="25">
										<span class="fw-bold ms-3">25</span>
									</td>
									<td class="text-end pe-0">90</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/27.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03596008</span>
									</td>
									<td class="text-end pe-0" data-order="21">
										<span class="fw-bold ms-3">21</span>
									</td>
									<td class="text-end pe-0">214</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/28.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01797009</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">12</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/29.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04336008</span>
									</td>
									<td class="text-end pe-0" data-order="31">
										<span class="fw-bold ms-3">31</span>
									</td>
									<td class="text-end pe-0">144</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/30.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03675002</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">13</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/31.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02663009</span>
									</td>
									<td class="text-end pe-0" data-order="1">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">1</span>
									</td>
									<td class="text-end pe-0">19</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/32.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02260002</span>
									</td>
									<td class="text-end pe-0" data-order="12">
										<span class="fw-bold ms-3">12</span>
									</td>
									<td class="text-end pe-0">248</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/33.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03507008</span>
									</td>
									<td class="text-end pe-0" data-order="23">
										<span class="fw-bold ms-3">23</span>
									</td>
									<td class="text-end pe-0">100</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/34.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02816002</span>
									</td>
									<td class="text-end pe-0" data-order="45">
										<span class="fw-bold ms-3">45</span>
									</td>
									<td class="text-end pe-0">118</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/35.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04123003</span>
									</td>
									<td class="text-end pe-0" data-order="18">
										<span class="fw-bold ms-3">18</span>
									</td>
									<td class="text-end pe-0">254</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/36.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02980003</span>
									</td>
									<td class="text-end pe-0" data-order="39">
										<span class="fw-bold ms-3">39</span>
									</td>
									<td class="text-end pe-0">114</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/37.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04848005</span>
									</td>
									<td class="text-end pe-0" data-order="15">
										<span class="fw-bold ms-3">15</span>
									</td>
									<td class="text-end pe-0">98</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/38.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01736001</span>
									</td>
									<td class="text-end pe-0" data-order="6">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">6</span>
									</td>
									<td class="text-end pe-0">73</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/39.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04478002</span>
									</td>
									<td class="text-end pe-0" data-order="13">
										<span class="fw-bold ms-3">13</span>
									</td>
									<td class="text-end pe-0">202</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/40.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01330003</span>
									</td>
									<td class="text-end pe-0" data-order="0">
										<span class="badge badge-light-danger">Sold out</span>
										<span class="fw-bold text-danger ms-3">0</span>
									</td>
									<td class="text-end pe-0">71</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/41.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01806009</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">180</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/42.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02644007</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">69</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/43.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03950004</span>
									</td>
									<td class="text-end pe-0" data-order="14">
										<span class="fw-bold ms-3">14</span>
									</td>
									<td class="text-end pe-0">69</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/44.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01298008</span>
									</td>
									<td class="text-end pe-0" data-order="50">
										<span class="fw-bold ms-3">50</span>
									</td>
									<td class="text-end pe-0">114</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/45.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03967008</span>
									</td>
									<td class="text-end pe-0" data-order="24">
										<span class="fw-bold ms-3">24</span>
									</td>
									<td class="text-end pe-0">162</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/46.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01151002</span>
									</td>
									<td class="text-end pe-0" data-order="48">
										<span class="fw-bold ms-3">48</span>
									</td>
									<td class="text-end pe-0">200</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/47.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01609001</span>
									</td>
									<td class="text-end pe-0" data-order="40">
										<span class="fw-bold ms-3">40</span>
									</td>
									<td class="text-end pe-0">108</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/48.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01905002</span>
									</td>
									<td class="text-end pe-0" data-order="46">
										<span class="fw-bold ms-3">46</span>
									</td>
									<td class="text-end pe-0">25</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/49.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03504003</span>
									</td>
									<td class="text-end pe-0" data-order="29">
										<span class="fw-bold ms-3">29</span>
									</td>
									<td class="text-end pe-0">152</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/50.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03922003</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">276</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-outline ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-outline ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Products-->
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
@endsection