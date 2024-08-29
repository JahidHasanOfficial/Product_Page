<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Proxima+Nova:wght@400;700&display=swap">
</head>

<body>
    <div class="product-page">
        <section class="columns-parent">
            <header class="columns">
                <div class="fashionhub-wrapper">
                    <a class="fashionhub">FashionHub</a>
                </div>
                <div class="right-column">
                    <div class="rectangle-parent">
                        <div class="frame-child"></div>
                        <img class="image-icon" loading="lazy" alt="" src="{{ asset('assets/image/frame.svg') }}" />
                    </div>
                    <div class="wrapper">
                        <img class="icon" loading="lazy" alt="" src="{{ asset('assets/image/3.svg') }}" />
                    </div>
                </div>
            </header>

            <div class="carousel-navigation">
                <div class="rectangle-group">
                    <div class="carousel">
                        <div class="carousel-large">
                            <img id="largeImage" src="{{ asset('product-image/' . $products->first()->image) }}" alt="Large Image">
                        </div>
                        <div class="carousel-thumbnails">
                            @foreach ($products as $product)
                                <img class="thumbnail" src="{{ asset('product-image/'.$product->image) }}" alt="Thumbnail {{ $loop->index + 1 }}"
                                    onclick="updateProductDetails('{{ $product->image }}', '{{ $product->name }}', '{{ $product->description }}', '{{ $product->price }}', '{{ $product->subtitle }}')">
                            @endforeach
                        </div>
                    </div>

                    <script>
                        function updateProductDetails(image, name, description, price, subtitle) {
                            // Update large image
                            document.getElementById('largeImage').src = '{{ asset('product-image') }}/' + image;

                            // Update product details
                            document.getElementById('productName').innerText = name;
                            document.getElementById('productDescription').innerText = description;
                            document.getElementById('productPrice').innerText = price;
                            document.getElementById('productSubtitle').innerText = subtitle;
                        }
                    </script>

                    <div class="frame-parent">
                        <div class="home-parent">
                            <a class="home" href="#">Home</a>
                            <img class="category-list-icon" alt="Home Icon" src="{{ asset('assets/image/frame-1.svg') }}" />
                            <a class="decoration" href="#">Decoration</a>
                            <img class="category-list-icon" alt="Decoration Icon" src="{{ asset('assets/image/frame-1.svg') }}" />
                            <a class="furniture" href="#">Furniture</a>
                            <img class="category-list-icon" alt="Furniture Icon" src="{{ asset('assets/image/frame-1.svg') }}" />
                            <a class="storage" href="#">Storage</a>
                            <img class="category-list-icon" alt="Storage Icon" src="{{ asset('assets/image/frame-1.svg') }}" />
                            <a class="sideboard" href="#">Sideboard</a>
                        </div>

                        <div class="product-title">
                            <h2 id="productName" class="embrace-sideboard">Embrace Sideboard</h2>
                            <div id="productSubtitle" class="teixeira-design-studio">Teixeira Design Studio</div>
                        </div>
                        <div class="frame-inner"></div>
                        <div class="rating-container-wrapper">
                            <div class="rating-container">
                                <div class="rating-stars">
                                    <b id="productPrice" class="stars">$71.56</b>
                                </div>
                                <div class="recommendation">
                                    <div class="review-count-parent">
                                        <div class="review-count">
                                            <img class="category-list-icon" alt="" src="{{ asset('assets/image/frame-5.svg') }}" />
                                            <div class="recommendation-label">4.8</div>
                                        </div>
                                        <button class="review-count1">
                                            <img class="category-list-icon" alt="" src="{{ asset('assets/image/frame-6.svg') }}" />
                                            <div class="reviews">67 Reviews</div>
                                        </button>
                                    </div>
                                    <div class="of-buyers-have-container">
                                        <span class="span">93%</span>
                                        <span class="of-buyers-have">of buyers have recommended this.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-inner"></div>
                        <div class="choose-a-color">Choose a Color</div>
                        <div class="color-options">
                            <div class="color-swatches-parent">
                                <div class="color-swatches">
                                    <div class="color-swatch" style="background-color: #ECDECC;"></div>
                                    <div class="color-swatch" style="background-color: #BBD278;"></div>
                                    <div class="color-swatch" style="background-color: #BBC1F8;"></div>
                                    <div class="color-swatch" style="background-color: #FFD3F8;"></div>
                                    <div class="color-swatch" style="background-color: #FFD3F8;"></div>
                                </div>
                                <div class="rectangle-div"></div>
                            </div>
                        </div>
                        <div class="frame-inner"></div>
                        <div class="size-picker">
                            <div class="choose-a-size">Choose a Size</div>
                            <div class="size-options">
                                <button class="size-option" data-size="small">Small</button>
                                <button class="size-option" data-size="medium">Medium</button>
                                <button class="size-option" data-size="large">Large</button>
                                <button class="size-option" data-size="xlarge">Extra Large</button>
                                <button class="size-option" data-size="xxlarge">XXL</button>
                            </div>
                        </div>
                        <div class="frame-inner"></div>
                        <div class="content">
                            <div class="rectangle-parent4">
                                <button class="decrement-button">-</button>
                                <b class="quantity-label">3</b>
                                <button class="increment-button">+</button>
                            </div>
                            <div class="rectangle-parent5">
                                <div class="cart-label">$268.35</div>
                                <button class="add-button">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-details">
            <div class="main-parent">
                <div class="main">
                    <div class="product-info">
                        <div class="description-container">
                            <div class="title-container">
                                <div class="description-icon"></div>
                                <div class="description">Description</div>
                            </div>
                        </div>
                        <div class="description-image"></div>
                    </div>
                </div>
                <div class="product-description-parent">
                    <h3 class="product-description">Product Description</h3>
                    <div id="productDescription" class="description-content">
                        {{ $products->first()->description }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
