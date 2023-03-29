<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatatabalesRequest;
use App\Modules\Users\UsersService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct(
        private readonly UsersService $service
    )
    {

    }

    public function index(DatatabalesRequest $request):JsonResponse
    {

        $data =$request ->data();
        dd($data);
        try{
            return response()->json($this->service->index($request->$data()));
        }catch(Exception $error){

            return response()->json(
                [
                    "exception" => get_class($error),
                    "errors" => $error->getMessage()
                ],
                Response::HTTP_BAD_REQUEST
            );
        }


    }
}
