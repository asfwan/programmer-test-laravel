<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $tokens = Token::all();
            $response = [
                "status" => "success",
                "data" => $tokens,
                "pagination" => [
                    "total_count" => count($tokens),
                ],
            ];
            return response()->json($response, 200);
        } catch (Throwable $e) {
            report($e);
            $response = [
                "status" => "error",
                "data" => $e,
            ];
            return response()->json($response, 502);
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
        //
        try {
            $token = Token::create($request->all());
            $response = [
                "status" => "success",
                "data" => $token,
            ];
            return response()->json($response, 200);
        } catch (Throwable $e) {
            report($e);
            $response = [
                "status" => "error",
                "data" => $e,
            ];
            return response()->json($response, 502);
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
