<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Team\CreateTeamRequest;
use App\Http\Requests\Team\DeleteTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Service;
use App\Models\Team;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    use ImagesTrait;

    public function index()
    {
        $teams = Team::get();
        return view('Admin.team.teams', compact('teams'));
    }

    public function create()
    {
        return view('Admin.team.create');
    }

    public function store(CreateTeamRequest $request)
    {
        $name = $request->name;
        $title = $request->title;
        $image = $request->image;
        $new_icon_name = time() . '-Team.png';
        $this->uploadImage($image, $new_icon_name, 'teams');
        Team::create([
            'name' => $name,
            'title' => $title,
            'image' => $new_icon_name,

        ]);
        Alert::success('Success', 'Team was added');
        return redirect()->back();
    }
    public function delete(DeleteTeamRequest $request)
    {
        $Team = Team::find($request->team_id);
        unlink(public_path($Team->image));
        $Team->delete();

        Alert::success('Success', 'Team was deleted');
        return redirect()->back();
    }

    public function edit($team_id)
    {
        $team = Team::find($team_id);
        return view('Admin.team.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request)
    {
        $team = Team::find($request->team_id);
        if ($request->has('image')) {
            //set new image and upload
            $oldFile = $team->image;
            $fileName = time() . '-Image.png';
            $file = $request->image;
            $this->uploadImage($file, $fileName, 'teams', $oldFile);
        }

        $name = $request->name;
        $title = $request->title;
        $team->update([
            'name' => $name,
            'title' => $title,
            'image' => (isset($fileName)) ? $fileName : $team->getRawOriginal('image')

        ]);
        Alert::success('Success', 'Team was updated');
        return redirect()->back();
    }





}
