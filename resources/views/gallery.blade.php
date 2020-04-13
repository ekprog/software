@extends('layouts.app')

@section('content')
    <main>
        <!--
              Nadir
              header
              OUR GALLERY
              To Know About Us
            -->
        <section id="gallery" class="text-center">
            <h2>OUR GALLERY</h2>
            <span></span>
            <p class="text-muted font-italic">
                <small>Student gallery of the year past graduated passouts</small>
            </p>
            <div id="gallery-container" class="d-flex flex-wrap">
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/01.jpg')}}"
                        alt="01"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/02.jpg')}}"
                        alt="02"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/03.jpg')}}"
                        alt="03"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/04.jpg')}}"
                        alt="04"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/05.jpg')}}"
                        alt="05"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/06.jpg')}}"
                        alt="06"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/07.jpg')}}"
                        alt="07"
                        class="w-100"/><span></span
                    ></a>
                <a href="#"
                ><img
                        src="{{ asset('./img/gallery/08.jpg')}}"
                        alt="08"
                        class="w-100"/><span></span
                    ></a>
            </div>
            <div id="brands" class="py-3">
                <a href="#"><img src="{{ asset('./img/gallery/clogo_1.png')}}'" alt="Logo 1"/></a>
                <a href="#"><img src="{{ asset('./img/gallery/clogo_2.png')}}" alt="Logo 2"/></a>
                <a href="#"><img src="{{ asset('./img/gallery/clogo_3.png')}}" alt="Logo 3"/></a>
                <a href="#"><img src="{{ asset('./img/gallery/clogo_4.png')}}" alt="Logo 4"/></a>
            </div>
        </section>
    </main>
@endsection
