<div class="card border-0 shadow">
    <div class="card-body my-3">
        <h3>{{ auth()->user()->name }}</h3>
        <p>Balance: Rp{{ auth()->user()->balance }}</p>
        <hr>
        <ul class="list-unstyled">
            @if (auth()->user()->role == 'OTA')
                <li>
                    <a href="{{ route('chat-consultations.ota') }}">Your Consultations</a>
                </li>
            @else
                <li>
                    <a href="{{ route('home') }}">Create New Booking</a>
                </li>
                <li>
                    <a href="{{ route('bookings.index') }}">My Bookings</a>
                </li>
                <li>
                    <a href="{{ route('checkouts.index') }}">Checkouts</a>
                </li>
                <li>
                    <a href="{{ route('consultations.index') }}">Select Travel Agent Consultant</a>
                </li>
                <li>
                    <a href="{{ route('chat-consultations.index') }}">Your Consultations</a>
                </li>
            @endif
        </ul>
    </div>
</div>
