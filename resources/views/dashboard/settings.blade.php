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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          @foreach (config('app.languages') as $key => $lang)
          <li class="nav-item" role="presentation">
            <a class="nav-link @if($loop->index == 1) active @endif" id="home-tab" data-bs-toggle="tab" href="{{$key}}"
            data-bs-target="#home-tab-pane" role="tab" aria-controls="home-tab-pane" 
            aria-selected="true">  {{print_r($key)}}</a>
          </li>
        @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="form-group mt-2 col-md-12">
              <label>{{ trans('words.email') }} hell</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="{{ trans('words.email') }}">
            </div>
          </div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
        </div>
      </div>
    </div>
   </div>
   <div class="row">
    hello
   </div>
</div>
    


@endsection