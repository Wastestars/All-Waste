@include('common/header')
<main>
<div class="loginform" style ="margin-top: 10%">
    <form class="form" action = "{{url('/payments')}}" method = "POST">
        @csrf
        <h3 class="title">Hello {{Auth::user()->firstName.' '.Auth::user()->lastName}}</h3>
        
        <p>Thank you for scheduling your waste collection with us. </p>
        <p>Kindly click the button below to proceed to payment.</p>

        <h6>Garbage Collection Fee: 1.00 USD</h6>
        <input hidden name="amount" value = 1>

        <br>
        <div class="button">
            <input type="submit" name="payments" class="btn" value="Pay with Paypal">
        </div>  
    </form>
</main>
@include('common/footer')