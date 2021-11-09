<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $basket = Basket::where('basketID', 'LIKE', "%$keyword%")
                ->orWhere('basketnum', 'LIKE', "%$keyword%")
                ->orWhere('userID', 'LIKE', "%$keyword%")
                ->orWhere('productID', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $basket = Basket::latest()->paginate($perPage);
        }

        return view('admin.basket.index', compact('basket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.basket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Basket::create($requestData);

        return redirect('admin/basket')->with('flash_message', 'Basket added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $basket = Basket::findOrFail($id);

        return view('admin.basket.show', compact('basket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $basket = Basket::findOrFail($id);

        return view('admin.basket.edit', compact('basket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $basket = Basket::findOrFail($id);
        $basket->update($requestData);

        return redirect('admin/basket')->with('flash_message', 'Basket updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Basket::destroy($id);

        return redirect('admin/basket')->with('flash_message', 'Basket deleted!');
    }
}
