@if($errors->any())

<div class="errors_div" aria-live="polite" aria-atomic="true">

    @foreach ($errors->all() as $error)

        <div class="toast toast-error fade show" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 240px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"> <rect width="100%" height="100%" fill="#dc3545"></rect> </svg>
                <strong class="mr-auto">Errore</strong>
                <small>2 secondi fa...</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $error }}
            </div>
        </div>

    @endforeach

    @if( session('messages') )

        @foreach ( session('messages') as $message )
            <div class="toast toast-{{ $message['type'] ?? 'info' }} fade show" role="alert" aria-live="assertive"
                 aria-atomic="true" style="min-width: 240px;">
                <div class="toast-header">
                    <svg class="svg-{{ $message['type'] ?? 'info' }} bd-placeholder-img rounded mr-2" width="20" height="20"
                         xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                         role="img">
                        <rect width="100%" height="100%"></rect>
                    </svg>
                    <strong class="mr-auto">{{ $message['title'] ?? 'Messaggio' }}</strong>
                    <small>2 secondi fa...</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="toast-body">
                    @if( is_array($message) )
                        {{ $message['message'] ?? '' }}
                    @else
                        {{ $message }}
                    @endif
                </div>
            </div>
        @endforeach

    @endif

</div>

@endif


