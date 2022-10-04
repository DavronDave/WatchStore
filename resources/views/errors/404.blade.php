@extends('site.layouts.app')

@section('body')

    <section class="not__found" id="minHeight">
        <div class="container">
            <h1 class="top__border">404</h1>
            <p>{{ __('locale.not_found') }}<br>
                {{--К сожалению, запрашиваемая
                Вами страница не найдена--}} ...</p>
        </div>
    </section>

@endsection
