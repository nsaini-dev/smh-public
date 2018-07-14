@extends('layouts/default')

@section('content')
<main class="home01">
    
    {{----------------------------------------------------------------------}}
    {{-- BANNER --}}
    {{----------------------------------------------------------------------}}

    <section class="section banner">
        <div id="mainBanner" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                @foreach($pageData['banner']['slides'] as $index=>$slide)
                    <li data-target="#mainBanner" data-slide-to="{{ $index }}" class="{{ $slide['slideStatusClass'] }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($pageData['banner']['slides'] as $slide)
                    <div class="carousel-item {{ $slide['slideStatusClass'] }}" style="background-image: url('../images/banner/{{$slide['image']}}');" >
                        <div class="banner-slogans-wrap">
                            @foreach($slide['slogans'] as $slogan)
                                <h1 class="banner-slogan"> {{$slogan}} </h1> 
                                <div class="banner-slogan-divider"> </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- WHO WE ARE --}}
    {{----------------------------------------------------------------------}}

    <section class="section default who-we-are text-center">
        <div class="container">
            @foreach($pageData['who_we_are'] as $section)

            {{-- START --}}

                <div class="section-header">
                    <h1 class="section-heading">{{ $section['heading'] }}</h1>
                </div>

                <div class="section-body">
                    <p>{{ $section['description'] }}</p>
                </div>

            {{-- END --}}            

            @endforeach
        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- OUR OBJECTIVE --}}
    {{----------------------------------------------------------------------}}

    <section class="section default our-objective">
        <div class="container">
            @foreach($pageData['our_objective'] as $section)
            
            {{-- START --}}

                <div class="section-header">
                    <h1 class="section-heading">{{ $section['heading'] }}</h1>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col">
                            <p>{{ $section['description'] }}</p>
                        </div>
                        <div class="col-sm-5">
                            <div class="image">
                                <img src="../images/misc/village-man-work-01.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            {{-- END --}}

            @endforeach
        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- WHAT WE DO --}}
    {{----------------------------------------------------------------------}}

    <section class="section default what-we-do text-center">
        <div class="container">
            @foreach($pageData['what_we_do'] as $section) 

            {{-- START --}}

                <div class="section-header">
                    <h1 class="section-heading">{{ $section['heading'] }}</h1>
                </div>

                <div class="section-body">
                    <div class="row">
                        @foreach($section['blocks'] as $card)
                            <div class="col-sm-6">
                                <div class="mcard">
                                    <div class="mcard-icon font-icon">  
                                        <i class="la la-{{ $card['icon'] }}"></i>
                                    </div>
                                    <div class="mcard-title"> {{ $card['title'] }} </div>
                                    <div class="mcard-description"> {{ $card['description'] }} </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            {{-- END --}}    

            @endforeach
        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- GET INVOLVED --}}
    {{----------------------------------------------------------------------}}

    <section class="section default get-involved">
        <div class="container">
            @foreach($pageData['get_involved'] as $section)

            {{-- START --}}

                <div class="section-header text-center">
                    <h1 class="section-heading">{{ $section['heading'] }}</h1>
                </div>

                <div class="section-body text-center">
                    @foreach($section['blocks'] as $card)
                        <div class="mcard">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="mcard-icon font-icon">  
                                        <i class="la la-{{ $card['icon'] }}"></i>
                                    </div>
                                </div>
                                <div class="col">
                                <div class="mcard-info">
                                    <div class="mcard-title"> {{ $card['title'] }} </div>
                                    <div class="mcard-description"> {{ $card['description'] }} </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            {{-- END --}}

            @endforeach
        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- MEET THE TEAM --}}
    {{----------------------------------------------------------------------}}

    <section class="section default meet-the-team">
        <div class="container">
            @foreach($pageData['meet_the_team'] as $section)

            {{-- START --}}

                <div class="section-header text-center">
                    <h1 class="section-heading">{{ $section['heading'] }}</h1>
                </div>

                <div class="section-body">
                    <div class="row">
                        @foreach($section['blocks'] as $card)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="mcard">
                                    <div class="mcard-avatar">  
                                        <img src="{{ asset('images/team') }}/{{ $card['avatar'] }}" width="100%">
                                    </div>
                                    <div class="mcard-badge avatar-desig"> {{ $card['role'] }} </div>
                                    <div class="mcard-title avatar-name"> {{ $card['name'] }} </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            {{-- END --}}

            @endforeach
        </div>
    </section>    

    {{----------------------------------------------------------------------}}
    {{-- CONTACT --}}
    {{----------------------------------------------------------------------}}

    <section class="section default contact-us">
        <div class="container">
            CONTACT FORM <br>
            MAP <br>
            OFFICE: Address, Phone No., Email
        </div>
    </section>

    {{----------------------------------------------------------------------}}
    {{-- THE PAGE ENDS HERE --}}
    {{----------------------------------------------------------------------}}    

</main>
@endsection