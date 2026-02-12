<div class="card border-0 rounded-0 my-5 bg-dark">
    <img src="{{ $immagine }}" alt="immagini fumetti" class="img-fluid"
        style="width: 300px; height: 300px; object-fit: cover;">
    <a href="{{ route('singleCard') }}" class="text-uppercase fw-bold text-light pt-3 text-decoration-none"
        style="font-size:12px">{{ $titolo }}</a>
    {{ $slot }}
</div>
