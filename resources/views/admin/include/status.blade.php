@if ($errors->any())
<div class="alert alert-danger">
    <a aria-label="close" class="close" data-dismiss="alert" href="#">
        ×
    </a>
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    <a aria-label="close" class="close" data-dismiss="alert" href="#">
        ×
    </a>
    <ul>
        <li>
            {{ session('success') }}
        </li>
    </ul>
</div>
@endif
