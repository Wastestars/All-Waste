<head>
    @include('common/header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href = "//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel = "stylesheet">
</head>
<body>

<h3 style="text-align:center;">View Pickup Times</h3>

    <table id="pickupView">
        <tr>
            <th>Pickup ID No.</th>
            <th>Pickup Location</th>
            <th>Pickup Date and Time</th>
            <th>Client</th>

        </tr>
        @foreach($pickupTimes as $pickupTime )
            <tr>
                <td>{{$pickupTime->id}}</td>
                <td>{{$pickupTime->pickupLocation}}</td>
                <td>{{$pickupTime->pickupDateTime}}</td>
                <td>{{$pickupTime->users->firstName. ' '.$pickupTime-> users->lastName}}</td>
            </tr>
        @endforeach
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src = "//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function (){
        $('#pickupView').DataTable();
    });
</script>
