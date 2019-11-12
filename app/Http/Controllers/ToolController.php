<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;


class ToolController extends Controller
{
    public function index()
    {
        if (request()->tags)
        {
            $result = Tool::whereRaw('JSON_CONTAINS(tags, \'["'.request()->tags.'"]\')')->get();
        }else
        {
            $result = Tool::all();
        }
        return $result;

    }
    public function create(Request $request)
    {
        $request['tags'] = json_encode($request->tags);
        try {
           $new = Tool::create($request->all());
           return $new;
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }
    public function delete($id)
    {
        try {
            Tool::where('id', $id)->delete();
            return 'Tool deleted';
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }
}
