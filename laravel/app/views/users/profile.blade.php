@extends("layouts.masterProfile")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>ยินดีต้อนรับ {{Auth::user()->name}}</h1>
            
            {{Auth::user()->email}}
        </div>
    </div>
</div>
@stop