@extends('layouts.app')
@section('content')

<!--about-->
<div class="about spacing">
    <div class="container">
        <div class="section-title text-center mt-5">
            <span style="text-align: center;font-size:30px; color:       #6b3f98;">
                Our Courses</span>
        </div>


        @include('partials.courses')
    </div>
</div>
@include('partials.partners')
@endSection
<!--//about-->
