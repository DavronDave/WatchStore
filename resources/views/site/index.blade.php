@extends('site.layouts.app')
@section('title', __('menus.home'))

@section('body')

    <section class="general">
        <!-- Swiper -->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="swiper-slide" style="background-image: url({{ $project['image'] }})">
                        <h2>{{ $project['name'] }}</h2>
                        <p>
                            {{ $project['short_description'] }}
                        </p>
                        <a href="{{ route('site.project.show', ['project' => $project['id']]) }}" class="btn__detail">
                            <svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 19.5936L11.177 10.5L2 1.40649" stroke="#223333" stroke-width="3"/>
                            </svg>
                            {{ __('locale.more') }}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="swiper-slide" style="background-image: url({{ $project['cover_image'] }})">
                        <h3>{{ $project['name'] }}</h3>
                        <p>{{ $project['region'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Swiper JS -->
    </section>
@endsection
@section('script')
    <script>
        document.body.classList.add("home");
    </script>
@endsection

