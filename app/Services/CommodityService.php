<?php
/**
 * CommodityService.php
 * @author abbass <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from PhpStorm
 * @version 1.0.0
 * @date 2022/11/28 21:43
 */
namespace App\Services;

use App\Models\Commodity;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;
class CommodityService
{
    public function __construct()
    {
    }

    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function index(): JsonResponse
    {
        $data = Commodity::all();
        return Datatables::of($data)
            ->make(true);
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Commodity::all();
    }

    /**
     * @param $attributes
     * @return Builder|Model
     */
    public function store($attributes): Model|Builder
    {
        return Commodity::query()->create($attributes);
    }
}
