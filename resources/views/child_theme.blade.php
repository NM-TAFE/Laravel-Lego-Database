<li>{{ $child_theme->name }}</li>
@if ($child_theme->themes)
    <ul>
        @foreach ($child_theme->themes as $childTheme)
            @include('child_theme', ['child_theme' => $childTheme])
        @endforeach
    </ul>
@endif
