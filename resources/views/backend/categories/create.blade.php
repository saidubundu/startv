@extends('layouts.backend.main')
@section('title', 'TvApp | Add New category')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Add new category</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="active"><a href="{{ route('categories.index')}}">Categories</a></li>
        <li class="active">Add New</li>
      </ol>
    </section>

 <!-- Main content -->
 <section class="content">
          <div class="row">
              {!! Form::model($category, [
                  'method' => 'POST',
                  'route'  => 'categories.store',
                  'files'  => TRUE,
                  'id' => 'category-form'
              ]) !!}

                   @include('backend.categories.form') 

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
@endsection 

@include('backend.categories.script')