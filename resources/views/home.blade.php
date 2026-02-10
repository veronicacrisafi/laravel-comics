@extends('layouts.master')
@php
    $cards = config('comics');
    //dd($cards);
@endphp
@section('contenuto')
    <h1>DC COMICS</h1>
    <div class="row row-cols-3">
        @foreach ($cards as $card)
            <div class="col">
                <x-card :immagine="$card['thumb']" :titolo="$card['title']">

                </x-card>
            </div>
        @endforeach
    </div>
@endsection
