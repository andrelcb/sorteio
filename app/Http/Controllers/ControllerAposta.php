<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aposta;

class ControllerAposta extends Controller
{

    private $aposta;

    public function __construct(aposta $aposta)
    {
        $this->aposta = $aposta;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->aposta->all();
        if ($result) {
            return view(
                'admin/apostas/lista',
                [
                    "script" => "",
                    'results' => $result
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numerosAposta = explode(',', $request->input('aposta'));
        $aux = '';
        foreach ($numerosAposta as $value) {
            if($aux == $value) {
                return response()->json(["error", "Numeros da aposta estão inválido. Favor nao repetir os numero ex: 112456"]);
                exit;
            }
            if($value > 60 ) {
                return response()->json(["error", "A dezena nao pode ser maior que 60"]);
                exit;
            }
            $aux = $value;

        }
        $data = $request->all();

        try {
            $aposta = $this->aposta->create($data);

            if ($aposta) {
                return response()->json(["success", "Aposta cadastrada com sucesso."]);
            }
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
