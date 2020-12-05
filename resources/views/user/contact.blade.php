@extends('layouts.app')
@section('title')
   CONTACT
@endsection

@section('header')

@endsection

@section('content')
 <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contactez-Nous</h3>
                        <p>Avez-vous une question, une déclaration? vous peuvez nous contacter dans n'import quel moment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="contact-section">
    <div class="container">
        <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contactez-Nous</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{url('/contact')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder=" Votre Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" placeholder="Nom et Prénom">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Objet">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">ENVOYER</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{getsetting()->adress}}</h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+213{{getsetting()->site_phone}}</h3>
                                <p>De Samedi jusqu'au jeudi, de 9am vers 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>{{getsetting()->site_email}}</h3>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
@endsection


@section('footer')

@endsection