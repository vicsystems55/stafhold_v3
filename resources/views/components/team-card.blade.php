@props(['image', 'name', 'role', 'socials' => []])

<div class="col text-center team-style-01 mb-30px">
    <figure class="mb-0 hover-box box-hover light-hover position-relative">
        <img class="lazyload" src="{{ asset($image) }}" alt="{{ $name }}" />
        <figcaption class="w-100 p-30px bg-white box-shadow-quadruple-large">
            <div class="position-relative z-index-1 overflow-hidden">
                <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18">{{ $name }}</span>
                <span class="text-light-opacity text-uppercase fs-15">{{ $role }}</span>
                <div class="social-icon hover-text mt-20px lg-mt-10px">
                    @foreach ($socials as $platform => $url)
                        <a href="{{ $url }}" target="_blank" rel="noopener">
                            <i class="fa-brands fa-{{ $platform }} icon-small"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="box-overlay bg-white"></div>
        </figcaption>
    </figure>
</div>
