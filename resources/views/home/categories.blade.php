@include('home.css')




@include('home.header')



<div  style="margin-top: 100px;">  <!-- yeh sirf space dega navbar ke neeche, no background -->
  <div  class="bg-light" style=" font-weight: bold; padding: 20px 30px; text-align: left; height: 150px;">
    <h1>All Categories</h1>
    <p>Browse our wide selection of fresh, high-quality products</p>
  </div>
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


@include('home.footer')


@include('home.js')