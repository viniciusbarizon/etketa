@foreach ($favicons as $favicon)
    <link href="{{ Vite::asset($favicon['href']) }}" rel="{{ $favicon['rel'] }}" sizes="{{ $favicon['sizes'] }}">
@endforeach

<link rel="manifest" href="{{ Vite::asset($webManifestPath) }}">
