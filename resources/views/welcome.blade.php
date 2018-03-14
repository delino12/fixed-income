@extends('layouts.skin')

{{-- Title section --}}
@section('title')
    FMDQ | Cavidel
@endsection

{{-- contents --}}
@section('contents')
    <div class="bond-form">
        <form method="post" onsubmit="return calculateBonds()">
            <div class="container">
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Amount (Principal)</span>
                        <input type="text" class="form-control" id="f-value" placeholder="12,000,000.00" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Coupon Rate (%)</span>
                        <input type="text" class="form-control" id="c-rate" placeholder="10.8%" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Year (yr)</span>
                        <input type="text" class="form-control" id="n" placeholder="5" required="">
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="col-md-6">             
                    <textarea class="form-control" id="equation" rows="5" placeholder="using the equation where Fv=?, r=? and y=? "></textarea>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Calculate Bond</button>
                    </div>
                </div>
                <div class="col-md-6">             
                    <div class="solution"></div>
                </div>
            </div>
        </form>
    </div>
@endsection

{{-- footer --}}
@section('footer')
    <script type="text/javascript">
        function calculateBonds() {
            // body...
            let token   = '{{ csrf_token() }}';
            let value   = $("#f-value").val(); // face value
            let rate    = $("#c-rate").val(); // coupon rate
            let years   = $("#n").val(); // years

            // data to ajax
            let data = {
                _token:token,
                value:value,
                rate:rate,
                years:years
            };

            // post data
            $.post('/calculate/bonds/p-value', data, function(data, textStatus, xhr) {
                /*optional stuff to do after success */
                console.log(data);

                /* iterate through array or object */
                $(".solution").html(`
                    First Year
                    <table class="table">
                        <tr>
                            <td>Bond value<td>
                            <td>`+data.results.present_value+`</td>
                        </tr>
                        <tr>
                            <td>Coupon amount<td>
                            <td>`+data.results.coupon_amount+`</td>
                        </tr>
                    </table>
                `);
            });

            // void form
            return false;
        }
    </script>
@endsection