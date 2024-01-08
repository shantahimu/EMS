<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_id' => 'required|exists:events,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|max:255',
        ]);

        $event = Event::find($validatedData['event_id']);
        
        $review = new Review();
        $review->event_id = $event->id;
        $review->rating = $validatedData['rating'];
        $review->comment = $validatedData['comment'];
        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }

    public function show()
    {
        $event = Event::find();

        return view('frontend.pages.event-review', compact('event'));
    }
   
}


