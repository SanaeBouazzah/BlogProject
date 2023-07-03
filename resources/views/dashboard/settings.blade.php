@extends('dashboard.layouts.layout')

@section('body')
    <form action="">
      @csrf
      <div>
        <label for="">logo</label>
        <input type="text" placeholder="logo">
      </div>
      <div>
        <label for="">favicon</label>
        <input type="text" placeholder="favicon">
      </div>
      <div>
        <label for="">facebook</label>
        <input type="text" placeholder="facebook">
      </div>
    BlogP
    </form>
@endsection