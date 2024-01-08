@extends('forntend.master')
@section

<form method="POST" action="{{ route('submit.review') }}">
    @csrf
    <input type="hidden" name="event_id" value="{{ $event->id }}">
    
    <label for="rating">Rating:</label>
    <input type="number" name="rating" id="rating" min="1" max="5" required>
    
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" rows="4" required></textarea>
    
    <button type="submit">Submit Review</button>
</form>
@if($event->reviews->count() > 0)
    <h2>Reviews for {{ $event->name }}</h2>
    <ul>
        @foreach($event->reviews as $review)
            <li>
                <strong>Rating:</strong> {{ $review->rating }} <br>
                <strong>Comment:</strong> {{ $review->comment }}
            </li>
        @endforeach
    </ul>
@else
    <p>No reviews yet for {{ $event->name }}</p>
@endif
@endsection