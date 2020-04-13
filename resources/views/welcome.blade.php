@extends('layouts.app')

@section('content')
    <main>
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('./img/banner1image.jpg')}}" alt="First slide">
                        <div class="carousel-caption manel">


                            <h5>Welcome to "studysoon" language schools</h5>
                            <button type="button" class="btn btn-outline-secondary">read more</button>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('./img/banner2image.jpg')}}" alt="Second slide">
                        <div class="carousel-caption manel">
                            <h5>One language, one person </h5><h5> two languages, two persons.</h5>
                            <button type="button" class="btn btn-outline-secondary">read more</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('./img/banner3image.jpg')}}" alt="Third slide">
                        <div class="carousel-caption manel">
                            <h5>Learn a language. Open your world.</h5>
                            <p>Get the language skills, cultural understanding and confidence to open up your world with
                                us</p>
                            <button type="button" class="btn btn-outline-secondary">read more</button>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="secondone">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="{{asset('./img/instagram-1-image.jpg')}}" alt="Lights" style="width:100%">
                        <div class="caption">
                            <h5>Find centers in your area</h5>
                            <p>Check out the worldwide network of studysoon language schools and sign up for the class
                                of
                                your choice today.</p>
                            <br>
                            <button type="button" class="btn btn-outline-secondary">read more</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="{{asset('./img/instagram-4-image.jpg')}}" alt="Nature" style="width:100%">
                        <div class="caption">

                            <h5>Test your language skills</h5>
                            <p>Take our free placement test to define the skill level of your English, Turkish, French,
                                Spanish or Italian.</p>
                            <br>
                            <button type="button" class="btn btn-outline-secondary">read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="{{asset('./img/instagram-2-image.jpg')}}" alt="Fjords"
                             style='width:252px; height: 172px;'>
                        <div class="caption">

                            <h5>Reach the nearest branch to you</h5>
                            <p>
                                you can also come to our branch and receive live lesson training, reach the nearest
                                branch
                                to you.</p>
                            <br>
                            <button type="button" class="btn btn-outline-secondary">read more</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="{{asset('./img/instagram-3-image.jpg')}}" alt="Fjords" style="width:100%">
                        <div class="caption">
                            <h5>Study online whenever you want</h5>
                            <p>Our various e-learning programs allow you to be as flexible as you want to be </p>
                            <br>
                            <button type="button" class="btn btn-outline-secondary">read more</button>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
