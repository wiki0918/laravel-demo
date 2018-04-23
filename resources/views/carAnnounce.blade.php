
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')

<!-- content -->
<div id="content">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="shop-content">
                    <div class="shop-list">
                        <div class="grid-item2 mb30">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="list-content">
                                        <div class="list-down row">
                                            <form class='form-horizontal' name='market' action='/car/save' method='post' enctype='multipart/form-data' onsubmit='return check()'>
                                                @csrf
                                                <input type='hidden' name='store_id' value='138'>
                                                <input type='hidden' name='purchase_id' value='34259'>
                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-6'>
                                                        <label>車廠與車款<span>*</span></label>
                                                        <input type='text' id='name' placeholder='' name='name' value=''><br>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <label>圖片(URL)<span style='font-weight: bold;'>*</span></label>
                                                        <input type='text' id='picture' placeholder='http://' name='picture' value=''><br>
                                                    </div>
                                                </div>
                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-6'>
                                                        <label>說明<span>*</span></label>
                                                        <input type='text' id='description' placeholder='' name='description' value=''><br>
                                                    </div>
                                                    <div class='col-md-6'>

                                                    </div>

                                                </div>
                                                <div class='second-row col-md-12'>
                                                    <div class='col-md-6' id='show_alert'>
                                                        <?php if($errors->first()): ?>
                                                            <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class='col-md-2'>
                                                    </div>
                                                    <div class='col-md-4'>
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

            </div><!-- col-12 -->
        </div><!-- ROW -->




    </div>
    <!-- End shopmain -->
</div>
<!-- End content -->
@stop