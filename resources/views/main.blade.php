@extends('layouts.app')
@section('content')
<div class="students mt-5 spacing  ">
    <div class="row">
        <div class="col-md-6 col-sm-12 students-left wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="section-title">
                <span style="text-align: center;">Beyond Training</span>
                <span style="text-align: center;color:       #6b3f98;font-size:30px">About Us</span>
            </div>

            <p style="color:black; font-size:16px">Uwezo College is owned by Uwezo Kenya ltd, which is registered under
                the
                companies act. The college is registered with the ministry of education as a middle
                level college – TVETA /PRIVATE/TVC/0015/2018.
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


    <div class="row mx-4 mt-5 mb-4">
        <div style="font-size: 0.8rem" class="col-lg-4 col-md-12 col-sm-12 best-left wow fadeInLeft animated"
            data-wow-delay=".5s">
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
                    <h6><a href="https://blog.uwezocollege.ac.ke/2022/02/10/321/">Thanking God for what Uwezo
                            College
                            has achieved so far</a></h6>
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
                    <h6><a href=https://blog.uwezocollege.ac.ke/2022/02/03/a-section-of-uwezo-college-hair-dressing-students-in-action/>A
                            section of Uwezo College Hair Dressing students in action</a> </h6> <span>
                            2022/02/03</span>
                            <p style="color:black">Uwezo College situated in Machakos town is one of the best
                                technical
                                and business courses in Kenya duly registered with TVETA...</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div>
            <div class="section-title text-center">
                <span style="text-align: center;font-size:30px; color:       #6b3f98;">
                    Student Testimonials</span>
                <p>Our overall objective is to unlock the potential within each student so that they can perform
                    at
                    their highest standard in the service of humanity.</p>
            </div>


            <div style="font-size: 0.8rem" class="row col-lg-8 col-md-12 col-sm-12 best-left wow fadeInLeft animated">
                {{-- @include('partials.testimonials') --}}
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="/eric"><img src="images/eric.jpeg" class="img-responsive zoom-img" alt="" />
                        <div class="section-title mt-2">
                            <span> Eric Kilonzo</span>

                        </div>

                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="/flora"><img src="images/flora1.jpeg" class="img-responsive zoom-img" alt="" />
                        <div class="section-title mt-2">
                            <span> Flora Mutuku</span>

                        </div>

                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="/caleb"><img src="images/caleb.jpeg" class="img-responsive zoom-img" alt="" />
                        <div class="section-title mt-2">
                            <span> Caleb Kimuyu</span>

                        </div>



                    </a>
                </div>
            </div>
        </div>
    </div>






    <!--best-->
    <!--course-->

    <br><br>
    <!-- Team Section Begin -->
    <div class="spacing mx-4 mt-sm-4 " style="background-color:#f1efef">
        <div class=" row">

            <div class="section-title text-center">
                <span style="text-align: center;font-size:30px; color:#6b3f98;"> <br>
                    Why Join Us </span>
            </div>

        </div>


        <div class=" row justify-content-center ">
            <div class="col-lg-4 col-sm-12 course-left wow fadeInLeft animated text-center" data-wow-delay=".5s">
                <div class="section-title">
                    <span>Why Join Us</span>

                </div>
                <br>
                <div class="history-grid-image">
                    <img src="images/uwezo5.jpeg" class="img-responsive zoom-img" alt="">
                </div>
                <p style="color:black;font-size:0.9rem">We aim to provide holistic training that
                    would produce dependable professionals, strong in body, mind, spirit and
                    character that will be agents of change in society.</p>
            </div>
            <div class="col-lg-4 col-sm-12 course-left animated wow fadeInUp animated animated"
                data-wow-duration="1200ms" data-wow-delay="500ms">
                <div class="section-title text-center">
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
            <div class="col-lg-4 col-sm-12 wow fadeInRight animated justify-content-center align-content-center "
                data-wow-delay=".5s">
                <div class="section-title px-4 text-center">
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

    <div class="mt-5 align-items-center">
        @include('partials.partners')
    </div>

    <br>
    <br>
</div>
@endSection
