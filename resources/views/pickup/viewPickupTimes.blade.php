@include('common/header')
<head>
    <link href = "//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel = "stylesheet">
</head>
<body>

<h3 style="text-align:center;">View Pickup Times</h3>

    <table id="pickupView">
        <thead>
<<<<<<< HEAD
        <tr>
=======
        
>>>>>>> c3c6467b50a007122e6b5d55985f210dc4f89d41
            <th>Pickup ID No.</th>
            <th>Pickup Location</th>
            <th>Pickup Date</th>
            <th>Client</th>
<<<<<<< HEAD
        </tr>
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
=======

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
>>>>>>> c3c6467b50a007122e6b5d55985f210dc4f89d41
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
