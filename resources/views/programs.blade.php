@extends('layouts.app')

@section('content')
    <main>
        <!--
            Maan
            Discover Our Programs
            SITE ANNOUNCEMENTS
            footer
          -->
        <!--Section: Group of Programs cards-->

        <section id="programs_title">
            <h2>Discover Our Branches</h2>
            <div id="edu">
                <hr>
                <i class="fa fa-graduation-cap" style="color: green"></i>
                <hr>
            </div>
            <p>You Can join our courses by coming to the nearest branch to you.</p>
        </section>

        <section id="programs" class="wrapper">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <!--Card group-->
                    <div class="card-group">

                        <!--Card 1-->
                        <div class="card card-personal mb-2">

                            <!--Card image-->
                            <div class="view">
                                <img class="forimage" src="{{asset('img/courses/üsküdar.jpg')}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->

                                <h5 class="card-title">Our branch in Üsküdar</h5>


                                <!--Text--><br>
                                <p>
                                <p>addres :</p>
                                <p>phone</p>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--End Card 1-->

                        <!--Card 2-->
                        <div class="card card-personal mb-2">

                            <!--Card image-->
                            <div class="view">
                                <img class="forimage" src="img/courses/karakoy.jpg" alt="Card image cap">

                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->

                                <h5 class="card-title">Our branch in Karakoy</h5>


                                <!--Text--><br>
                                <p>
                                <p>addres :</p>
                                <p>phone</p>
                            </div>
                            <!--Card content-->

                        </div>
                        <!--End Card 2-->

                        <!--Card 3-->
                        <div class="card card-personal mb-2">

                            <!--Card image-->
                            <div class="view">
                                <img class="forimage" src="{{asset('img/courses/beşiktaş.jpg')}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->

                                <h5 class="card-title">Our branch in Beşiktaş</h5>


                                <!--Text--><br>
                                <p>
                                <p>addres :</p>
                                <p>phone</p>
                            </div>
                            <!--Card content-->

                        </div>
                        <!--End Card 3-->
                        <!--Card 4-->
                        <div class="card card-personal mb-2">

                            <!--Card image-->
                            <div class="view">
                                <img class="forimage" src="{{asset('img/courses/ataşehir.jpg')}}" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->

                                <h5 class="card-title">Our branch in Ataşehir</h5>


                                <!--Text--><br>
                                <p>
                                <p>addres :</p>
                                <p>phone</p>
                            </div>
                            <!--Card content-->

                        </div>
                        <!--End Card 4-->
                        <!--Card 5-->
                        <div class="card card-personal mb-2">

                            <!--Card image-->
                            <div class="view">
                                <img class="forimage" src="{{asset('img/courses/taksim.jpg')}}" alt="Card image cap">

                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->

                                <h5 class="card-title">Our branch in Taksim</h5>

                                <br>
                                <p>addres :</p>
                                <p>phone</p>
                            </div>
                            <!--Card content-->

                        </div>
                        <!--End Card 5-->
                    </div>
                    <!--Card group-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Group of personal cards-->
        <section id="teachers">
            <h2>Our Teachers</h2>
            <hr>
            <ul class="list-unstyled wrapper">
                <li class="media">
                    <img class="d-flex mr-3" src="{{asset('img/ammar.jpg')}}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Ammar Sammour</h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                    </div>
                </li>
                <li class="media my-4">
                    <img class="d-flex mr-3" src="{{asset('img/hakan.png')}}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Hakan Yildiz</h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>

                    </div>
                </li>
                <li class="media my-4">
                    <img class="d-flex mr-3" src="{{asset('img/jaime.jpg')}}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Jaime Mikush </h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>

                    </div>
                </li>
                <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min1.jpg"
                         alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-secondary"> </i>
                        <i class="fa fa-star text-secondary"> </i>

                    </div>
                </li>
                <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min2.jpg"
                         alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Tom Brown</h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-secondary"> </i>

                    </div>
                </li>
                <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min3.jpg"
                         alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-weight-bold">Natalie Doe</h5>
                        <!--Review-->
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-success"> </i>
                        <i class="fa fa-star text-secondary"> </i>
                        <i class="fa fa-star text-secondary"> </i>
                    </div>
                </li>
            </ul>
        </section>
    </main>
@endsection
