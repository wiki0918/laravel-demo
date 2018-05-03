
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')
<script type="text/javascript" src="{{ URL::asset('js/booking_date.js') }}"></script>
<!-- content -->

<div id="content">

    <div class="container">

        <div class="row" align="center">

            <div class='col-md-12'>
                <h3>租車日期
                    <select class=''  id='reserve_date' name='reserve_date'>
                        <?php foreach ($dateList as $date) { ?>
                            <option>{{$date}}</option>
                        <?php } ?>

                    </select>
                </h3>
            </div> 
            <div class="col-md-2">


            </div>

            <div class="col-md-8">
                <table class="table"  align="center">
                    <thead>
                        <tr>
                            <th scope="col">汽車</th>
                            <th scope="col">預約人</th>
                        </tr>
                    </thead>
                    <tbody id="booking">

                    </tbody>
                </table>
            </div>
            <div class="col-md-2">


            </div>
        </div>

    </div>

</div>
<!-- End content -->
@stop