<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;
use App\Concert;

class ConcertController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        $concerts = Concert::all();

        return response()->json($concerts);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        return response()->json('store concert');
    }

    /**
     * @param int $id
     * @return string
     */
    public function show($id)
    {
        $concert = Concert::find($id);

        return response()->json($concert);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function update(Request $request)
    {
        return response()->json('update concert with ID: ' . $request->id);
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy($id)
    {
        $concert = Concert::find($id);
        $concert->delete();

        return response('',204);
    }
}
