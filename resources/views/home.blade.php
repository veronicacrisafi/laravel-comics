@extends('layouts.master')
@php
    $cards = config('comics');
    //dd($cards);
@endphp
@section('contenuto')
    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($cards as $card)
                    <div class="col">
                        <x-card :immagine="$card['thumb']" :titolo="$card['title']">
                        </x-card>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-5">
                <a href="" class="btn btn-primary rounded-0">LOAD MORE</a>
            </div>
        </div>
    </div>
@endsection
