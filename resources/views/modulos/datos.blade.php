@extends('plantilla')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mis Datos</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="" method="post">
                    @csrf
                    @method('put')
                    <h2>Nombre: </h2>
                    <input type="text" name="name" id="" class="form-control" value="{{auth()->user()->name}}">
                    @error('name')
                        <p class="alert alert-danger">Debe colocar el usuario</p>
                    @enderror
                    <h2>Email: </h2>
                    <input type="text" name="email" id="" class="form-control" value="{{auth()->user()->email}}">
                    @error('email')
                    <p class="alert alert-danger">El email ya existe</p>
                @enderror
                    <h2>Cambiar Contraseña:</h2>
                    <input type="password" name="password" id="" value="" class="form-control">
                    @error('password')
                    <p class="alert alert-danger">La contrasena debe ser mayor a 8 caracteres</p>
                @enderror

                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
  