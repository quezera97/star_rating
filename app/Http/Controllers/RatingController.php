<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::all();

        return Inertia::render(
            'Ratings/Index',
            [
                'ratings' => $ratings
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Ratings/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required',
        ]);
        Rating::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->slug),
            'content' => $request->content
        ]);
        sleep(1);

        return redirect()->route('ratings.index')->with('message', 'Rating Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        return Inertia::render(
            'Ratings/Edit',
            [
                'rating' => $rating
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $rating->title = $request->title;
        $rating->slug = \Str::slug($request->slug);
        $rating->content = $request->content;
        $rating->save();
        sleep(1);

        return redirect()->route('ratings.index')->with('message', 'Rating Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        $rating->delete();
        sleep(1);

        return redirect()->route('ratings.index')->with('message', 'Rating Delete Successfully');
    }
}
