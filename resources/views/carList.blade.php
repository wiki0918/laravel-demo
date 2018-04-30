
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')
<div class="blog">
    <div class="container">
        <div class="row" id='title'>
            <?php foreach($carList as $car): ?>
            <div class='col-md-4 col-sm-4'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <a href='/booking/car/{{$car['id']}}'>
                            <div id='img' style='background-image: url({{$car['picture']}});'></div>
                        
                        <div class='calendar'>
                            <p>預約</p>
                            <span></span>
                        </div>
                        
                            <h3>{{$car['name']}}</h3>
                        </a>
                        <div class='blog-border'></div>
                        <p>{{$car['description']}}</p>
                    </div>
                </div>
            </div>
            <?php endforeach;?> 
        </div>
        <center><?php echo $cars->links(); ?></center>
    </div>
</div>
@stop