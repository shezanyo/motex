@extends("layouts.layout")
@section("title","Dashboard")
@section("head")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section("content")
    <!-- shop car -->
    <section class="container mx-auto" style="margin-top: 70px;">
        <h2 class="text-center" style="margin-bottom: 30px;">Our Collections</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <!-- Loop through each item -->
            @foreach($items as $item)
                <div class="col">
                    <div class="card h-100 cardStyle">
                        <img src="images/latest/l1.jpg" class="card-img-top" alt="Image of {{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <h6>Brand: {{ $item->brand }}</h6>
                            <p class="card-text textRed">${{ $item->price }}</p>

                            <!-- buttons -->
                            <div class="">
                                <!-- add to cart button -->
                                <button type="button" class="btn btn-success btn-sm">Add cart</button>
                                <!-- edit button -->
                                <a href="{{ route('shop.edit', $item->id) }}">
                                    <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                </a>
                                <!-- delete -->
                                <form action="{{ route('shop.destroy', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
