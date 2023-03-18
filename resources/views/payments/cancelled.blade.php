@include('common/header')
<main>
    <style>
        .fa-times-circle-o{
            font-size: 200px;
            padding: 10px;
            color:  #fb5656;
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
        <i class="fa fa-times-circle-o" aria-hidden="true"></i>
        <h2>Payment cancelled!</h2>
        <h6>Your payment has been <span>cancelled</span></h6>
        <div class = "btn cancel text-center">
            <a href = "{{ URL::to('/payments') }}">Try Again</a>
        </div>
    </div>
</main>