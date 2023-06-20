<?php

namespace App\Http\Controllers;

use App\Events\LikeEvent;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $idItems = Item::pluck('collection_id');
        $art = Collection::with('items.user', 'items.media')
            ->whereIn('id', $idItems)
            ->get();
        /* ->has('Likes', '>=', 0) */
        $users = Item::with('user', 'media')
            ->get();
        $art->loadMissing('items.media');
        return view('layouts.home', ['users' => $users, 'art' => $art]);
    }




    public function like(Collection $collection)
    {
        $like = $collection->likes()->where('user_id', Auth::id())->first();
    
        $like ? $like->delete() : $collection->likes()->create(['user_id' => Auth::id()]);
        $likesCount = $collection->likes()->count();
    
        event(new LikeEvent($likesCount));
    
        return response()->json(['likes_count' => $likesCount]);
    }
    
    

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}