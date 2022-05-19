<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            @foreach ($category as $item)
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ url("/kategori/$item->slug") }}" class="badge bg-info text-decoration-none link-light">{{ $item->name }}</a></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>