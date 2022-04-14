@extends('layouts.app')
@section('content')

<div class="contact">
    <div class="container">
        <div class="contact-top heading">

            <div class="section-title">
                <span style="font-size:30px;color:#6b3f98;text-align:center;">Contact Us</span>

            </div>

        </div>
        <div class="contact-text row">
            <div class="col-md-9 ">
                <form>
                    <div class="form-row row">
                        <div class="form-group col-6">

                            <input type="text" class="form-control" id="name" placeholder="First Name">
                        </div>
                        <div class="form-group col-6">

                            <input type="text" class="form-control" id="name" placeholder="Last Name">
                        </div>

                        <div class="form-group mt-4">

                            <input type="email" class="form-control" id="inputAddress" placeholder="Email">
                        </div>
                        <div class="form-group mt-4">
                            <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-12 m-2 p-2 form-group mx-auto " style="margin-bottom: 30px; ">
                            <button type='submit' class="c-animated-btn">CONTACT US</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 contact-left">
                <div class="address">
                    <div class="section-title">
                        <span style=" ">Contact Details</span>

                    </div>
                    <p>0713-554-972 / 0724-390-322</p>

                    <p>
                        Email: <a href="mailto:info@uweocollege.co.ke">info@uwezocollege.co.ke</a></p>

                    <p> KIE Building, Nthula Rd </p>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--contact-->
<div class="map">

    <iframe src="https://maps.google.com/maps?q=Uwezo%20College%20Machakos%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
        style="border:0"></iframe>
</div>
@endSection
