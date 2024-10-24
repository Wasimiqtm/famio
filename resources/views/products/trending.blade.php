<div class="product-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                <div class="site-heading-inline">
                    <h2 class="site-title">Trending Items</h2>
                    <a href="#">View More <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
            <div class="product-slider owl-carousel owl-theme">
                @foreach($trendingItems as $item)
                <div class="product-item">
                    <div class="product-img">
                        <span class="type new">New</span>
                        <a href="#">
                            <img src="{{ asset('uploads/products/' . $item->product_image) }}" alt="{{ $item->product_name }}">
                        </a>
                        <div class="product-action-wrap">
                            <div class="product-action">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                <a href="#" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">
                            <a href="#">{{ $item->product_name }}</a>
                        </h3>
                        <div class="product-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span>${{ number_format($item->product_price, 2) }}</span>
                            </div>
                            <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart">
                                <i class="far fa-shopping-bag"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
