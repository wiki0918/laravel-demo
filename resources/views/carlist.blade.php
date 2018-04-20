
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')
<div class="blog">
    <div class="container">
        <div class="row" id='title'>
            <?php for($i=1;$i<7;$i++): ?>
            <div class='col-md-4 col-sm-4'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <a href='event/?a=1060'>
                            <div id='img' style='background-image: url(https://www.ttautoguide.com/2k16fs/wp-content/uploads/2016/10/hrv-b.jpg);'></div>
                        </a>
                        <div class='calendar'>
                            <p>22</p>
                            <span>Apr</span>
                        </div>
                        <a href='event/?a=1060'>
                            <h3>【石頭湯計畫】3-4月份公眾場次</h3>
                        </a>
                        <div class='blog-border'></div>
                        <p>偶爾當你匆匆經過台北車站，瞥見那些或躺、或坐的身影，會心生害怕，還是不忍直視？「呷飽未？」...</p>
                    </div>
                </div>
            </div>
            <?php endfor;?> 
        </div>
    </div>
</div>
@stop