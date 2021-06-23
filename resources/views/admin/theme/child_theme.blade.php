@if (isset($childTheme))
    <li><a href="{{route('themes.show',$childTheme)}}" type="submit">{{ $childTheme->name }}</a>
        @if ($childTheme->themes)
            <ul>
                @foreach ($childTheme->themes as $childTheme)
                    @include('admin.theme.child_theme', compact('childTheme'))
                @endforeach
            </ul>
        @endif
    </li>
@endif
