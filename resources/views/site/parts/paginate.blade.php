@if ($paginator->hasPages())

{{--    <nav aria-label="Page navigation example">--}}
        <ul class="pagination">
            {{--            @if ($paginator->onFirstPage())--}}
            {{--                <li class="page-item disabled">--}}
            {{--                    <a class="page-link" href="#" tabindex="-1">Previous</a>--}}
            {{--                </li>--}}
            {{--            @else--}}
            {{--                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>--}}
            {{--            @endif--}}

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a class="active">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
@endif
