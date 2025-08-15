


<!-- Bootstrap CSS & Icons -->


@include('home.css')

<style>
       body {
     
        margin: 0;
  padding: 20px;
    }
</style>





@include('home.header')

<div class="container-fluid mt-5 hero-section py-4">
  <div class="hero-container">
    <h1 class="fs-2 fs-md-1">Bakery</h1>
    <p class="mb-0 fs-6 fs-md-5">Freshly baked bread and pastries</p>
  </div>
</div>



<!-- Mobile Filter Button -->
<div class="d-md-none mb-3">
  <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#mobileFilter">
    <i class="bi bi-funnel-fill"></i> Filter Options
  </button>
</div>

<div class="main-section">

  <!-- Sidebar (Desktop) -->
  <div class="filter-sidebar d-none d-md-block">
    <h5 class="mt-5">Search</h5>
    <input type="search" placeholder="Search" class="form-control mb-3 mt-4">
    <hr class="mt-4">

    <h5 class="mt-4">Sort By</h5>
    <select class="form-select mb-3">
      <option>Feature</option>
      <option>Low</option>
      <option>High</option>
      <option>Custom</option>
    </select>

    <hr class="mt-4">
    <h5 class="mt-3">Price Range</h5>
    <div class="d-flex justify-content-between mb-2 mt-4">
      <span>$0</span>
      <span>$10</span>
    </div>
    <input type="range" min="0" max="10" class="form-range mt-3">
  </div>

  <!-- Sidebar (Mobile - Collapsible) -->
  <div class="collapse d-md-none mb-3" id="mobileFilter">
    <div class="filter-sidebar-mobile">
      <h5>Search</h5>
      <input type="search" placeholder="Search" class="form-control mb-3">

      <h5>Sort By</h5>
      <select class="form-select mb-3">
        <option>Feature</option>
        <option>Low</option>
        <option>High</option>
        <option>Custom</option>
      </select>

      <h5>Price Range</h5>
      <div class="d-flex justify-content-between mb-2">
        <span>$0</span>
        <span>$10</span>
      </div>
      <input type="range" min="0" max="10" class="form-range">
    </div>
  </div>

  <!-- Products -->
  <div class="main-div flex-grow-1">
    <div class="row g-4">

      <!-- Example Product 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="product-col">
          <div class="product">
            <div class="product-image-wrapper">
              <img src="{{asset('./images/vg.jpg')}}" alt="Fruits & Vegetables" />
              <div class="price-badge-left"><button>Organic</button></div>
              <div class="price-badge-right"><button>Sale</button></div>
            </div>
            <div class="product-details">
              <div class="product-title-row d-flex justify-content-between align-items-center">
                <h2 class="fs-5 mb-0">Organic Bananas</h2>
                <i class="bi bi-heart heart-btn"></i>
              </div>
              <div class="rating-row text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="text-dark">(4.7)</span>
              </div>
              <p class="unit">bunch</p>
              <div class="price-row d-flex gap-2">
                <h4 class="mb-0">$28.56</h4>
                <p class="text-muted text-decoration-line-through mb-0">$32.25</p>
              </div>
              <div class="add-cart-btn mt-auto">
                <button class="btn btn-success w-100"><i class="bi bi-cart-fill"></i> Add To Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- You can duplicate the above product div for more products -->
       <div class="col-12 col-md-6 col-lg-4">
        <div class="product-col">
          <div class="product">
            <div class="product-image-wrapper">
              <img src="{{asset('./images/vg.jpg')}}" alt="Fruits & Vegetables" />
              <div class="price-badge-left"><button>Organic</button></div>
              <div class="price-badge-right"><button>Sale</button></div>
            </div>
            <div class="product-details">
              <div class="product-title-row d-flex justify-content-between align-items-center">
                <h2 class="fs-5 mb-0">Organic Bananas</h2>
                <i class="bi bi-heart heart-btn"></i>
              </div>
              <div class="rating-row text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="text-dark">(4.7)</span>
              </div>
              <p class="unit">bunch</p>
              <div class="price-row d-flex gap-2">
                <h4 class="mb-0">$28.56</h4>
                <p class="text-muted text-decoration-line-through mb-0">$32.25</p>
              </div>
              <div class="add-cart-btn mt-auto">
                <button class="btn btn-success w-100"><i class="bi bi-cart-fill"></i> Add To Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      

    </div>

    
  </div>
</div>

@include('home.footer')

<!-- Bootstrap JS -->
@include('home.js')

</body>
</html>
