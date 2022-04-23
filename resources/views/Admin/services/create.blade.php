@include('Admin.assets.header')



        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">

                <div class="container">

                    <div class="row layout-top-spacing">

                        <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        @if($errors->any())
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger" role="alert">
                                                    {{$error}}
                                                </div>
                                            @endforeach
                                        @endif

                                        @if(\Illuminate\Support\Facades\Session::has('done'))
                                            <div class="alert alert-success" role="alert">
                                                {{\Illuminate\Support\Facades\Session::get('done')}}
                                            </div>
                                        @endif
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Service</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="post" action="{{route('admin.service.store')}}">
                                        @csrf
{{--                                                title ,	icone	, body--}}

                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5">title</span>
                                            </div>
                                            <input type="text" class="form-control" name="title" placeholder="title" aria-label="Username">
                                        </div>

                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5">icone</span>
                                            </div>
                                            <input type="text" class="form-control" name="icone" placeholder="icone" aria-label="Username">
                                        </div>

                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5">body</span>
                                            </div>
                                            <input type="text" class="form-control" name="body" placeholder="body" aria-label="Username">
                                        </div>





                                        <div class="input-group mb-4">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>

                                    </form>
                                </div>

{{--                                <div class="widget-content widget-content-area">--}}
{{--                                    <div class="input-group mb-4">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                            <span class="input-group-text" id="basic-addon5">@</span>--}}
{{--                                        </div>--}}
{{--                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">--}}
{{--                                    </div>--}}

{{--                                    <div class="input-group mb-5">--}}
{{--                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
{{--                                        <div class="input-group-append">--}}
{{--                                            <span class="input-group-text" id="basic-addon6">@example.com</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <label for="basic-url">Your vanity URL</label>--}}
{{--                                    <div class="input-group mb-4">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                            <span class="input-group-text" id="basic-addon7">https://</span>--}}
{{--                                        </div>--}}
{{--                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example.com/users/">--}}
{{--                                    </div>--}}

{{--                                    <div class="input-group mb-4">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                            <span class="input-group-text">$</span>--}}
{{--                                        </div>--}}
{{--                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">--}}
{{--                                        <div class="input-group-append">--}}
{{--                                            <span class="input-group-text">.00</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="input-group mb-4">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                            <span class="input-group-text">With textarea</span>--}}
{{--                                        </div>--}}
{{--                                        <textarea class="form-control" aria-label="With textarea"></textarea>--}}
{{--                                    </div>--}}


{{--                                </div>--}}

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
