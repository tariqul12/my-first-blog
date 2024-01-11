@extends("master")
@section("title")
    Manage Blog
@endsection
@section("body")
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                           Manage Blog page
                        </div>
                        <span class="text-danger d-block text-end">{{session('message')}}</span>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>sl</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img width="100" height="100" src="{{asset($blog->image)}}" alt="">
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success me-2">Edit</a>

{{--                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger">Delete</a>--}}
                                        <form  action="{{route('blog.delete')}}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$blog->id}}" name="id">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
