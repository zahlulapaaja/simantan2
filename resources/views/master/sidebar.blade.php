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