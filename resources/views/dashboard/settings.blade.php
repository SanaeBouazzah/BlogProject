@extends('dashboard.layouts.layout')

@section('body')
    <form action="">
      @csrf
      <div>
        <label for="">logo</label>
        <input type="file" placeholder="logo" id="">
      </div>
      <div>
        <label for="">favicon</label>
        <input type="file" placeholder="favicon" >
      </div>
      <div>
        <label for="">facebook</label>
        <input type="text" placeholder="facebook">
      </div>
      <div>
        <label for="">instagram</label>
        <input type="text" placeholder="instagram">
      </div>
      <div>
        <label for="">phone</label>
        <input type="text" placeholder="phone">
      </div>
      <div>
        <label for="">email</label>
        <input type="text" placeholder="email">
      </div>
    </form>

    
@endsection