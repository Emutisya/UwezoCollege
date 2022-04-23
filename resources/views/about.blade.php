@extends('layouts.app')
@section('content')

<div class="spacing about " style="">

    <div class=" row about-container">

        <div class="section-title mt-5">
            <span style="color:  #6b3f98;font-size:30px;text-align:center; ">About Uwezo College</span>

        </div>
        <div class="section-title mt-5 ">
            <span style="text-align: center;">UWEZO COLLEGE || BEYOND TRAINING</span>

        </div>
        <div class="col-md-6 about-left zlign-center ">
            <div class="history-grid-image ">
                <img src="images/uwezo5.jpeg" class="img-responsive zoom-img  " alt="">
            </div>
        </div>

        <div class="col-md-6 about-right">
            <p>Uwezo College is owned by Uwezo Kenya ltd, which is registered under the
                companies act. The college is registered with the ministry of education as a middle
                level college – TVETA /PRIVATE/TVC/0015/2018</p>
            <p>The college offers various technical and business courses examined by KNEC,
                KASNEB and NITA. It is located in Machakos town and draws students mainly
                from Kenya students across the Country. Students are recruited through various
                marketing techniques but some are able to register with us as Self sponsored
                students through KUCCP website.</p>

            {{-- <p>The college motto is beyond training as it aims to provide holistic training that
                would produce dependable professionals, strong in body, mind, spirit and
                character that will be agents of change in society. The overall objectives is to
                unlock the potential within each student so that they can perform at the highest
                standard in the service of humanity.</p> --}}
        </div>
        <div class="clearfix"></div>
        <div class="about-top row mt-5">
            <div class="section-title">
                <span style="font-size:30px;color:#6b3f98;text-align:center; "> Areas of training</span>

            </div>
            @include('partials.courses')
        </div>
    </div>
</div>


@include('partials.partners')

@endSection
