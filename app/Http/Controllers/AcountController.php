<?php

namespace App\Http\Controllers;

use App\Models\Acount;
use App\Repositories\AcountRepository;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;

class AcountController extends Controller
{

    private $acountRepository, $clientRepository;

    public function __construct(AcountRepository $acountRepository, ClientRepository $clientRepository)
    {
        $this->acountRepository = $acountRepository;
        $this->clientRepository = $clientRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $acounts = $this->acountRepository->list();

            return response()->json([
                'error' => null,
                'ok' => true,
                'status' => 200,
                'message' => 'Success',
                'data' => $acounts
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error',
                'ok' => false,
                'status' => 500,
                'message' => 'Ha ocurrido un error',
                'data' => null
            ], 500);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $requestClient = $request->only(['client']);
            $client = $this->clientRepository->create($requestClient['client']);
            $acount = [
                'balance' => $request->balance,
                'type' => $request->type,
                'holder_id' => $client->id
            ];
            $acount = $this->acountRepository->create($acount);
            return response()->json([
                'error' => null,
                'ok' => true,
                'status' => 201,
                'message' => 'Cuenta creada',
                'data' => $acount
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error',
                'ok' => false,
                'status' => 500,
                'message' => 'Ha ocurrido un error',
                'data' => null
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function show(Acount $acount)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acount $acount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acount $acount)
    {
        //
    }
}
