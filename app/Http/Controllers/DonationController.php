<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;
use Throwable;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return DataTableCollectionResource
     */
    public function data(Request $request)
    {
        $length = $request->input('length');
        $sortBy = $request->input('column');
        $orderBy = $request->input('dir');
        $searchValue = $request->input('search');


        if ($searchValue != null)
            $query = Donation::where('name', 'LIKE', '%' . $searchValue . '%')->orWhere('address', '%' . $searchValue . '%')->orWhere('phone', '%' . $searchValue . '%')->orderBy('created_at', $orderBy ?? 'desc');
        else
            $query = Donation::orderBy('created_at', $orderBy ?? 'desc');


        $data = $query->paginate($length);

        return new DataTableCollectionResource($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {
        try {
            $donation = new Donation();
            $donation->name = $request->name;
            $donation->phone = $request->phone;
            $donation->address = $request->address;
            $donation->message = $request->message;
            $donation->save();
            return redirect()->back()->with('message', 'Donation info sent successfully');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', 'Donation process failed, please check your data.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy($id)
    {

    }
}
