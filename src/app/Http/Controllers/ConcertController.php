<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;

class ConcertController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return response()->json('index concerts');
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
        return response()->json('show concert with ID: ' . $id);
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
        return response()->json('destroy concert with ID: ' . $id);
    }
}
