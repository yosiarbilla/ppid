<section class="berita">
    <div class="container mt-5 mb-5" style="max-width:100%;">
        <div class="row">
            <!-- Carousel for Berita Kiri -->
            <div class="col-6">
                <div id="carousel-kiri" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($berita as $key => $item)
                            <button type="button" data-bs-target="#carousel-kiri" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($berita as $key => $item)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="card custom-card">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if ($item->Image)
                                                <img src="{{ url('/berita/' . $item->Image) }}" class="card-img-left" alt="Image {{ $key + 1 }}" style="width:100%;height:250px;object-fit:cover;">
                                            @else
                                                <img src="{{ url('/default_image.jpg') }}" class="card-img-left" alt="Default Image" style="width:100%;height:auto;">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body-berita">
                                                <h5 class="card-title-berita">{{ $item->Headline }}</h5>
                                                <p class="card-text-berita"><small class="text-muted">{{ $item->Tanggal }}</small></p>
                                                <p class="card-text-berita">{{ $item->Deskripsi }}</p>
                                                <a href="#" class="btn btn-link">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Carousel for Berita Kanan -->
            <div class="col-6">
                <div id="carousel-kanan" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($beritakanan as $key => $item)
                            <button type="button" data-bs-target="#carousel-kanan" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($beritakanan as $key => $item)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="card custom-card">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if ($item->imagekanan)
                                                <img src="{{ url('/beritakanan/' . $item->imagekanan) }}" class="card-img-left" alt="Image {{ $key + 1 }}" style="width:100%;height:250px;object-fit:cover;">
                                            @else
                                                <img src="{{ url('/default_image.jpg') }}" class="card-img-left" alt="Default Image" style="width:100px;height:100px;object-fit:cover;">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body-berita">
                                                <h5 class="card-title-berita">{{ $item->Headlinekanan }}</h5>
                                                <p class="card-text-berita"><small class="text-muted">{{ $item->Tanggalkanan }}</small></p>
                                                <p class="card-text-berita">{{ $item->Deskripsikanan }}</p>
                                                <a href="#" class="btn btn-link">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</section>
