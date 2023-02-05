<div class="page-title-right">
    <ol class="breadcrumb m-0">
        @if(!empty($breabcrumbs))
            @forelse($breabcrumbs as $breabcrumb)
                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                <li class="breadcrumb-item active">Alerts</li>
            @empty

            @endforelse
        @endif
    </ol>
</div>
