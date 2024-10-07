<section class="products">

    <!--Header-->

    <header>
        <div class="container">
            <h2 class="title">Popular products</h2>
            <div class="text">
                <p>
                    Find your perfect match <a href="products-grid.html" class="btn btn-main">View all</a>
                </p>
            </div>
        </div>
    </header>

    <!--Content-->

    <div class="container">

        <div class="row">

            <!--Product item-->
            @foreach ($products as $product)
                <div class="col-6 col-lg-4">
                    <article>
                        <div class="info">
                            <span class="add-favorite">
                                <a href="javascript:void(0);" data-title="Add to favorites"
                                    data-title-added="Added to favorites list">
                                    <i class="icon icon-heart"></i>
                                </a>
                            </span>
                            <span>
                                <a href="#productid1" class="mfp-open" data-title="Quick wiew">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        {{-- @dd($product->images->first()->image) --}}
                        @php
                            $discount = explode('.', $product->discount);
                            $discount = $discount[0];
                        @endphp
                        <div class="figure-grid">
                            @if ($product->discount_type == 'percent')
                            <span class="badge badge-warning">-{{ $discount }}%</span>
                            @else
                            <span class="badge badge-warning">-{{ $discount }} Tk</span>
                            @endif
                            <div class="image">
                                <a href="product.html">
                                    <img src="{{ imageShow($product->images->first()->image) }}" alt="image" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">{{$product->title}}</a>
                                </h2>
                                <sub>$ {{ $product->price }}</sub>
                                <sup>$ {{ $product->special_price }}</sup>
                                <span class="description clearfix">
                                    {{$product->description}}
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

        </div> <!--/row-->

    </div>

</section>
