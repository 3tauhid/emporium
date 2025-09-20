<ul class="pagination pagination-style-3 pagination-semi-rounded justify-content-center">
    <li><a class='btn btn-primary b27' href="{{ $paginator->url(1) }}" class="double_left_right_button">❮❮</a></li>

    @for ($i = $paginationLinks['part1From']; $i < $paginationLinks['part1To']; $i++)
        <li><a class='btn btn-primary b27' href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
    @endfor

    <li><a class='active btn btn-primary b27' href="{{ $paginator->url($paginationLinks['currentPage']) }}" class="active">{{ $paginationLinks['currentPage'] }}</a></li>

    @for ($i = $paginationLinks['part2From']; $i < $paginationLinks['part2To']; $i++)
        <li><a class='btn btn-primary b27' href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
    @endfor

    <li><a class='btn btn-primary b27' href="{{ $paginator->url($paginationLinks['lastPage']) }}" class="double_left_right_button">❯❯</a></li>
</ul>