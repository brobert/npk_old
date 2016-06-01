@if ( count( $breadCrumbs ) )
<ol class="breadcrumb breadcrumb-transparent nm">
    @foreach ($breadCrumbs as $breadCrumb)
    <li @if ( $breadCrumb == end( $breadCrumbs ) ) class="active" @endif >
        @if ( $breadCrumb != end( $breadCrumbs ) ) <a href="{{ $breadCrumb['url'] }}"> @endif
        {{ $breadCrumb['label'] }}
        @if ( $breadCrumb != end( $breadCrumbs ) ) </a> @endif
    </li>
    @endforeach
</ol>
@endif