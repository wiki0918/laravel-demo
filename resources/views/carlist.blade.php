
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')
<div class="blog">
    <div class="container">
        <div class="row" id='title'>
            <?php foreach($carlist as $car): ?>
            <div class='col-md-4 col-sm-4'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <a href='event/?a=1060'>
                            <div id='img' style='background-image: url({{$car['pic']}});'></div>
                        </a>
                        <div class='calendar'>
                            <p>22</p>
                            <span>Apr</span>
                        </div>
                        <a href='event/?a=1060'>
                            <h3>{{$car['name']}}</h3>
                        </a>
                        <div class='blog-border'></div>
                        <p>{{$car['description']}}</p>
                    </div>
                </div>
            </div>
            <?php endforeach;?> 
        </div>
    </div>
</div>
@stop