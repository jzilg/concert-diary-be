<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concert;

class ConcertController extends Controller
{
    private static function concertToJson($concert)
    {
        $concert->supportBands = explode(',', $concert->supportBands);
        $concert->companions = explode(',', $concert->companions);

        return $concert;
    }

    /**
     * @return string
     */
    public function index()
    {
        $concerts = Concert::all();

        foreach ($concerts as $concert) {
            self::concertToJson($concert);
        }

        return response($concerts);
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
        $concert->supportBands = implode(',', $request->input('supportBands'));
        $concert->location = $request->input('location');
        $concert->companions = implode(',', $request->input('companions'));

        $concert->save();

        self::concertToJson($concert);

        return response($concert, 201);
    }

    /**
     * @param int $id
     * @return string
     */
    public function show($id)
    {
        $concert = Concert::find($id);

        if ($concert) {
            self::concertToJson($concert);
            return response()->json($concert);
        }

        return response()->json('Concert with ID ' . $id . ' not found', 404);
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
        $concert->supportBands = implode(',', $request->input('supportBands'));
        $concert->location = $request->input('location');
        $concert->companions = implode(',', $request->input('companions'));

        $concert->save();

        self::concertToJson($concert);

        return response($concert, 200);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $concert = Concert::find($id);
        $concert->delete();

        return response()->json('Concert with ID ' . $id . ' deleted');
    }
}
