@include('common/header')
<main>
    <style>
        .fa-circle-check{
            font-size: 200px;
            color: #088264;
            padding: 10px;
        }
        #payments{
            margin: 4% 30% 3%;
        }
        a{
            color: #fff;
        }
        a:hover{
            color: #fff !important;
        }
        .btn:hover{
            background-color: #088264;
        }
    </style>
    
    <div id = "payments" class = "text-center">
        <i class="fa-sharp fa-solid fa-circle-check"></i>
        <h2>Payment Successful!</h2>
        <h6>Hurray! Your payment has been made <span class = "green-color">successfully</span>.</h6>
        <div class = "btn text-center">
            <a href = "{{ URL::to('/myTransactions') }}">View My Payments</a>
        </div>
    </div>
</main>