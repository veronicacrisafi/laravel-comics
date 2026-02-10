<div class="card border border-secondary-subtle rounded-0 my-5">
    <img src="{{ $immagine }}" alt="immagini fumetti" class="img-fluid card-img-top"
        style="width: 200px; height: 300px; object-fit: cover;">
    <p class="text-uppercase fw-bold" style="font-size:12px">{{ $titolo }}</p>
    {{ $slot }}
</div>
