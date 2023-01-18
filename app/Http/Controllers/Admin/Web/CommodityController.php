<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Commodity\CommodityStoreRequest;
use App\Models\Commodity;
use App\Services\CommodityService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\Facades\DataTables;

class CommodityController extends Controller
{
    private CommodityService $service;

    public function __construct(CommodityService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return View|Factory|JsonResponse|Application
     * @throws Exception
     */
    public function index(Request $request): View|Factory|JsonResponse|Application
    {
        if ($request->wantsJson()) {
            return $this->service->index();
        }

        return view('Admin.commodities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('Admin.commodities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommodityStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CommodityStoreRequest $request): RedirectResponse
    {
        $this->service->store($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Commodity $commodity
     * @return Response
     */
    public function show(Commodity $commodity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Commodity $commodity
     * @return Response
     */
    public function edit(Commodity $commodity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\Commodity $commodity
     * @return Response
     */
    public function update(Request $request, Commodity $commodity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Commodity $commodity
     * @return Response
     */
    public function destroy(Commodity $commodity)
    {
        //
    }
}
