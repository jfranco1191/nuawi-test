@extends( "layout.layout" )
@section( "content" )
<div class="container-fluid">
    <h1 class="mt-4">User</h1>
    <div class="box">
        <div class="box-body mt-2">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->name}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

