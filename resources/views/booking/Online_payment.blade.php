@extends('layouts.temp')


  <script
    src="https://www.paypal.com/sdk/js?client-id=AT4Ga3T2fw7EwoPh3yIW1Qm0Wt-9vhj7bC45bEMKEcGwv5fjIF03DpysprcoxZgmjn5LvwPv8aKPZBua">
  </script>
  
  
  <script
    src="https://www.paypal.com/sdk/js?client-id=AT4Ga3T2fw7EwoPh3yIW1Qm0Wt-9vhj7bC45bEMKEcGwv5fjIF03DpysprcoxZgmjn5LvwPv8aKPZBua">
  </script>


@section('content')
<div  class="row">
      <div  class="col-sm-1" id="formboder"></div>
      <div  class="col-sm-1" id=""></div>
      <div  class="col-sm-8 card" id="">
        
          <h4 id="topic"><br> Payment details</h4>
          <br>
          <br>

          <h5 id="subtopic">Terms of booking & cancellation policy</h5>

          <p><ul><li>This payment will be reduced from customer's final payment.This is only an advance for your reservation.</li></p>

          <p><li>This rate is non-refundable and cannot be changed or cancelled. If you do choose to change or cancel this booking you will not be refunded any of the payment.</li></p>

          <p><li>You can pay via online using your paypal account</li></p><br></ul>
          <h5 id="subtopic">Terms of Booking</h5>

          <p><ul><li>By clicking "Paypal button", you agree you have read and accept our Terms and Conditions and Privacy Policy</ul></li>

          </p>
          <br>
          <br>
      </div>
      <div  class="col-sm-1" id=""></div>
      <div  class="col-sm-1" id="formboder"></div>
</div>


<div>

  </div>

  <div  class="row">
      <div  class="col-sm-1" id="formboder"></div>
      <div  class="col-sm-1" id=""></div>
      <div  class="col-sm-8" id="">
        <br><br>



          <div id="paypal-button-container">
        <script>
          paypal.Buttons({
            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{
                  amount: {
                    value: '0.01'
                  }
                }]
              });
            },
            onApprove: function(data, actions) {
              // Capture the funds from the transaction
              return actions.order.capture().then(function(details) {
                // Show a success message to your buyer
              @foreach( $details as $date)
                window.location.href = "{!!  route('client', [
                                                'checkid' => $date->checkid,
                                                'startdate' => $date->startdate,
                                                'enddate' => $date->enddate,  ] ) ;  !!}";
              @endforeach
              });
            } 
          }).render('#paypal-button-container');
        </script>
        </div>
</div>
<div  class="col-sm-1" id=""></div>
      <div  class="col-sm-1" id="formboder"></div>
  </div>
@endsection



