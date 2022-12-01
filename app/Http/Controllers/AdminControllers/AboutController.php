<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\CreateAboutRequest;
use App\Http\Requests\About\DeleteAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    use ImagesTrait;

    public function index()
    {
        $abouts = About::get();
        return view('Admin.about.abouts', compact('abouts'));
    }

    public function create()
    {
        return view('Admin.about.create');
    }

    public function store(CreateAboutRequest $request)
    {
        $date = $request->date;
        $name = $request->name;
        $description = $request->description;
        $icon = $request->icon;
        $new_icon_name = time() . '-About.png';
        $this->uploadImage($icon, $new_icon_name, 'abouts');
        About::create([
            'name' => $name,
            'date' => $date,
            'description' => $description,
            'icon' => $new_icon_name,

        ]);
        Alert::success('Success', 'About was added');
        return redirect()->back();
    }


    public function delete(DeleteAboutRequest $request)
    {
        $about = About::find($request->about_id);
        unlink(public_path($about->icon));
        $about->delete();

        Alert::success('Success', 'About was deleted');
        return redirect()->back();
    }

    public function edit($about_id)
    {
        $about = About::find($about_id);
        return view('Admin.about.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request)
    {
        $about = About::find($request->about_id);
        if ($request->has('icon')) {
            //set new image and upload
            $oldFile = $about->icon;
            $fileName = time() . '-About.png';
            $file = $request->icon;
            $this->uploadImage($file, $fileName, 'abouts', $oldFile);
        }

        $name = $request->name;
        $date = $request->date;
        $description = $request->description;
        $about->update([
            'name' => $name,
            'date' => $date,
            'description' => $description,
            'icon' => (isset($fileName)) ? $fileName : $about->getRawOriginal('icon')
        ]);
        Alert::success('Success', 'About was updated');
        return redirect()->back();
    }

}
