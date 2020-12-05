@extends('admin.layouts.app')
@section('title')
      endroits
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des endroits</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/endroits')}}">Liste des endroits</a></li>
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
              <h3 class="card-title col-md-2">Liste des endroits</h3>
              <form class="card card-sm col-md-7" action="{{url('/admin/search_endroits')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col-md-10 col-sm-12">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="ENDROIT.." name="endroit">
             </div>
                                    <!--end of col-->
            <div class="col-md-2 col-sm-12">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-md-3 col-sm-12">
                <a href="{{url('/admin/endroits/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un endroit</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="200">NOM DE L'ENDROIT</th>
                  <th width="100">WILAYA</th>
                  <th width="100">COMMUNE</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </thead>
                <tbody>
                	@if(count($endroits) == 0)
                        <tr>
                        	<td colspan="5" style="color: red;font-weight: bold" align="center">LA LISTE DES ENDROITS EST VIDE</td>
                        </tr>
                	@else
                  @foreach($endroits as $endroit)
                  
                <tr>
                  <td>{{$endroit->name}}</td>
                  <td>{{$endroit->wilaya}}</td>
                  <td>{{$endroit->commune}}</td>
                  <td>{{$endroit->getActive()}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/endroits/'.$endroit->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/endroits/'.$endroit->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/endroits/'.$endroit->id.'/delete'}}"></a>
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                  <th width="200">NOM DE L'ENDROIT</th>
                  <th width="100">WILAYA</th>
                  <th width="100">COMMUNE</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$endroits->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection