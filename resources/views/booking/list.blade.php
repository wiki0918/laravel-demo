
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')

<!-- content -->
<div id="content">

    <div class="container">

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">預約日期</th>
                        <th scope="col">汽車</th>
                        <th scope="col">預約人</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $key=>$booking) { ?>
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$booking['reserve_date']}}</td>
                        <td>{{$booking['car_name']}}</td>
                        <td>{{$booking['customer']}}</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- End content -->
@stop