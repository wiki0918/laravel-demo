
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')

<!-- content -->
<div id="content">

    <div class="container">

        <div class="row">
            <table class="table"  align="center">
                <thead>
                    <tr>
                        <th scope="col">租車日期</th>
                        <th scope="col">汽車</th>
                        <th scope="col">預約人</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookinglist as $key=>$booking) { ?>
                    <tr>
                        <td align="center">{{$booking['reserve_date']}}</td>
                        <td align="center">{{$booking['car_name']}}</td>
                        <td align="center">{{$booking['customer']}}</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <center><?php echo $bookings->links(); ?></center>
        </div>

    </div>

</div>
<!-- End content -->
@stop