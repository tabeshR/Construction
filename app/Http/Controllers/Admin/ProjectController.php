<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'en_name'=>'nullable',
            'en_description'=>'nullable',
            'category_id'=>'required|integer'
        ]);
        $file = $request->file('img');
        if(isset($file)){
            $file->move(public_path('img/projects'),$file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }
        Project::create($data);
        alert()->success('عملیات با موفقیت انجام شد');
        return redirect(route('admin.projects.index'));
    }



    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    public function update(Request $request, Project $project)
    {

        $data = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'en_name'=>'nullable',
            'en_description'=>'nullable',
            'category_id'=>'required'
        ]);
        $file = $request->file('img');
        if(isset($file)){
            $path =public_path('img/sliders/'.$project->img);
            if(File::exists($path)){
                File::delete($path);
            }
            $file->move(public_path('img/projects'),$file->getClientOriginalName());
            $data['img'] = $file->getClientOriginalName();
        }

        $project->update($data);
        alert()->success('ویرایش با موفقیت انجام شد');
        return redirect(route('admin.projects.index'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}
