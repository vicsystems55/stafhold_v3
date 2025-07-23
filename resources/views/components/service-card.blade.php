<div class="col mb-4">
    <div class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
        <div class="position-relative box-image">
            <a href="#"><img src="{{ asset($image) }}" alt="{{ $title }}"></a>
            <span class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">{{ $tag }}</span>
        </div>
        <div class="bg-white">
            <div class="ps-4 pe-4 pt-30px pb-30px text-center">
                <h5 class="fs-18 alt-font fw-700 text-dark-gray mb-5px">{{ $title }}</h5>
                <p>{{ $description }}</p>
            </div>
            <div class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-4 pe-4 position-relative text-center">
                <a href="#" class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                    <span>
                        <span class="btn-text">Explore services</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
