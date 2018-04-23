
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
                                    <div class="order-box">
                                        <p>...</p>
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