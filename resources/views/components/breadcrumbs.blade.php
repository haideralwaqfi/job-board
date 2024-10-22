<nav {{ $attributes }}>
    <ul class="flex space-x-4 text-slate-500">
        <li class="hover:text-slate-600"">
            <a href="/">Home</a>
        </li>
        @foreach ($links as $label => $link)
            <li>-></li>
            <li class="hover:text-slate-600">
                <a href="{{ $link }}">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
