@include('Admin.assets.navbar')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Update Service</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <li style="color: red">{{$error}}</li>
                                @endforeach
                            @endif

                            <form method="post" action="{{route('admin.team.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" value="{{$team->name  }}"  name="name" placeholder="name" >
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" value="{{$team->title  }}"  name="title" placeholder="title" >
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Image</span>
                                    </div>
                                    <input type="file" class="form-control" name="image" aria-label="With textarea">
                                </div>

                                <input type="hidden" name="team_id" value="{{$team->id}}">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('admin.team.all')}}" class="btn btn-primary">View All Team</a>

                            </form>

                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
@include('Admin.assets.footer')
