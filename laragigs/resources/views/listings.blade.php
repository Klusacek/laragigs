@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')    

  <h1>{{$heading}}</h1>

  @unless (count($listings)==0)

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >
  @foreach ($listings as $listing)
   <x-listing-card :listing="$listing"/>
  @endforeach
  @else
  <p> no listins found </p>
  @endunless
  </div>
@endsection