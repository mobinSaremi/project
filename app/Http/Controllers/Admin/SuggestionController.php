<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Admin\SuggestionRequest;
use App\Models\Suggestion;
use Illuminate\Support\Facades\File;

class SuggestionController extends Controller
{
    public function getList()
    {
        $suggest = Suggestion::orderBy('id', 'DESC')->get();
        return view('admin.suggestion.list')
            ->with('sugges', $suggest);
    }
    public function getAdd()
    {
        return view('admin.suggestion.add');
    }
    public function postAdd(SuggestionRequest $request)
    {
        $input = $request->all();
        $input['status'] = $request->has('status');
        if ($request->hasfile('image')) {
            $address = "assets/upload";
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = md5(microtime()) . ".$extension";
            $request->file('image')->move($address, $fileName);
            $input['image'] = $fileName;
        }
        Suggestion::create($input);
        return Redirect::action([SuggestionController::class, 'getList']);
    }
    public function getEdit($id)
    {
        $suggestion = Suggestion::all();
        $data = Suggestion::findOrfail($id);
        return view('admin.suggestion.edit')
            ->with('data', $data)
            ->with('suggestions', $suggestion);
    }
    public function postEdit($id, SuggestionRequest $request)
    {
        $input = $request->all();
        $suggestion = Suggestion::findOrfail($id);
        $input['status'] = $request->has('status');
        if ($request->hasFile('image')) {
            $path = 'assets/upload';
            File::delete($path . $suggestion->image);

            $extension = $request->file('image')->getClientOriginalExtension();

            if (true) {
                $fileName = md5(microtime()) . ".$extension";
                $request->file('image')->move($path, $fileName);
                $input['image'] = $fileName;
            } else {
                return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
            }
        } else {
            $input['image'] = $suggestion->image;
        }


        $suggestion->update($input);
        return Redirect::action([SuggestionController::class, 'getList']);
    }
    public function getDelete($id)
    {
        Suggestion::find($id)->delete();
        return Redirect::action([SuggestionController::class, 'getList']);
    }
}
