@extends('dashboard.layouts.layout')

@section('body')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"></a></li>
    <li class="breadcrumb-item active" aria-current="page">Settings</li>
  </ol>
</nav>
<div class="container-fluid">
   <div class="row">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong>
      </div>
      <div class="card-block">
        <form action="" method="post">
          @csrf
          <div class="form-group col-md-6">
            <label for="">logo</label>
            <input type="file" placeholder="logo" id="" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">favicon</label>
            <input type="file" placeholder="favicon" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">facebook</label>
            <input type="text" placeholder="facebook" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">instagram</label>
            <input type="text" placeholder="instagram" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">phone</label>
            <input type="text" placeholder="phone" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="">email</label>
            <input type="text" placeholder="email" class="form-control">
          </div>
        </form>
      </div>
    </div>
   </div>
   <div class="row">
    hello
   </div>
</div>
    


@endsection