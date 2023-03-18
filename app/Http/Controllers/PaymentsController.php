<?php

namespace App\Http\Controllers;
use Omnipay\Omnipay;
use App\Models\Payment;
use Illuminate\Http\Request;
use Auth;

class PaymentsController extends Controller
{
    public function index(){
        return view('payments/payments');
    }
    private $gateway;
    //setup paypal
    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    //make payment using paypal
    public function pay(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    //Processes successful paypal payment
    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            //Transaction details
            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->transaction_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                if (Auth::check()){
                    $payment->paid_by = Auth::user()->id;

                    $payment->save();
                }
                return redirect('/paymentSuccess')->with('message', 'Payment is Successful');
            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return redirect('/cancelpayment')->with('message', 'Payment declined');
        }
        
    }
    //redirect upon successful payment
    public function paymentSuccess(){
        return view('payments/success');
    }

    //redirect upon error on payment
    public function errorOccured()
    {
        return redirect('/cancelPayment')->with('message', 'User declined the payment');
    }

    //cancel payment
    public function cancelPayment(){
        return view('payments/cancelled');
    }

    //view my transactions
    public function myTransactions(){
        $transactions = Payment::all()->where('paid_by', Auth::user()->id);
        return view('payments/transactions', ['transactions'=>$transactions]);
    }

    //view all transactions
    public function viewAllPayments(){
        $transactions = Payment::all();
        return view('payments/transactions', ['transactions'=>$transactions]);
    }
}
