@extends("master")
@section("bitm")
    About page
@endsection
@section("body")
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{{asset($blog["img"])}}" height="300" alt="">
                        <div class="card-body">
                            <h4>{{$blog["title"]}}</h4>
                            <p>{{$blog["des"]}}</p>
                            <hr>
                            <a class="btn btn-success" href="">Details</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
