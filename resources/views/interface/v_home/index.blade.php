@extends('layouts.app')
@section('title', 'Home')
@section('hero')
    @include('component.hero')
@endsection
@section('content')
    <div>
        <h2 class="text-xl lg:text-3xl font-bold bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">
            <i class="fa-solid fa-quote-left text-4xl "></i> Mau buat website seperti apa?
        </h2>
        <hr class="w-48 mx-auto h-1 mt-4 bg-gradient-to-r from-red-500 to-orange-500  border-0">
    </div><br>

    @include('component.chat')

@endsection
