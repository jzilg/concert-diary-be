<?php

namespace App\Http\Controllers;

class ConcertController extends Controller
{
    public function create($concert)
    {
        return 'Create a Concert';
    }

    public function readAll()
    {
        return 'Get all Concerts';
    }

    public function read($id)
    {
        return 'Get Concert with ID: ' . $id;
    }

    public function update($concert)
    {
        return 'Update a Concert';
    }

    public function delete($id)
    {
        return 'Delete a Concert';
    }
}
