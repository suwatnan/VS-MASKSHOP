<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
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
            $shipping = Shipping::where('shippingID', 'LIKE', "%$keyword%")
                ->orWhere('orderID', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $shipping = Shipping::latest()->paginate($perPage);
        }

        return view('admin.shipping.index', compact('shipping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.shipping.create');
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
        
        Shipping::create($requestData);

        return redirect('admin/shipping')->with('flash_message', 'Shipping added!');
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
        $shipping = Shipping::findOrFail($id);

        return view('admin.shipping.show', compact('shipping'));
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
        $shipping = Shipping::findOrFail($id);

        return view('admin.shipping.edit', compact('shipping'));
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
        
        $shipping = Shipping::findOrFail($id);
        $shipping->update($requestData);

        return redirect('admin/shipping')->with('flash_message', 'Shipping updated!');
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
        Shipping::destroy($id);

        return redirect('admin/shipping')->with('flash_message', 'Shipping deleted!');
    }
}
