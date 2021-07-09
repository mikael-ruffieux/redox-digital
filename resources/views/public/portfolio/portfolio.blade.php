@extends('layouts.main_layout')

@section('title')
Portfolio |
@endsection

@section("content")
Portfolio (dynamic)
{{$projects[0]->title}}
@endsection