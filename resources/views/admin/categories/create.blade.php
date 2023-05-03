@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Добавление категории</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-3">
            <form class="w-25" action="{{ route('admin.category.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label>Название категории</label>
                <input type="text" class="form-control" placeholder="Название" name="title">
                @error('title')
                  <div class="text-danger">
                    <p>Это поле является обязательным.</p>
                    <p>{{$message}}</p>
                  </div>
                @enderror
              </div>
              <input type="submit" class="btn btn-primary" value="Сохранить" name="">
            </form>
          </div>
        </div>
        <!-- /.row -->
        <!-- Categories table row -->
        <div class="row">
          <div class="card col-12">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Действие</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title}}</td>
                    <th><a href=""><i class="fa-regular fa-eye"></i></a></th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
