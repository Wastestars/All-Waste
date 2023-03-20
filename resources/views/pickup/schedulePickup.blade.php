@include('common/header')

<body>

<div class="recyclableFrm" style="height:80vh;">
    <form action="/schedulePickup" method="POST" enctype="multipart/form-data" class="form">
    @csrf
        <h1 class="title">Schedule Garbage Pickup</h1>

        <br>
        <div class="inputContainer">
            <input type="text" name="pickupLocation" class="input" placeholder="Enter the location" required>
            <label for="" class="label">Location</label><br><br>
        </div>
        <br>

        <div class="inputContainer">
            <input type="datetime-local" name="pickupDateTime" class="input" placeholder="Enter the dateTime" required>
            <label for="" class="label">Date and Time</label>
        </div>
        <br>
        <input type="text" name="user" value="{{auth()->user()}}" hidden>
        <div class="button">
            <input type="submit" name="pickup" class="btn" value="Submit" style = "background-color: #008374; color: #fff">
        </div>
    </form>
</div>
</body>
@include('common/footer')




