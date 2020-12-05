@extends('layouts.app')
@section('title')
   Afficher un endroit
@endsection

@section('header')
    
<style type="text/css">
	
/*------- portfolio -------*/
.project {
  margin: 15px 0;
}

.no-gutter .project {
  margin: 0 !important;
  padding: 0 !important;
}

.has-spacer {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}

.has-spacer-extra-space {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}

.has-side-spacer {
  margin-left: 30px;
  margin-right: 30px;
}

.project-title {
  font-size: 1.25rem;
}

.project-skill {
  font-size: 0.9rem;
  font-weight: 400;
  letter-spacing: 0.06rem;
}

.project-info-box {
  margin: 15px 0;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 5px;
}

.project-info-box p {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #d5dadb;
}

.project-info-box p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}
img {
    width: 100%;
    max-width: 100%;
    height: auto;
    -webkit-backface-visibility: hidden;
}
.rounded {
    border-radius: 5px !important;
}

.mr-5 {
    margin-right: 5px !important;
}
.mb-0 {
    margin-bottom: 0 !important;
}


.project-info-box p {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #d5dadb;
}
p {
    font-family: "Barlow", sans-serif !important;
    font-weight: 300;
    font-size: 1rem;
    color: #686c6d;
    letter-spacing: 0.03rem;
    margin-bottom: 10px;
}

</style>
@endsection

@section('content')
<div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3>{{$endroit->name}}</h3>
            <p>{{getsetting()->slegon}}</p>
        </div>
    </div>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h5>LES INFORMATIONS DE {{$endroit->name}}</h5>
                <p class="mb-0">{{$endroit->description}}</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box">
                <p><b>Wilaya:</b> {{$endroit->wilaya}}</p>
                <p><b>Commune:</b> {{$endroit->commune}}</p>
                <p><b>Adress:</b> {{$endroit->adress}}</p>
                 <p><b>Categorie:</b> {{$endroit->category->category}}</p>
            </div>
        </div>
        <div class="col-md-7">
            <img src="{{asset('/endroits/'.$endroit->photo)}}" alt="project-image" class="rounded">
            <div class="project-info-box">
               
            </div><!-- / project-info-box -->
        </div><!-- / column -->
    </div>
</div>
</div>
@endsection

@section('footer')

@endsection