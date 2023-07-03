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
    <form action="{{route('dashboard.settings.update')}}" method="post" enctype="multipart/form-data">
      @csrf
    <div class="card">
      <div class="card-header">
        <strong>{{ trans('words.settings') }}</strong>
      </div>
      <div class="card-block">
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
            <a class="nav-link @if($loop->index == 0) active @endif" id="{{$key}}" data-bs-toggle="tab" href="{{$key}}"
            data-bs-target="#home-tab-pane" role="tab" aria-controls="home-tab-pane" 
            aria-selected="true">  {{$lang}}</a>
          </li>
        @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
          @foreach (config('app.languages') as $key => $lang)
          <div class="tab-pane fade @if($loop->index == 0) show active in @endif" id="{{$key}}" role="tabpanel" aria-labelledby="home-tab">
            <div class="form-group mt-2 col-md-12">
              <label>{{ trans('words.title') }}</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="{{ trans('words.title') }}">
            </div>
            <div class="form-group col-md-12">
              <label>{{ trans('words.content') }}</label>
              <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label>{{ trans('words.address') }}</label>
              <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>


    <div class="card-footer">
      <button type="submit" class="btn p-5  btn-primary"><i class="fa fa-dot-circle-o"></i>
          Submit</button>
      <button type="reset" class="btn p-5 btn-danger"><i class="fa fa-ban"></i>
          Reset</button>
  </div>

  </form>

   </div>
</div>
    


@endsection