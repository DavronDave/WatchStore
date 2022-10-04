@extends('site.layouts.app')
@section('title', __('locale.search'))
@section('body')
    <section class="search" id="minHeight">
        <div class="container">
            <form action="{{ route('site.search') }}" method="GET">
                <div class="form-group">
                    <button type="submit">
                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 18 18"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M17.9398 16.5241L13.8302 12.4135C15.023 10.8597 15.5802 8.91028 15.3888 6.96068C15.1973 5.01107 14.2716 3.20732 12.7993 1.91541C11.3271 0.623503 9.41863 -0.0598104 7.46118 0.00411212C5.50374 0.0680347 3.64391 0.874408 2.25905 2.25962C0.874186 3.64483 0.0680175 5.50513 0.00411108 7.46307C-0.0597953 9.42102 0.623345 11.33 1.91493 12.8026C3.20651 14.2752 5.0098 15.2012 6.95891 15.3927C8.90802 15.5842 10.857 15.0268 12.4103 13.8337L16.5199 17.9373C16.5395 17.9572 16.5629 17.973 16.5887 17.9837C16.6144 17.9945 16.6421 18 16.67 18C16.6979 18 16.7256 17.9945 16.7513 17.9837C16.7771 17.973 16.8005 17.9572 16.8201 17.9373L17.9418 16.8173C17.9795 16.7777 18.0004 16.725 18 16.6703C17.9996 16.6156 17.978 16.5632 17.9398 16.5241ZM11.7849 11.7859C10.8419 12.7293 9.60108 13.3165 8.2738 13.4473C6.94652 13.5782 5.61494 13.2446 4.50596 12.5035C3.39698 11.7624 2.57921 10.6596 2.19201 9.38304C1.80481 8.10644 1.87213 6.73505 2.38249 5.50254C2.89286 4.27003 3.8147 3.25266 4.99092 2.6238C6.16715 1.99493 7.52498 1.79347 8.83307 2.05375C10.1411 2.31403 11.3185 3.01994 12.1646 4.0512C13.0107 5.08246 13.4731 6.37526 13.473 7.70931C13.4747 8.46665 13.3264 9.21683 13.0367 9.91653C12.7469 10.6162 12.3215 11.2516 11.7849 11.7859Z"
                                fill="white"
                            />
                        </svg>
                    </button>
                    <input type="search" name="search" value="{{ request()->get('search') }}" placeholder="{{ __('locale.search') }}..."/>
                </div>
            </form>
            <h1 class="top__border">{{ __('locale.result_search') }} <span>{{ request()->get('search') }}</span></h1>

            @if(count($response['articles']))
                <p class="subtitle__search">{{ __('menus.news') }}</p>
                <div class="result__search">
                    @foreach($response['articles'] as $article)
                        <div class="item">
                            <a href="{{ route('site.news-show', ['article' => $article['id']]) }}" class="img"><img src="{{ $article['cover_image'] }}" alt=""></a>
                            <div class="text">
                                <a href="{{ route('site.news-show', ['article' => $article['id']]) }}">{{ $article['title'] }}</a>
                                <p>{{ mb_substr(strip_tags($article['description']), 0, 150) }}...</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if(count($response['projects']))
                <p class="subtitle__search">{{ __('locale.projects') }}</p>
                <div class="result__search">
                    @foreach($response['projects'] as $project)
                        <div class="item">
                            <a href="{{ route('site.project.show', ['project' => $project['id']]) }}" class="img"><img src="{{ $project['cover_image'] }}" alt=""></a>
                            <div class="text">
                                <a href="{{ route('site.project.show', ['project' => $project['id']]) }}">{{ $project['name'] }}</a>
                                <p>{{ $project['short_description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if(count($response['regulations']))
            <p class="subtitle__search">{{ __('menus.documents') }}</p>
            <div class="result__search">
                @foreach($response['regulations'] as $regulation)
                    <a href="{{ route('site.regulation-show', ['regulation' => $regulation['id']]) }}" class="act__download">
                        <div class="img"><img src="/site/images/file.svg" alt=""></div>
                        <div class="text">
                            <h4>{{ $regulation['title'] }}</h4>
                            <div class="btm">
                                <span><img src="/site/images/download.svg" alt="">{{ $regulation['quantity_downloads'] }}</span>
                                <span><img src="/site/images/calendar.svg" alt="">{{ date('d.m.Y', strtotime($regulation['published_date'])) }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif

        </div>
    </section>
@endsection
934704fe5aee7dd35a23b3ccbe4d1e572d5199af
