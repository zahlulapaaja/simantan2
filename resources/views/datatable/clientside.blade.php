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
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Users List (Client Side)</h1>
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
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="clientside">
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
                                @foreach ($data as $d)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <!-- <a href="apps/user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                            </a> -->
                                            <img src="{{Storage::url('avatar-user/'.$d->image)}}" alt="gambar">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">{{ $d->name }}</a>
                                            <span>{{ $d->email}}</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <td>Analyst</td>
                                    <td>
                                        <div class="badge badge-light fw-bold">20 mins ago</div>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td>05 May 2023, 5:30 pm</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('user.edit', ['id' => $d->id]) }}" class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form class="menu-link px-3" method="POST" action="{{ route('user.delete', ['id' => $d->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="all: unset" type="submit" data-kt-users-table-filter="delete_row">Delete</button>
                                                </form>
                                                <!-- <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a> -->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                @endforeach
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
        $('#clientside').DataTable();
    });
</script>
@endpush

@endsection