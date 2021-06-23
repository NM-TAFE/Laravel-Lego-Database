@if (isset($childTheme))
    <li>{{ $childTheme->name }}
        @if ($childTheme->themes)
            <ul>
                @foreach ($childTheme->themes as $childTheme)
                    @include('admin.theme.child_theme', compact('childTheme'))
                @endforeach
            </ul>
        @endif
    </li>
@endif
