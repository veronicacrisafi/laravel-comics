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
                <x-card>
                    <x-slot:titolo>{{ $card['title'] }}</x-slot>
                </x-card>
            </div>
        @endforeach
    </div>
@endsection
