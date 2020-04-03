<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\Response;
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
        $concert = new Concert;

        $concert->band = $request->input('band');
        $concert->date = $request->input('date');
        $concert->location = $request->input('location');

        $concert->save();

        return response($concert, 201);
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
        $concert = Concert::find($request->input('id'));

        $concert->band = $request->input('band');
        $concert->date = $request->input('date');
        $concert->location = $request->input('location');

        $concert->save();

        return response($concert, 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function destroy($id)
    {
        $concert = Concert::find($id);
        $concert->delete();

        return response(null,204);
    }
}
