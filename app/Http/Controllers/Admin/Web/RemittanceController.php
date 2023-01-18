<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Remittance\RemittanceStoreRequest;
use App\Models\Commodity;
use App\Models\Remittance;
use App\Services\CommodityService;
use App\Services\RemittanceService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\Facades\DataTables;

class RemittanceController extends Controller
{
    private CommodityService $commodityService;
    private RemittanceService $service;

    public function __construct(CommodityService $commodityService, RemittanceService $service)
    {
        $this->commodityService = $commodityService;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|Factory|JsonResponse|Application
     * @throws Exception
     */
    public function index(Request $request): View|Factory|JsonResponse|Application
    {
        if ($request->wantsJson()) {
            return $this->service->index();
        }

        return view('Admin.remittances.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $commodities = $this->commodityService->getAll();
        return view('Admin.remittances.create', compact('commodities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RemittanceStoreRequest $request
     * @return RedirectResponse
     */
    public function store(RemittanceStoreRequest $request): RedirectResponse
    {
        $this->service->store($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remittance  $remittance
     * @return Response
     */
    public function show(Remittance $remittance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remittance  $remittance
     * @return Response
     */
    public function edit(Remittance $remittance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Remittance  $remittance
     * @return Response
     */
    public function update(Request $request, Remittance $remittance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remittance  $remittance
     * @return Response
     */
    public function destroy(Remittance $remittance)
    {
        //
    }
}
