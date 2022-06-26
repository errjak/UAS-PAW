@extends('layout2')

@section('content')
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center">
            <h1>Grow your potention with Us.</h1>
            <h3>We are here to help you to grow your potention.</h3>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>You are logged in as {{ Auth::user()->level }}</p>
                </blockquote>
            </figure>
        </div>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>

@endsection