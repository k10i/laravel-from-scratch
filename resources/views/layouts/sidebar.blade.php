<ul>
    @foreach ($archives as $stats)
        <li><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] }} {{ $stats['year'] }}</a></li>
    @endforeach
</ul>

<ul>
    @foreach ($tags as $tag)
        <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></li>
    @endforeach
</ul>
