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
        <strong>{{ trans('words.settings') }}</strong>
      </div>
      <div class="card-block">
        <form action="" method="post">
          @csrf
          <div class="form-group col-md-6">
            <label for="logo">{{ trans('words.logo') }}</label>
            <input type="file" placeholder="{{ trans('words.logo') }}"  id="logo" name="logo" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="favicon">{{ trans('words.favicon') }}</label>
            <input type="file" placeholder="{{ trans('words.favicon') }}" id="favicon" name="favicon" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="facebook">{{ trans('words.facebook') }}</label>
            <input type="text" placeholder="{{ trans('words.facebook') }}" id="facebook" name="facebook" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="instagram">{{ trans('words.instagram') }}</label>
            <input type="text" placeholder="{{ trans('words.instagram') }}" id="instagram" name="instagram" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="phone">{{ trans('words.phone') }}</label>
            <input type="text" placeholder="{{ trans('words.phone') }}" id="phone" name="phone" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="email">{{ trans('words.email') }}</label>
            <input type="text" placeholder="{{ trans('words.email') }}" id="email" name="email" class="form-control">
          </div>
        </form>
      </div>
    </div>


    <div class="card">
      <div class="card-header">
        <strong>{{ trans('words.translations') }}</strong>
      </div>
      <div class="card-block">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
   </div>
   <div class="row">
    hello
   </div>
</div>
    


@endsection