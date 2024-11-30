@extends('layout.master')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
@endpush
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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Users List (Server Side)</h1>
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
                            <li class="breadcrumb-item text-muted">User Management</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Users</li>
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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="serverside">
                            <!-- id before : kt_table_users -->
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#clientside .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">User</th>
                                    <th class="min-w-125px">Role</th>
                                    <th class="min-w-125px">Last login</th>
                                    <th class="min-w-125px">Two-step</th>
                                    <th class="min-w-125px">Joined Date</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
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
<script src="js/custom/apps/user-management/users/list/table.js"></script>
<script src="js/custom/apps/user-management/users/list/export-users.js"></script>
<script src="js/custom/apps/user-management/users/list/add.js"></script>
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
<script src="js/custom/utilities/modals/users-search.js"></script>
@endpush


@push('scripts')
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        loadData();
    });

    function loadData() {
        $('#serverside').DataTable({
            processing: true,
            pagination: true,
            responsive: true,
            serverSide: true,
            searching: true,
            ordering: false,
            ajax: {
                url: "{{ route('serverside') }}",
            },
            columns: [{
                    data: 'checklist',
                    name: 'checklist',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'role',
                    name: 'role',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: '2step',
                    name: '2step',
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'action',
                    name: 'action',
                },
            ]
        });
    }
</script>
@endpush

@endsection