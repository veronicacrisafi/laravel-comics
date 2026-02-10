<div class="card border-0 rounded-0 my-5">
    <img src="{{ $immagine }}" alt="immagini fumetti" class="img-fluid"
        style="width: 300px; height: 300px; object-fit: cover;">
    <p class="text-uppercase fw-bold pt-3" style="font-size:12px">{{ $titolo }}</p>
    {{ $slot }}
</div>
