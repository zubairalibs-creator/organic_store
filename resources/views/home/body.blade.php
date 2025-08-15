<!-- Banner Section -->
<div class="banner-section">
  <div class="banner-image-wrapper">
    <img src="./images/banner.jpeg" alt="Banner Image" class="banner-image">
    <div class="overlay"></div>
  </div>
  <div class="banner-content">
    <h1>Fresh Groceries Delivered <br>to Your Doorstep</h1>
    <p>Shop from our wide selection of fresh, organic produce, dairy, meats, <br>and more. Enjoy same-day delivery and premium quality.</p>
    <div class="button-wrapper">
      <a href="#" class="btn-custom">
        Shop Now 
        <span class="arrow-icon">→</span>
      </a>
      <a href="#" class="btn-transparent">View Deals</a>
    </div>
  </div>
</div>







<!-- Shop Section -->
<div class="shop">
  <h1>Shop by Category</h1>
  <p>Browse our wide selection of fresh, high-quality products across various categories.</p>
</div>


<div class="main">
  <div class="div_deg">
    <a href="{{ url('/vegetable') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Fruits & Vegetables</h4>
          <p>Fresh product from local farms</p>
        </div>
      </div>
    </a>
  </div>

  <div class="div_deg">
    <a href="{{ url('/dairy') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Dairy & Eggs</h4>
          <p>Fresh milk, cheese yogurt and eggs</p>
        </div>
      </div>
    </a>
  </div>

  <div class="div_deg">
    <a href="{{ url('/seafood') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Meat & Seafood</h4>
          <p>Premium cuts and fresh catches</p>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="main">
  <div class="div_deg">
    <a href="{{ url('/bakery') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Bakery</h4>
          <p>Freshly baked bread and pastries</p>
        </div>
      </div>
    </a>
  </div>

  <div class="div_deg">
    <a href="{{ url('/beverages ') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Beverages</h4>
          <p>Refreshing drinks and juices</p>
        </div>
      </div>
    </a>
  </div>

  <div class="div_deg">
    <a href="{{ url('/snacks') }}">
      <div class="img-container">
        <img src="{{asset('./images/vk.png')}}" alt="Fruits & Vegetables" />
        <div class="text-content">
          <h4>Snacks</h4>
          <p>Delicious treats for any time</p>
        </div>
      </div>
    </a>
  </div>
</div>

<div class="featured-section">
  <h1>Featured Products</h1>
  <p>Browse our wide selection of fresh, high-quality products across various categories.</p>
</div>



<div class="main-div">
  <div class="row g-4">
    <!-- Product 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}">
           
            <div class="price-badge-right">
              <button>Organic</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$1.99</h4>
             
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
       <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>10% OFF</button>
            </div>
            <div class="price-badge-right">
              <button>Organic</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
           
            <div class="price-badge-right">
              <button>Organic</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
             
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>10% OFF</button>
            </div>
          
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class="row g-4 mt-4">
    <!-- Product 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
           
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
       <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
          
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
             
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  
  </div>
</div>

<hr>














<div class="promo-wrapper">
  <div class="promo-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Text Column -->
        <div class="col-12 col-md-6 promo-text mb-4 mb-md-0">
          <h1>Free Delivery on Your First Order</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod recusandae perferendis accusantium maiores incidunt ipsam, natus modi libero totam eligendi velit laudantium magnam temporibus et in, ipsa, iste nisi. Iusto.
          </p>
          <button class="btn btn-custom">FIRSTORDER</button>
        </div>

        <!-- Image Column -->
        <div class="col-12 col-md-6 promo-image text-center">
          <img src="{{asset('./images/order.jpg')}}" alt="Order Delivery" />
        </div>
      </div>
    </div>
  </div>
</div>



<div class="popular-products">
  <h1>Popular Products</h1>
  <p>Our best-selling products that customers keep coming back for.</p>
</div>


<div class="main-div">
  <div class="row g-4">
    <!-- Product 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
       <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class="row g-4 mt-4">
    <!-- Product 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
       <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    
  </div>
</div>

<div class="special-offers">
  <h1>Special Offers</h1>
  <p>Limited-time deals on your favorite products. Don't miss out!</p>
</div>

<div class="main-div">
  <div class="row g-4">
    <!-- Product 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}" 
                 alt="Organic Bananas"
                 onerror="this.onerror=null;this.src='{{ asset('./images/placeholder.png') }}';">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
       <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="product-col">
        <div class="product">
          <div class="product-image-wrapper">
            <img src="{{ asset('./images/vg.jpg') }}">
            <div class="price-badge-left">
              <button>Organic</button>
            </div>
            <div class="price-badge-right">
              <button>Sale</button>
            </div>
          </div>
          <div class="product-details">
            <div class="product-title-row">
              <h2>Organic Bananas</h2>
              <i class="bi bi-heart heart-btn"></i>
            </div>
            <div class="rating-row">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(4.7)</span>
            </div>
            <p class="unit">bunch</p>
            <div class="price-row">
              <h4>$2856.3</h4>
              <p>$3225.6</p>
            </div>
            <div class="add-cart-btn mt-auto">
              <button><i class="bi bi-cart-fill"></i> Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>


  
</div>




<div class="customer-testimonials">
  <h1>What Our Customers Say</h1>
  <p>Don't just take our word for it. Here's what our satisfied customers have to say.</p>
</div>

 <div class="Customer">


   <div class="custom-1">
    <div class="d-flex">
      <img src="https://i.pravatar.cc/80?img=15" alt="Sarah Johnson" />
      <div>
        <h4>Sarah Johnson</h4>
        <p class="text-muted mb-0">Health Enthusiast</p>
      </div>
    </div>

    <div class="icon">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
    </div>

    <p class="mt-3">Quisquam, fuga? Quo laudantium molestiae nihil cupiditate, doloribus deserunt! Exercitationem cumque consequuntur aliquid architecto, error eveniet laudantium.</p>
  </div>

  <div class="custom-1">
    <div class="d-flex">
      <img src="https://i.pravatar.cc/80?img=20" alt="Michael Chen" />
      <div>
        <h4>Michael Chen</h4>
        <p class="text-muted mb-0">Health Enthusiast</p>
      </div>
    </div>

    <div class="icon">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
    </div>

    <p class="mt-3">Quisquam, fuga? Quo laudantium molestiae nihil cupiditate, doloribus deserunt! Exercitationem cumque consequuntur aliquid architecto, error eveniet laudantium.</p>
  </div>

  <div class="custom-1">
    <div class="d-flex">
      <img src="https://i.pravatar.cc/80?img=5" alt="Michael Smith" />
      <div>
        <h4>Michael Smith</h4>
        <p class="text-muted mb-0">Busy Parent</p>
      </div>
    </div>

    <div class="icon">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-half"></i>
      <i class="bi bi-star"></i>
    </div>

    <p class="mt-3">Sapiente, molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, cupiditate maxime molestias omnis laborum!</p>
  </div>
</div>
