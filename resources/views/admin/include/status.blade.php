@if ($errors->any())
<div class="pad margin no-print my-0 py-0">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if (session('success'))
<div class="pad margin no-print my-0 py-0">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <ul>
            <li>
                {{ session('success') }}
            </li>
        </ul>
    </div>
</div>
@endif
