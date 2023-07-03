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
          @foreach (config('app.languages') as $lang)
              
          @endforeach
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
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