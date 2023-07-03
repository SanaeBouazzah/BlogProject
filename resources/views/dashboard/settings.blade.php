@extends('dashboard.layouts.layout')

@section('body')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"></a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
  </ol>
</nav>
    <form action="">
      @csrf
      <div>
        <label for="">logo</label>
        <input type="file" placeholder="logo" id="" class="form-control">
      </div>
      <div>
        <label for="">favicon</label>
        <input type="file" placeholder="favicon" class="form-control">
      </div>
      <div>
        <label for="">facebook</label>
        <input type="text" placeholder="facebook" class="form-control">
      </div>
      <div>
        <label for="">instagram</label>
        <input type="text" placeholder="instagram" class="form-control">
      </div>
      <div>
        <label for="">phone</label>
        <input type="text" placeholder="phone" class="form-control">
      </div>
      <div>
        <label for="">email</label>
        <input type="text" placeholder="email" class="form-control">
      </div>
    </form>


@endsection