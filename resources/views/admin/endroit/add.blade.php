@extends('admin.layouts.app')
@section('title')
     ENDROIT
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AJOUTER UN ENDROIT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/category')}}">Liste des endroits</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
              <h3 class="card-title col-md-12">AJOUTER UN ENDROIT</h3>
             </div>
           {!!Form::open(['url' => '/admin/endroits' ,'method' => 'post', 'enctype'=>'multipart/form-data'])!!}
                    <div class="col-md-12 form-group">
                      <label for="name">PHOTO PEINCIPALE DE L'ENDROIT</label>
                      <input id="photo" type="file" class="form-control form-control-lg @error('photo') is-invalid @enderror" name="photo" autocomplete="photo" autofocus>

                          @error('photo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">NOM DE L'ENDROIT</label>
                      <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="">CATEGORIE</label>
                      <select class="form-control form-control-lg" name="id_category">
                        <optgroup label="choisir une categorie">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                          @endforeach
                        </optgroup>
                      </select>

                          @error('id_category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="wilaya">WILAYA</label>
                      <select class="form-control form-control-lg" name="wilaya">
                        <optgroup label="WILAYA">
                         <option value="chlef">CHLEF</option>
                        </optgroup>
                      </select>

                          @error('wilaya')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-6 form-group">
                      <label for="commune">COMMUNE</label>
                      <input id="commune" type="text" class="form-control form-control-lg @error('commune') is-invalid @enderror" name="commune" value="{{ old('commune') }}"  autocomplete="commune" autofocus>

                          @error('commune')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-12 form-group">
                      <label for="adress">ADRESS DE L'ENDROIT</label>
                      <input id="adress" type="text" class="form-control form-control-lg @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}"  autocomplete="adress" autofocus>

                          @error('adress')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="col-md-12 form-group">
                      <label for="active">ETAT </label>
                      <input id="switcheryColor4" type="checkbox" class="switchery" data-color="success" checked name="active" value="1">

                          @error("active")
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                       <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION</label>
                      <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>
                        {{ old('description') }}
                      </textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  </div>
                   <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('AJOUTER') }}
                                </button>
                        </div>
                    </div>
           {!!Form::close()!!}
            <!-- /.card-header -->
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection