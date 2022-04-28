@extends('layouts.app')
@section('content')
<div class="students mt-5 spacing  ">
    <div class="row">
        <div class="col-md-6 col-sm-12 students-left wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="section-title">
                <span style="text-align: center;">Beyond Training</span>
                <span style="text-align: center;color:       #6b3f98;font-size:30px">About Us</span>
            </div>

            <p style="color:black">Uwezo College is owned by Uwezo Kenya ltd, which is registered under the
                companies act. The college is registered with the ministry of education as a middle
                level college – TVETA /PRIVATE/TVC/0015/2018
                The college offers various technical and business courses examined by KNEC,
                KASNEB and NITA. It is located in Machakos town and draws students mainly
                from Kenya students across the Country. </p>
        </div>
        <div class="col-md-6 col-sm-12 students-right wow fadeInRight animated" data-wow-delay=".5s">
            <div class="row">
                <div class="col-6  my-2 history-grid-image">
                    <img src="images/uu1.JPG" class="img-responsive zoom-img my-2" alt="">
                </div>
                <div class="col-6  my-2 history-grid-image"> <img src="images/gd2.jpeg" class="img-responsive zoom-img"
                        alt="">
                </div>
                <div class="col-6 my-2 history-grid-image"> <img src="images/uu4.JPG" class="img-responsive zoom-img"
                        alt="">
                </div>
                <div class="col-6 my-2 history-grid-image"> <img src="images/uu3.JPG" class="img-responsive zoom-img"
                        alt="">
                </div>
            </div>



        </div>
    </div>



    <!--//students-->
    <!--best-->

    <div class="mx-4 mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 best-left wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="section-title">
                    <span style="text-align: center;font-size:30px; color:       #6b3f98; ">Latest News</span>

                </div>
                <div class="bes-top  mt-2">
                    <div class="bes-lft">
                        <div class="history-grid-image">
                            <img src="images/uprayer.jpg" class="img-responsive zoom-img" alt="">
                        </div>
                    </div>
                    <div class="bes-rgt">
                        <h4><a href="https://blog.uwezocollege.ac.ke/2022/02/10/321/">Thanking God for what Uwezo
                                College
                                has achieved so far</a></h4>
                        <span> 2022/02/10</span>
                        <p style="color:black">When you begin everything with God, everything works for you. We
                            conducted
                            our Term 1 Mass and Fr...</p>
                    </div>

                </div>
                <div class="bes-top1 mt-2">
                    <div class="bes-lft">
                        <div class="history-grid-image">
                            <img src="images/uu5.JPG" class="img-responsive zoom-img" alt="">
                        </div>
                    </div>
                    <div class="bes-rgt">
                        <h4><a href=https://blog.uwezocollege.ac.ke/2022/02/03/a-section-of-uwezo-college-hair-dressing-students-in-action/>A
                                section of Uwezo College Hair Dressing students in action</a> </h4> <span>
                                2022/02/03</span>
                                <p style="color:black">Uwezo College situated in Machakos town is one of the best
                                    technical
                                    and business courses in Kenya duly registered with TVETA...</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-6">
                @include('partials.testimonials')
            </div>
        </div>

        <div>


        </div>

    </div>


    <!--best-->
    <!--course-->

    <!-- Team Section Begin -->
    <section class="spacing mx-4">
        <div class=" row">

            <div class="section-title text-center">
                <span style="text-align: center;font-size:30px; color:#6b3f98;">
                    Why Join Us</span>

            </div>

        </div>
        <div class="row ">

            <div class=" row justify-content-center">
                <div class="col-md-4 course-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="section-title">
                        <span>Why Join Us</span>
                    </div>
                    <div class="history-grid-image">
                        <img src="images/uwezo5.jpeg" class="img-responsive zoom-img" alt="">
                    </div>
                    <p style="color:black;font-size:0.9rem">We aim to provide holistic training that
                        would produce dependable professionals, strong in body, mind, spirit and
                        character that will be agents of change in society.</p>
                </div>
                <div class="col-md-4 course-left animated wow fadeInUp animated animated" data-wow-duration="1200ms"
                    data-wow-delay="500ms">
                    <div class="section-title">
                        <span>Affordability & Scholarships</span>
                    </div>

                    <div class="history-grid-image">
                        <img src="images/gd2.jpeg" class="img-responsive zoom-img" alt="">
                    </div>
                    <p style="color:black;font-size:0.9rem">In addition to having an affordable fee structure, Uwezo
                        college offers
                        scholarships,
                        students can apply though the <a href=" http://uwezowetufoundation.org/">Uwezo Wetu Foundation
                        </a> website.</p>
                </div>
                <div class="col-lg-4 wow fadeInRight animated justify-content-center align-content-center "
                    data-wow-delay=".5s">
                    <div class="section-title px-4">
                        <span>Our Core-Values</span>
                    </div>
                    {{-- <h3></h3> --}}
                    <ul style="list-style: none" class="px-4">
                        <li><a><span>&#8594 </span>Teamwork</a></li>
                        <li><a><span>&#8594 </span>Integrity </a></li>
                        <li><a><span>&#8594 </span>God centeredness</a></li>
                        <li><a><span>&#8594 </span>Professionalism </a></li>
                        <li><a><span>&#8594 </span>Hard work</a></li>
                        <li><a><span>&#8594 </span>Discipline</a></li>
                        <li><a><span>&#8594 </span>Mutual respect</a></li>

                    </ul>
                    <p>Apply through our elearning <a href="https://elearning.uwezocollege.ac.ke/">Uwezo College
                            E-learning</a></p>

                </div>
            </div>


        </div>

    </section>

    <div class="mt-5">
        @include('partials.partners')
    </div>
</div>
@endSection
