@extends("layouts.layout")
@section("title","Dashboard")
@section("head")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registerLogin.css') }}" />
@endsection
@section("content")
    <!-- add car section -->
    <br><br>
    <section class="container mx-auto mt-5 wow pulse">
        <div class="divWhite formWidth p-4" style="border-radius: 20px;">
            <h4 class="text-center" >Edit information</h4>
            <br>
            <form action="{{ route('shop.update', $item->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <!-- car model -->
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control border-2" id="floatingInput" name="name" placeholder="name@example.com">
                    <label for="floatingInput">Car model*</label>
                </div>
                <!-- brand name -->
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control border-2" id="floatingInput" name="brand" placeholder="name@example.com">
                    <label for="floatingInput">Brand*</label>
                </div>
                <!-- price -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control border-2" id="floatingPassword" name="price" placeholder="Password">
                    <label for="floatingPassword">Price*</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="file" class="form-control border-2" id="floatingPassword" name="image" accept="image/png, image/jpeg" required>
                    <label for="floatingPassword">image*</label>
                </div>

                <div class="d-grid gap-1">
                    <button class="btn btn-success" type="submit">
                        <span> <i class="fa-solid fa-right-to-bracket"></i> Update </span>
                    </button>
                </div>

            </form>
        </div>
    </section>
@endsection
