@extends('layouts.master')
@section('content')

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-search">
                    {!!Form::open(['route'=> ['tutorial.filterTitulo'],'method'=>'GET'])!!}
                    <div class="input-group" id="modificarSearch">
                        <input name="buscar" type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                    </div>
                    {!!Form::close()!!}
                            <!-- /input-group -->
                </li>
                <li class="sidebar-brand">
                    <h2 style="font-weight: bold;text-decoration: underline;">Categories</h2>
                </li>
                @foreach($categorias as $categoria)
                    <li>
                        {!!link_to_action('TutorialController@filterCategoria', $title = $categoria->tipo, $parameters = $categoria->id, $attributes = [])!!}
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
                <div class="row">
                    @foreach($tutoriales as $tutorial)
                        <div class="col-xs-6 col-sm-3">
                            <div class="thumbnail">
                                <a href="{{URL::to('tutorial/'.$tutorial->id)}}"><img
                                            src="{{asset("images/".$tutorial->imagen)}}"
                                            alt="" class="img-thumbnail img-responsive"
                                            style="width: 200px;height: 150px"></a>
                                <div class="caption">
                                    <h3>{{$tutorial->titulo}}</h3>
                                    <p>{{$tutorial->descripcion}}</p>
                                    <p>{{$tutorial->autor}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

@endsection
