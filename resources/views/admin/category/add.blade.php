@extends('admin.layouts.app')
@section('title')
      Catégorie
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AJOUTER UNE CATEGORIE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/category')}}">Liste des categories</a></li>
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
              <h3 class="card-title col-md-12">AJOUTER UNE CATEGORIE</h3>
             </div>
           {!!Form::open(['url' => '/admin/category' ,'method' => 'post'])!!}
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="category">CATEGORIE</label>
                      <input id="category" type="text" class="form-control form-control-lg @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                          @error('category')
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