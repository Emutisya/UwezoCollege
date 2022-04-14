<footer class="footer mt-5">
    <div class="container ">
        <div class="row justify-content-between text-center">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a class='' href="#">
                            <img class='mx-auto' src="{{ asset('images/logo2.png') }}" width="100" height="100"
                                alt=""></a>
                    </div>
                    <div class="footer__social">
                        @include('partials.socials')
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
            <div class="row col-lg-6 col-md-6 col-sm-12 ">
                <div class="col-lg-4 col-md-6 col-sm-12" style="font-size: 20px">
                    <div class="footer__widget">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/courses">Our Courses</a></li>
                            <li> <a href="http://blog.uwezocollege.ac.ke/">Our Blog</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer__widget">
                        <h6>Associations</h6>
                        <ul>
                            <li><a href="https://elearning.uwezocollege.ac.ke/" target="_blank">E-learning</a></li>
                            <li><a href="http://uwezowetufoundation.org/" target="_blank">Uwezo Wetu Foundation </a>
                            </li>
                            <li><a href="https://www.education.go.ke/index.php/about-us/state-departments/vocational-and-technical-education/tvet-authority"
                                    target="_blank">TVET </a></li>
                            <li><a href="https://www.knec.ac.ke/" target="_blank">KNEC </a></li>
                            <li><a href="https://www.nita.go.ke/" target="_blank">NITA </a></li>
                            <li><a href="https://kuccps.net/" target="_blank">KUCCPS</a></li>
                            <li><a href="https://kasneb.or.ke/" target="_blank">KASNEB </a></li>
                            <li><a href="https://kyeop.go.ke/" target="_blank">KYEOP </a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer__address">
                        <h6>Get In Touch</h6>
                        <p>Virtual office</p>
                        <ul>
                            <li>info@uwezocollege.ac.ke</li>
                            <li>0713-554-972 / 0724-390-322</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-white">
        <div class="text-center">
            <p style="padding:0; margin:0;">Copyright ©
                <script>
                    document.write(new Date().getFullYear());

                </script> UwezoCollegeKE
            </p>
        </div>

    </div>
</footer>
