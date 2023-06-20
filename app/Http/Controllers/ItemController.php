<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemCreateRequest;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        /* $items = Item::query()->where('user_id', $user)->with('user')->get();*/
        $userId = Auth::id();
        $collections = Collection::query()
            ->where('user_id', $userId)
            ->with('items')
            ->get();


        $items = Item::query()->get();
        return view(
            'layouts.createItems',
            [
                'items' => $items,
                'collections' => $collections
            ]
        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function like(Item $item)
    {
        if ($like = $item->like()->where('user_id', Auth::id())->first()) {
            $like->delete();
        } else {
            $item->like()->create([
                'user_id' => Auth::id(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemCreateRequest $request)
    {
        //Toma la validacion creada en el request
        $userId = Auth::id();
        $itemData = $request->validated();
        $itemData['user_id'] = $userId;
        $itemImage = Item::create($itemData);


        /*         $itemImage = Item::create($request->validated());
         */

        //basado en la documentacion...

        $itemImage->addMediaFromRequest('image')

            ->toMediaCollection();


        /*         $images = $itemImage->getMedia();
         */

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $userId =Auth::id();
        $user = Auth::id();

        //obtencion de los items asociados al usuario         
        $items = Item::with('user')
            ->where('user_id', $user)
            ->get();

        /*         $idItems = $items->pluck('id');
         */


        $collectionUser = Collection::with('items')
            ->where('user_id', $user)
            ->get();
        /*         dd($collectionUser->toArray());
         */
        return view(
            'layouts.author',
            [
                'items' => $items,
                'collectionUser' => $collectionUser,
            ]
        );
    }

    



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}