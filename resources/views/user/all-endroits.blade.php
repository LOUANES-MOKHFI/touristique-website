@extends('layouts.app')
@section('title')
   TOUT LES ENDROITS
@endsection

@section('header')
    <link rel="stylesheet" href="/designe/user/css/jquery-sui.css">
    {!!Html::style('/designe/user/css/style.css')!!}

@endsection

@section('content')
   <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Tout les endroits</h3>
                        <p>{{getsetting()->site_name}} Vous présenter tout les endroit de la wilaya de chlef</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filtrer les resultats</h3>
<form method="POST" action="{{ url('all-endroits') }}">
                       	@csrf
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select name="category" class="form-control form-control-lg" required>
                                                <option value="" data-display="Categories">Categories</option>
                                                @foreach(All_category() as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                                @endforeach
                                              </select>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Afficher</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                    	@foreach($endroits as $endroit)
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('/endroits/'.$endroit->photo)}}" alt="">
                                </div>
                                <div class="place_info">
                                    <a href="{{url('/show-endroit/'.$endroit->id.'/'.$endroit->name)}}"><h3>{{$endroit->wilaya}}</h3></a>
                                    <p>{{$endroit->name}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')

@endsection