<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Resources\MinifiedFeedbackResource;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $comments = MinifiedFeedbackResource::collection(Feedback::all())->toArray($request);
        return view('about', compact('comments'));
    }

    public function store(StoreFeedbackRequest $request)
    {
        $feedback = Feedback::query()->create($request->validated());
        return redirect()->route('about');
    }
}
