@extends('appmain')

@section('title', 'Cards')

@section('content')

    <x-carousel />

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".default-carousel", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script>
@endpush
