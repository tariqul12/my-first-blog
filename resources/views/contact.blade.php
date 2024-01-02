@extends("master")

@section("title")
  contact page
@endsection()
@section("body")
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0 bg-success shadow">
                        <form action="{{route('make-full-name')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for="">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('message')}}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" value="Make Full Name" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
