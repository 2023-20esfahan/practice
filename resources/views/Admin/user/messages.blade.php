@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
