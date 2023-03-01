<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\Admin\NewsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Library\Helper;
use Carbon\Carbon;

class NewsController extends Controller
{

  public function getlist()
  {
    $news = News::orderBy('id', 'DESC')->get();
    return view('admin.news.list')
      ->with('news', $news);
  }
  public function getAdd()
  {
    return view('admin.news.add');
  }
  public function postAdd(NewsRequest $request)
  {
    $input = $request->except('_token');
    $input['status'] = $request->has('status');

    if ($request->hasfile('image')) {
      $address = "assets/upload";
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = md5(microtime()) . ".$extension";
      $request->file('image')->move($address, $fileName);
      $input['image'] = $fileName;
    }
    if ($request->get('published_at')) {
      $date = explode('/', $request->get('published_at'));
      $s = jmktime(0, 0, 0, Helper::persian2LatinDigit($date[1]), Helper::persian2LatinDigit($date[2]), Helper::persian2LatinDigit($date[0]));
      $b = jalali_to_gregorian($date[0], $date[1], $date[2]);
      //        $hour = explode(':', Help::persian2LatinDigit($input['hour']));
      $date = Carbon::create($b[0], $b[1], $b[2]);
      $input['published_at'] = $date;
    }

    $news = News::create($input);
    return Redirect::action([NewsController::class, 'getList']);
  }
  public function getEdit($id)
  {
    $data = News::findOrfail($id);
    return view('admin.news.edit')
      ->with('data', $data);
  }
  public function postEdit($id, NewsRequest $request)
  {
    $input = $request->except('_token');
    $news = News::findOrfail($id);
    $input['status'] = $request->has('status');

    if ($request->get('published_at')) {

      $date = explode('/', $request->get('published_at'));
      $s = jmktime(0, 0, 0, Helper::persian2LatinDigit($date[1]), Helper::persian2LatinDigit($date[2]), Helper::persian2LatinDigit($date[0]));
      $b = jalali_to_gregorian($date[0], $date[1], $date[2]);

      $date = Carbon::create($b[0], $b[1], $b[2]);
      $input['published_at'] = $date;
    }

    if ($request->hasFile('image')) {
      $path = 'assets/upload';
      File::delete($path . $news->image);

      $extension = $request->file('image')->getClientOriginalExtension();

      if (true) {
        $fileName = md5(microtime()) . ".$extension";
        $request->file('image')->move($path, $fileName);
        $input['image'] = $fileName;
      } else {
        return Redirect::back()->with('error', 'فابل ارسالی صحیح نیست');
      }
    } else {
      $input['image'] = $news->image;
    }

    if (array_key_exists('status', $input) && $input['status'] == "on") {
      $input['status'] = 1;
    } else {
      $input['status'] = 0;
    }

    $news->update($input);
    return Redirect::action([NewsController::class, 'getList']);
  }

  public function getDelete($id)
  {
    News::find($id)->delete();
    return Redirect::action([NewsController::class, 'getList']);
  }
}
