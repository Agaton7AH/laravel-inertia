<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarZonaTipoRequest;
use App\Models\ZonaTipo;
use Illuminate\Http\Request;
use App\Http\Resources\ZonaTipoResource;

class ZonaTipoController extends Controller
{
    public function index(){
        return ZonaTipoResource::collection(ZonaTipo::all());
    }

    // public function store(Request $request){
    //     $zz = ZonaTipo::create($request->all());

    //     return response() -> json([
    //         'res' => true,
    //         'msg' => 'guardado bien',
    //         'id_zonas_tipo' => $zz->id_zonas_tipo
    //     ]);
    // }

    public function store(GuardarZonaTipoRequest $request)
    {
        ZonaTipo::create($request->all());
        return response() -> json([
                    'res' => true,
                    'msg' => 'guardado bien'
                ]);
    }
}
