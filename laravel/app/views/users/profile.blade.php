@extends("layouts.master")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>ยินดีต้อนรับ</h1>
            <hr>
            @foreach($resuft as $value)
            <h5> ID :: {{ $value->id }} </h5>
            <h5> Username :: {{ $value->username }} </h5>
            <h5> EMAIL :: {{ $value->email }} </h5>
            @endforeach
            <hr>
        </div>
    </div>
</div>
@stop