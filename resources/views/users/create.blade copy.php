@extends('layout.master')
@section('content')
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
						<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Create User (Lupakan formatnya)</h1>
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
							<li class="breadcrumb-item text-muted">eCommerce</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-500 w-5px h-2px"></span>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">Catalog</li>
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
				<!--begin::Form-->
				<form id="adduser" class="form d-flex flex-column flex-lg-row" action="{{ route('user.store') }}" method="post">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Thumbnail</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
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
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px"></div>
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
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin:::Tabs-->
						<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::General options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>General</h2>
											</div>
										</div>
										<!--end::Card header-->
										<form action="{{ route('user.store') }}" met>

											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="required form-label">Email</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" name="email" class="form-control mb-2" placeholder="Email" />
													<!--end::Input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">A Email is required and recommended to be unique.</div>
													<!--end::Description-->
												</div>
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="required form-label">Username</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="username" class="form-control mb-2" placeholder="Username" />
													<!--end::Input-->
												</div>
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="required form-label">Password</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="password" name="password" class="form-control mb-2" placeholder="********" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card header-->
										</form>

									</div>
									<!--end::General options-->
								</div>
							</div>
							<!--end::Tab pane-->
							<!--begin::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::Inventory-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Inventory</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">SKU</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product SKU.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Barcode</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="barcode" class="form-control mb-2" placeholder="Barcode Number" value="" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product barcode number.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Quantity</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div class="d-flex gap-3">
													<input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="" />
													<input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" />
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product quantity.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="form-label">Allow Backorders</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div class="form-check form-check-custom form-check-solid mb-2">
													<input class="form-check-input" type="checkbox" value="" />
													<label class="form-check-label">Yes</label>
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Inventory-->
									<!--begin::Variations-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Variations</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="" data-kt-ecommerce-catalog-add-product="auto-options">
												<!--begin::Label-->
												<label class="form-label">Add Product Variations</label>
												<!--end::Label-->
												<!--begin::Repeater-->
												<div id="kt_ecommerce_add_product_options">
													<!--begin::Form group-->
													<div class="form-group">
														<div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
															<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																<!--begin::Select2-->
																<div class="w-100 w-md-200px">
																	<select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
																		<option></option>
																		<option value="color">Color</option>
																		<option value="size">Size</option>
																		<option value="material">Material</option>
																		<option value="style">Style</option>
																	</select>
																</div>
																<!--end::Select2-->
																<!--begin::Input-->
																<input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
																<!--end::Input-->
																<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																	<i class="ki-outline ki-cross fs-1"></i>
																</button>
															</div>
														</div>
													</div>
													<!--end::Form group-->
													<!--begin::Form group-->
													<div class="form-group mt-5">
														<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
															<i class="ki-outline ki-plus fs-2"></i>Add another variation</button>
													</div>
													<!--end::Form group-->
												</div>
												<!--end::Repeater-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Variations-->
									<!--begin::Shipping-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Shipping</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Input-->
												<div class="form-check form-check-custom form-check-solid mb-2">
													<input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
													<label class="form-check-label">This is a physical product</label>
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Shipping form-->
											<div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">Weight</label>
													<!--end::Label-->
													<!--begin::Editor-->
													<input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="" />
													<!--end::Editor-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row">
													<!--begin::Label-->
													<label class="form-label">Dimension</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div class="d-flex flex-wrap flex-sm-nowrap gap-3">
														<input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="" />
														<input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="" />
														<input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="" />
													</div>
													<!--end::Input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Shipping form-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Shipping-->
									<!--begin::Meta options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Meta Options</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label">Meta Tag Title</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label">Meta Tag Description</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div>
												<!--begin::Label-->
												<label class="form-label">Meta Tag Keywords</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
													<code>,</code>between each keyword.
												</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Meta options-->
								</div>
							</div>
							<!--end::Tab pane-->
						</div>
						<!--end::Tab content-->
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
								<span class="indicator-label">Save Changes</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
					<!-- </form> -->
					<!--end::Form-->
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
@push('scripts')
<!-- <script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script> -->
<!-- <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="assets/js/custom/utilities/modals/new-target.js"></script>
<script src="assets/js/custom/utilities/modals/new-card.js"></script>
<script src="assets/js/custom/utilities/modals/bidding.js"></script>
<script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/share-earn.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script> -->
@endpush
@endsection