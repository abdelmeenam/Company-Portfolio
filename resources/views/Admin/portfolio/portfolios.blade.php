@include('Admin.assets.navbar')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Service's Table</h4>
                                    <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary">Add New Portfolio</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>icon</th>
                                        <th>description</th>
                                        <th>client</th>
                                        <th>category</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{$portfolio->name}}</td>
                                            <td>{{$portfolio->slug}}</td>
                                            <td> <img width="150px" src="{{asset($portfolio->icon) }} "></td>
                                            <td>{{$portfolio->description}}</td>
                                            <td>{{$portfolio->client}}</td>
                                            <td>{{$portfolio->category}}</td>
                                            <td class="text-center">
                                                <form method="post" action="{{route('admin.portfolio.delete')}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="portfolio_id" value="{{$portfolio->id}}">
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </button>
                                                </form>
                                            </td>

                                            <td>
                                                <a href="{{route('admin.portfolio.edit' , [$portfolio->id ])}}">Edit</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@include('Admin.assets.footer')

