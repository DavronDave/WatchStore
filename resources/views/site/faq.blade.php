@extends('site.layouts.app')
@section('title', __('menus.faq'))

@section('body')

    <section class="about" id="minHeight">
        <div class="container">
            <ol class="breadcrumb custom">
                <li>
                    <a href="{{ route('site.index') }}">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6682 7.43442L8.84893 0.618614L8.39184 0.161522C8.28769 0.0580644 8.14685 0 8.00005 0C7.85325 0 7.71241 0.0580644 7.60826 0.161522L0.331827 7.43442C0.225114 7.54073 0.140779 7.66733 0.0837996 7.80677C0.0268203 7.9462 -0.00164843 8.09564 7.37152e-05 8.24626C0.00712494 8.86749 0.524225 9.36341 1.14554 9.36341H1.89559V15.1115H14.1046V9.36341H14.8706C15.0941 9.36342 15.3125 9.29711 15.4983 9.17289C15.6841 9.04867 15.8289 8.87212 15.9143 8.66558C15.9997 8.45904 16.0219 8.23181 15.9781 8.01265C15.9343 7.79349 15.8264 7.59225 15.6682 7.43442ZM8.98823 13.8408H7.01173V10.2405H8.98823V13.8408ZM12.8339 8.09272V13.8408H10.1179V9.81696C10.1179 9.72425 10.0996 9.63244 10.0642 9.54678C10.0287 9.46113 9.97671 9.3833 9.91116 9.31774C9.8456 9.25218 9.76777 9.20019 9.68211 9.16472C9.59646 9.12925 9.50465 9.11101 9.41194 9.11103H6.58817C6.49546 9.11101 6.40365 9.12925 6.31799 9.16472C6.23234 9.20019 6.1545 9.25218 6.08895 9.31774C6.02339 9.3833 5.9714 9.46113 5.93593 9.54678C5.90046 9.63244 5.88221 9.72425 5.88224 9.81696V13.8408H3.16616V8.09272H1.47191L8.00181 1.56817L8.40948 1.97585L14.53 8.09277L12.8339 8.09272Z" fill="black" fill-opacity="0.55"/>
                        </svg>
                    </a>
                </li>
                <li>{{ __('menus.faq') }}</li>
            </ol>
            <div class="about__main">
                <h1 class="top__border">{{ __('menus.faq') }}</h1>
                <div class="panel-group" id="accordion">
                    @foreach($questions as $question)
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse-{{$question['id']}}" aria-expanded="true">
                                        {{ $question['question'] }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{$question['id']}}" class="panel-collapse collapse in collapse">
                                <div class="panel-body">
                                    {!! $question['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
