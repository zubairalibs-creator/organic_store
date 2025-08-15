@include('home.css')




@include('home.header')



<div  style="margin-top: 100px;">  <!-- yeh sirf space dega navbar ke neeche, no background -->
  <div  class="bg-light" style=" font-weight: bold; padding: 20px 30px; text-align: left; height: 150px;">
    <h1>Special Deals & Offers</h1>
    <p>Limited-time deals on your favorite products. Don't miss out!</p>
  </div>
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
    
  </div>


  

   

  
  
</div>







@include('home.footer')


@include('home.js')