@extends('layouts.app')
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>
</head>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="col-md-5 pull-left">
                        @foreach($interventions as $intervention)
                            <p>{{ $intervention->type->name }} - {{ $intervention->type->price }} RON</p>
                        @endforeach
                        <p><b>Total: <span id="amt">{{ $total }}</span> RON</b></p>
                    </div>

                    <div class="col-md-5">
                        <div id="dropin-container"></div>
                        <button class="btn btn-success" id="submit-button">Request payment method</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
     var button = document.querySelector('#submit-button');

     braintree.dropin.create({
         authorization: "{{ Braintree_ClientToken::generate() }}",
         container: '#dropin-container'
     }, function (createErr, instance) {
         button.addEventListener('click', function () {
             instance.requestPaymentMethod(function (err, payload) {
                 $.get('{{ route('payment.process') }}', {payload, amount: $('#amt').text() }, function (response) {
                     if (response.success) {
                         alert('Payment successfull!');
                     } else {
                         console.log(response);
                         alert('Payment failed');
                     }
                 }, 'json');
             });
         });
     });
    </script>
@stop
