
@extends('layouts.master')

@section('title', 'Laravel - Demo')

@section('content')

<!-- content -->
<div class="contact">
    <div class="container" id='title'>

        <div class="row">
            <div class="col-md-6 touch">
            </div>
            <div class="col-md-6">
                <h2>會員登入</h2>
                <form id="contact-form"  name="login" action="/admin/signup" method="post">
                    @csrf
                    
                    <input name="user" id="" type="text" placeholder="帳號" required>

                    <input name="password" id="" type="password"  placeholder="密碼" required>
                    
                    <div id="msg" class="message">測試帳號/密碼：guest / guest</div>

                    <button class="update" id="recaptcha-submit" type='submit'>登入</button>

                </form>
            </div>
            <!-- end contactfort -->

        </div>
    </div>

</div>

@stop