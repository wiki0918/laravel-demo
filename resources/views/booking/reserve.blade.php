
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')

<!-- content -->
<div id="content">

    <div class="container">

        <div class="row">
            <div class="">
            </div>
            <div class="col-md-6">
                <div class="blog-post mb50">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src='{{$carData['picture']}}'>
                            <div class='calendar'>
                                <p>{{$carData['name']}}</p><span></span>
                            </div>									
                        </div>
                    </div>
                </div>

                <div class="orders second-order mb20">
                    <h6>租車資訊</h6>
                    <div class="order-box">
                        <p>{{$carData['description']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="check-aside">
                    <div class="mb20">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-content">
                                    <h6>預約租車</h6>
                                    <br>
                                    <div class="list-content">
                                        <div class="list-down row">
                                            <form class='form-horizontal' name='booking' action='/booking/save' method='post' enctype='multipart/form-data'>
                                                @csrf
                                                <input type='hidden' name='car_id' value='{{$carData['id']}}'>
                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-12'>
                                                        <label>你的名字<span>*</span></label>
                                                        <input type='text' id='name' placeholder='' name='customer' value='' required=""><br>
                                                    </div>
                                                    <div class='col-md-12'>
                                                        <label>租車日期<span style='font-weight: bold;'>*</span></label>
                                                        <select class='select'  id='reserve_date' name='reserve_date'>
                                                            <?php foreach ($dateList as $date) { ?>
                                                                <option>{{$date}}</option>
                                                            <?php } ?>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-6' id='show_alert'>
                                                        <?php if ($errors->first()): ?>
                                                            <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class='col-md-6'>
                                                        <button class='update' style='width:100%'' type='submit' >確認</button>
                                                    </div>
                                                </div>
                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-8'>

                                                    </div>
                                                    <div class='col-md-4'><br>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End aside -->
        </div>

    </div>
</div>
</div>




</div>
<!-- End shopmain -->
</div>
<!-- End content -->
@stop