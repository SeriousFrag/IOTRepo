<!DOCTYPE html>
<html>
<head>
    <title>Device Status</title>
    <style>
        .center {
            text-align: center;
            margin: 0 auto; /* Optional: To center horizontally */
        }
    </style>
</head>
<body>
    @foreach ($devices as $device )
    @if ($device->active != 1)
    <div class="col-md-4 center">
        <div class="card">
            <div class="card-header" style="text-align: center; background-color: yellow; color: black;">
                <h4>{{ $device->device_id }}</h4>
            </div>
            <div class="card-body">
                <div style="text-align: center; font-size: 20px; font-weight: bold;">
                    <span>{{ $device->active ? '🟢' : '❌' }}</span><br> <span style="font-size: 20px; ">{{ $device->last_seen }}</span>
                </div>
            </div>
        </div>
    </div>
        {{-- <a>{{ $device->device_id }}</a>
        <a>{{ $device->active ? '🟢' : '❌' }}</a>
        <a>{{ $device->last_seen }}</a> --}}
    @else
    <div class="col-md-4 center">
        <div class="card">
            <div class="card-header" style="text-align: center; background-color: yellow; color: black;">
                <h4>{{ $device->device_id }}</h4>
            </div>
            <div class="card-body">
                <div style="text-align: center; font-size: 20px; font-weight: bold;">
                    <span>{{ $device->active ? '🟢' : '❌' }}</span><br> <span style="font-size: 20px; ">Now</span>
                </div>
            </div>
        </div>
    </div>
        {{-- <a>{{ $device->device_id }}</a>
        <a>{{ $device->active ?'🟢' : '❌' }}</a>
        <a>Now</a> --}}
    @endif
        
    @endforeach
    {{-- <table>
        <thead>
            <tr>
                <th>Device ID</th>
                <th>Status</th>
                <th>Last Seen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            @if ($device->active != 1)
            <tr>
                <td>{{ $device->device_id }}</td>
                <td>{{ $device->active ? 'Active' : 'Inactive' }}</td>
                <td>{{ $device->last_seen }}</td>
            </tr>
            @else
            <tr>
                <td>{{ $device->device_id }}</td>
                <td>{{ $device->active ? 'Active' : 'Inactive' }}</td>
                <td>Now</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table> --}}
</body>
</html>
