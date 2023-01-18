<?php
/**
 * RemittanceService.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from pakdaman
 * @version 1.0.0
 * @date 2022/11/29 21:44
 */


namespace App\Services;

use App\Models\Commodity;
use App\Models\Remittance;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class RemittanceService
{
    public function __construct(private Remittance $remittanceQuery)
    {
    }

    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function index(): JsonResponse
    {
        $data = $this->remittanceQuery->query()->get();
        return Datatables::of($data)
            ->editColumn('commodity_id', fn($data) => $data->commodity->name ?? null)
//            ->editColumn('freight_pic', function ($data){
//                $image = URL::to("storage/$data->freight_pic");
//                return '<img src='.$image.'>';
//            })
            ->make(true);
    }

    /**
     * @param $attributes
     * @return Builder|Model
     */
    public function store($attributes): Model|Builder
    {
        $file = isset($attributes['freight_pic']) && !empty($attributes['freight_pic']) ? $attributes['freight_pic'] : null;
        if ($file) {
            $attributes['freight_pic'] = Storage::putFile('avatars', $file);
        }
        return $this->remittanceQuery->query()->create($attributes);
    }
}
