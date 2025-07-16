<?php include("db.php"); ?>

<?php include("customernavbar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gift Shop Offers</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fef6f9;
      margin: 0;
      padding: 0;
      
    }

    header {
      text-align: center;
      padding: 30px;
      background: #ff4e74;
      color: white;
    
    }

    .offers-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 30px;
      gap: 20px;
    }

    .offer-card {
      background: white;
      width: 250px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 20px;
      position: relative;
      transition: transform 0.3s ease;
    }

    .offer-card:hover {
      transform: scale(1.05);
    }

    .discount-badge {
      position: absolute;
      top: -10px;
      right: -10px;
      background: #ff4e74;
      color: white;
      padding: 10px;
      border-radius: 50%;
      animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.2); }
    }

    .offer-title {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .offer-desc {
      font-size: 14px;
      color: #555;
    }

    .countdown {
      text-align: center;
      margin: 20px 0;
      font-size: 24px;
      font-weight: bold;
      color: #ff4e74;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #ffdee9;
    }
  </style>
</head>
<body>

  <header>
    <h1>🎁 Gift Shop Special Offers 🎁</h1>
    <div class="countdown" id="countdown">Loading timer...</div>
  </header>

  <div class="offers-container">
    <div class="offer-card" data-aos="fade-up">
      <div class="discount-badge">20%</div>
      <h3 class="offer-title">Birthday Gift Box</h3>
      <p class="offer-desc">Perfect for anniversaries and special occasions. Beautiful packaging included.</p>
    </div>

    <div class="offer-card" data-aos="fade-up" data-aos-delay="100">
      <div class="discount-badge">BOGO</div>
      <h3 class="offer-title">Mug & Teddy Combo</h3>
      <p class="offer-desc">Buy one, get one free! Surprise your loved one with a cute combo set.</p>
    </div>

    <div class="offer-card" data-aos="fade-up" data-aos-delay="200">
      <div class="discount-badge">30%</div>
      <h3 class="offer-title">Handmade Candles</h3>
      <p class="offer-desc">Soothing fragrances. Great for birthdays, housewarmings, and more.</p>
    </div>
  </div>

  <footer>
    💝 Hurry! Offers valid till stock lasts. Shop Now! 💝
  </footer>

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Confetti Animation -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
  <script>
    window.onload = () => {
      confetti({ particleCount: 100, spread: 100, origin: { y: 0.6 } });
    };
  </script>

  <!-- Countdown Timer -->
  <script>
    function startCountdown(duration, display) {
      let timer = duration, hours, minutes, seconds;
      setInterval(function () {
        hours = parseInt(timer / 3600, 10);
        minutes = parseInt((timer % 3600) / 60, 10);
        seconds = parseInt(timer % 60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = `⏳ ${hours}:${minutes}:${seconds}`;

        if (--timer < 0) {
          timer = 0;
          display.textContent = "🎉 Offer Ended!";
        }
      }, 1000);
    }

    window.onload = function () {
      const countdownDisplay = document.getElementById("countdown");
      const twoHours = 2 * 60 * 60;
      startCountdown(twoHours, countdownDisplay);
    };
  </script>
</body>
</html>
