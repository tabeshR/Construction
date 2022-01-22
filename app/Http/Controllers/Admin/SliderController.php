<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'img'=>'required',
            'subject'=>'required',
            'description'=>'required',
            'en_subject'=>'nullable',
            'en_description'=>'nullable',
        ]);
        $file = $request->file('img');
        $file->move(public_path('img/sliders'),$file->getClientOriginalName());
        $data['img'] = $file->getClientOriginalName();
        Slider::create($data);
        alert()->success('عملیات با موفقیت انجام شد');
        return redirect(route('admin.sliders.index'));
    }



    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'subject'=>'required',
            'description'=>'required',
            'en_subject'=>'nullable',
            'en_description'=>'nullable',
        ]);
        $file = $request->file('img');
        if(isset($file)){
            $path =public_path('img/sliders/'.$slider->img);
            if(File::exists($path)){
                File::delete($path);
            }
            $file->move(public_path('img/sliders'),$file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }

        $slider->update($data);
        alert()->success('ویرایش با موفقیت انجام شد');
        return redirect(route('admin.sliders.index'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back();
    }
}
