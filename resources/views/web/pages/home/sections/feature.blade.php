<section class="blog blog-block">

    <!--Header-->

    <header>
        <div class="container">
            <h2 class="title">Featured categories</h2>
            <div class="text">
                <p>We just keep things minimal. <a href="category.html" class="btn btn-main">View more</a></p>
            </div>
        </div>
    </header>

    <!--Content-->

    <div class="container">

        <div class="scroll-wrapper">

            <div class="row scroll text-center">

                @foreach ($categories as $category)
                    
                
                <div class="col-md-4">
                    <article data-3d>
                        <a href="products-grid.html">
                            <div class="image">
                                <img src="{{ imageShow($category->image) }}" alt="" />
                            </div>
                            <div class="entry entry-block">
                            @foreach ($category->products as $product)
                                <div class="label">{{$product->title}} Collection</div>
                            @endforeach
                                <div class="title">
                                    <h2 class="h4">{{$category->title}}</h2>
                                </div>
                                <div class="description d-none d-sm-block">
                                    <p>
                                        {{$category->description}}
                                    </p>
                                </div>
                            </div>
                            <div class="show-more">
                                <span class="btn btn-clean">Shop now</span>
                            </div>
                        </a>
                    </article>
                </div>
                
                @endforeach
                
                
            </div><!--/row-->
        </div>

    </div><!--/container-->

</section>
