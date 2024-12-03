<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data User</h1>

    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users" style="width: 100%" border="1">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">User</th>
                <th class="min-w-125px">NIK</th>
                <th class="min-w-125px">Last login</th>
                <th class="min-w-125px">Two-step</th>
                <th class="min-w-125px">Joined Date</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @foreach ($data as $d)
            <tr>
                <td class="d-flex align-items-center">
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <a href="{{ route('user.detail', ['id' => $d->id]) }}" class="text-gray-800 text-hover-primary mb-1">{{ $d->name }}</a>
                        <span>{{ $d->email}}</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <td>{{ $d->ktp->nik ?? '' }}</td>
                <td>
                    <div class="badge badge-light fw-bold">20 mins ago</div>
                </td>
                <td>
                    <div class="badge badge-light-success fw-bold">Enabled</div>
                </td>
                <td>05 May 2023, 5:30 pm</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>