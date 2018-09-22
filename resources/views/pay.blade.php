@extends('layout.app')

@section('content')
    <body>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="paypal-form">
        <input type="hidden" name="business" value="support@essaycom.org">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="item_name" id="paypal-topic" value="{{session('topic')}}">
        <input type="hidden" name="amount" id="paypal-price" value="{{session('amount')}}">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" id = "paypal-return" value="http://127.0.0.1:8000/{{session('order')}}/sucess">
        <input type="hidden" name="cancel_return" value="http://127.0.0.1:8000/order/failed">


        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>


    <script src="js/jquery-2.1.4.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.paypal-form').submit();
        });
    </script>
    </body>
    </html>

@endsection