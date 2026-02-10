@extends('layouts.master')
@php
    $cards = config('comics');
    dd($cards);
@endphp
@section('contenuto')
    <h1>DC COMICS</h1>

    <x-card> contenuto card</x-card>
@endsection
