@include('common/header')
<head>
    <link href = "//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel = "stylesheet">
</head>
<body>

<h3 style="text-align:center;">View Pickup Times</h3>

    <table id="pickupView">
        <thead>
        
            <th>Pickup ID No.</th>
            <th>Pickup Location</th>
            <th>Pickup Date</th>
            <th>Client</th>

        </thead>
        <tbody>
            @foreach($pickupTimes as $pickupTime )
                <tr>
                    <td>{{$pickupTime->id}}</td>
                    <td>{{$pickupTime->pickupLocation}}</td>
                    <td>{{$pickupTime->pickupDateTime}}</td>
                    <td>{{$pickupTime->users->firstName. ' '.$pickupTime-> users->lastName}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src = "//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function (){
        $('#pickupView').DataTable();
    });
</script>
