@extends('layouts.app')
@section('title')
   A POROPOS
@endsection

@section('header')

@endsection

@section('content')
<div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>A POROPOS</h3>
                        <p>{{getsetting()->slegon}}</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">
                        <h3>MISSION</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p><span style="text-transform: uppercase">{{getsetting()->site_name}}</span> est un site web developper par une equipe dans le but de developper le tourisme dans la wilaya chlef.</p>
                                <p>Il présenter tout les belle endroits, les hotels, les resaturants de la wilaya de Chlef.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="story_thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="thumb padd_1">
                                            <img src="/designe/user/img/about/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumb">
                                            <img src="/designe/user/img/about/2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3  class="counter">378</h3>
                                            <p>Tour has done successfully</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">30</h3>
                                            <p>Yearly tour arrange</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">2263</h3>
                                            <p>Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="/designe/user/img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Wilaya de chlef</h3>
                        <p>{{getsetting()->site_name}} est la meilleur site web qui vous aidez pour facilter le deplassemet dans la wilaya</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="/designe/user/img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Endroits</h3>
                        <p>Vous trouverez tout les endroits touristique Hote,restaurant, belle place...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="/designe/user/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>{{getsetting()->site_name}}</h3>
                        <p>{{getsetting()->site_name}} est devenir votre guide touristique de la wilaya de chlef</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')

@endsection