@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' =>request()->segment(2), 'param1' => request()->segment(1), 'param2' => request()->segment(1)]);
    @include('admins.academics.header');
@endsection

