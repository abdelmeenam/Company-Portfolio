<?php

namespace App\Http\Repositories\AdminRepositories;

use App\Http\Interfaces\AdminInterfaces\PortfolioInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\Portfolio;
use RealRashid\SweetAlert\Facades\Alert;

class PortfolioRepository implements PortfolioInterface
{    use ImagesTrait;

    public function index()
    {
        $portfolios = Portfolio::get();
        return view('Admin.portfolio.portfolios', compact('portfolios'));
    }

    public function create()
    {
        return view('Admin.portfolio.create');
    }

    public function store( $request)
    {
        $name = $request->name;
        $slug = $request->slug;
        $description = $request->description;
        $client = $request->client;
        $category = $request->category;
        $icon = $request->icon;

        $new_icon_name = time() . '-Portfolio.png';
        $this->uploadImage($icon, $new_icon_name, 'portfolios');
        Portfolio::create([
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'client' => $client,
            'category' => $category,
            'icon' => $new_icon_name,

        ]);
        Alert::success('Success', 'Portfolio was added');
        return redirect()->back();
    }

    public function edit($portfolio_id)
    {
        $portfolio = Portfolio::find($portfolio_id);
        return view('Admin.portfolio.edit', compact('portfolio'));
    }

    public function update( $request)
    {
        $portfolio = Portfolio::find($request->portfolio_id);
        if ($request->has('icon')) {
            //set new image and upload
            $oldFile = $portfolio->icon;
            $fileName = time() . '-Portfolio.png';
            $file = $request->icon;
            $this->uploadImage($file, $fileName, 'portfolios', $oldFile);
        }

        $name = $request->name;
        $slug = $request->slug;
        $description = $request->description;
        $client = $request->client;
        $category = $request->category;
        $portfolio->update([
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'client' => $client,
            'category' => $category,
            'icon' => (isset($fileName)) ? $fileName : $portfolio->getRawOriginal('icon')
        ]);
        Alert::success('Success', 'Portfolio was updated');
        return redirect()->back();
    }


    public function delete( $request)
    {
        $portfolio = Portfolio::find($request->portfolio_id);
        unlink(public_path($portfolio->icon));
        $portfolio->delete();

        Alert::success('Success', 'Portfolio was deleted');
        return redirect()->back();
    }

}
