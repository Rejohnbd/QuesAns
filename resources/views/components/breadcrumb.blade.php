<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route($dashboard_url) }}">Dashboard</a></li>
                    @if(isset($itemOne) && isset($itemOneUrl))
                    <li class="breadcrumb-item"><a href="{{ route($itemOneUrl) }}">{{ $itemOne }}</a></li>
                    @endif
                    @if(isset($activePage))
                    <li class="breadcrumb-item active">{{ $activePage }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</section>