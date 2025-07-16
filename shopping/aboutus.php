<?php include("db.php");?>
<?php include("first.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Your Gift Shop Name</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css for animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- ScrollReveal (for scroll animations) -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <style>
    body {
      background-color: #fff8f0;
      scroll-behavior: smooth;
    }
    .about-section {
      padding: 60px 0;
    }
    .about-heading {
      font-size: 2.5rem;
      font-weight: 700;
      color: #d63384;
    }
    .highlight {
      color: #fd7e14;
    }
    .section-divider {
      width: 60px;
      height: 4px;
      background-color: #d63384;
      margin: 20px auto;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-danger" href="#">GiftNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- About Section -->
  <section class="about-section text-center">
    <div class="container">
      <h2 class="about-heading animate__animated animate__fadeInDown">About Us</h2>
      <div class="section-divider"></div>
      <p class="lead text-muted mt-4 animate__animated animate__fadeInUp">
        Welcome to <span class="highlight">GiftNest</span>, where every gift tells a story!
      </p>
      <p class="mt-3 animate__animated animate__fadeInUp animate__delay-1s">
        We believe that giving is an art — and we're here to make it special. Whether it's a birthday, anniversary, festival, or a just-because surprise, we help you find the perfect gift that says exactly what you feel.
      </p>
      <div class="row text-start mt-5">
        <div class="col-md-6" id="offerBox">
          <h4 class="text-danger">🎁 What We Offer</h4>
          <ul>
            <li>Handpicked curated gifts for all occasions</li>
            <li>Personalized products made with love</li>
            <li>Greeting cards, décor, accessories, and more</li>
            <li>Elegant and eco-friendly gift packaging</li>
          </ul>
        </div>
        <div class="col-md-6" id="missionBox">
          <h4 class="text-danger">💡 Our Mission</h4>
          <p>To turn every moment into a memory by making gifting joyful, thoughtful, and hassle-free.</p>

          <h4 class="text-danger mt-4">❤️ Why Choose Us?</h4>
          <ul>
            <li>Unique and creative gift collections</li>
            <li>Affordable pricing with high value</li>
            <li>Fast shipping and great customer service</li>
            <li>Locally inspired, globally loved</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light text-center py-3 mt-4">
    <p class="mb-0">&copy; 2025 GiftNest. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ScrollReveal JS -->
  <script>
    ScrollReveal().reveal('#offerBox', {
      origin: 'left',
      distance: '50px',
      duration: 1000,
      delay: 200,
      easing: 'ease-in-out',
      reset: false
    });

    ScrollReveal().reveal('#missionBox', {
      origin: 'right',
      distance: '50px',
      duration: 1000,
      delay: 400,
      easing: 'ease-in-out',
      reset: false
    });
  </script>
</body>
</html>
