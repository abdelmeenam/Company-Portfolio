<?php
namespace App\Http\Repositories\AdminRepositories;


use App\Http\Interfaces\AdminInterfaces\ServiceInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceRepository implements ServiceInterface{

    use ImagesTrait;

    public function index()
    {
        $services = Service::get();
        return view('Admin.service.services', compact('services'));
    }

    public function create()
    {
        return view('Admin.service.create');
    }

    public function store($request)
    {
        $name = $request->name;
        $description = $request->description;
        $icon = $request->icon;
        $new_icon_name = time() . '-Service.png';
        $this->uploadImage($icon, $new_icon_name, 'services');
        Service::create([
            'name' => $name,
            'description' => $description,
            'icon' => $new_icon_name,

        ]);
        Alert::success('Success', 'Service was added');
        return redirect()->back();
    }

    public function edit($service_id)
    {
        $service = Service::find($service_id);
        return view('Admin.service.edit', compact('service'));
    }

    public function update($request)
    {
        $service = Service::find($request->service_id);
        if ($request->has('icon')) {
            //set new image and upload
            $oldFile = $service->icon;
            $fileName = time() . '-Service.png';
            $file = $request->icon;
            $this->uploadImage($file, $fileName, 'services', $oldFile);
        }
        $name = $request->name;
        $description = $request->description;
        $service->update([
            'name' => $name,
            'description' => $description,
            'icon' => (isset($fileName)) ? $fileName : $service->getRawOriginal('icon')

        ]);
        Alert::success('Success', 'Service was updated');
        return redirect()->back();
    }

    public function delete( $request)
    {
        $service = Service::find($request->service_id);
        unlink(public_path($service->icon));
        $service->delete();

        Alert::success('Success', 'Service was deleted');
        return redirect()->back();
    }

}
