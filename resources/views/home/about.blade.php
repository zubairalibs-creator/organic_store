@include('home.css')


@include('home.header')

  <!-- About Section -->
  <div style="margin-top: 100px;">
    <div class="bg-light header-section py-4 ">
      <h1>About Green Bloom Grocery</h1>
      <p>Learn more about our mission and values.</p>
    </div>
  </div>

  <!-- Our Story -->
  <div class="our-story-row">
    <div class="our-story-col">
      <h2>Our Story</h2>
      <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quam, hic quod quis nulla atque temporibus natus voluptatibus amet, maiores beatae...</p>
      <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dicta vitae quae voluptas cupiditate aliquam...</p>
      <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati ipsa minima officia deserunt temporibus...</p>
    </div>
    <div class="our-story-col image-col">
      <img src="{{ asset('./images/story.jpg') }}" alt="Our story image">
    </div>
  </div>

  <!-- Features -->
  <div class="features-section">
    <div class="feature-card">
      <div class="icon-circle"><i class="bi bi-flower1"></i></div>
      <h4>Fresh & Organic</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="feature-card">
      <div class="icon-circle"><i class="bi bi-truck"></i></div>
      <h4>Fast Delivery</h4>
      <p>Quisquam, fuga? Quo laudantium molestiae nihil cupiditate.</p>
    </div>
    <div class="feature-card">
      <div class="icon-circle"><i class="bi bi-people"></i></div>
      <h4>Local Partnerships</h4>
      <p>Sapiente, molestiae. Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="feature-card">
      <div class="icon-circle"><i class="bi bi-check2-circle"></i></div>
      <h4>Quality Guarantee</h4>
      <p>Sapiente, molestiae. Lorem ipsum dolor sit amet.</p>
    </div>
  </div>

  <!-- Mission -->
  <div class="mission-container">
    <div class="mission-content">
      <h2>Our Mission</h2>
      <p>At Green Bloom Grocery, our mission is to revolutionize the way people shop for groceries...</p>
    </div>
    <div class="features-container">
      <div class="feature-item">
        <h4>Sustainability</h4>
        <p>We are committed to reducing our environmental impact through sustainable packaging, carbon-neutral delivery, and supporting regenerative farming practices.</p>
      </div>
      <div class="feature-item">
        <h4>Community</h4>
        <p>We believe in building strong relationships with our local farmers, producers, and customers to create a more resilient food system.</p>
      </div>
      <div class="feature-item">
        <h4>Accessibility</h4>
        <p>We strive to make high-quality, nutritious food accessible to everyone through fair pricing and convenient delivery options.</p>
      </div>
    </div>
  </div>

  <!-- Team -->
  <div class="team-section">
    <div class="team-heading">
      <h2>Meet Our Team</h2>
    </div>
    <div class="team-members">
      <div class="team-member">
        <img src="{{ asset('./images/photo.jpg') }}" alt="Sarah Green">
        <h2>Sarah Green</h2>
        <p>Founder & CEO</p>
      </div>
      <div class="team-member">
        <img src="{{ asset('./images/phot.jpg') }}" alt="Michael Chen">
        <h2>Michael Chen</h2>
        <p>Operations Director</p>
      </div>
      <div class="team-member">
        <img src="{{ asset('./images/photo.jpg') }}" alt="Emily Rodriguez">
        <h2>Emily Rodriguez</h2>
        <p>Procurement Manager</p>
      </div>
      <div class="team-member">
        <img src="{{ asset('./images/phot.jpg') }}" alt="David Kim">
        <h2>David Kim</h2>
        <p>Technology Lead</p>
      </div>
    </div>
  </div>

  @include('home.footer')


  @include('home.js')





  
