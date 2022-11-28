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
                                    <h4>Create New portfolio</h4>
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <li style="color: red">{{$error}}</li>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form method="post" action="{{route('admin.portfolio.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="name" placeholder="Portfolio name" aria-label="Portfolio name">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="slug" placeholder="Portfolio slug" aria-label="Portfolio slug">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="description" placeholder="Portfolio description"  aria-label="description">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="client" placeholder="Portfolio client" aria-label="Portfolio client">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" name="category" placeholder="Portfolio category" aria-label="Portfolio category">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Image</span>
                                    </div>
                                    <input type="file" class="form-control" name="icon" aria-label="With textarea">
                                </div>

                                <button type="submit" class="btn btn-primary">Add Portfolio</button>
                                <a href="{{route('admin.portfolio.all')}}" class="btn btn-primary">View All portfolios</a>
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
