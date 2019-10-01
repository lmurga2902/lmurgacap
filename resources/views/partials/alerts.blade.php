<div class="container">
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
        <!-- This is a primary alert—check it out! -->
            {{session('success')}}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
        <!-- This is a primary alert—check it out! -->
            {{session('success')}}
        </div>
    @endif
</div>