<!DOCTYPE html>
<html>
  <link rel="icon" type="image/png" href="../assets/img/favicon.webp">
<head>
  <title>Projek IoT - Welcome</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: left;
    }
    .hero {
      background-image: url("images/background.png");
      background-size: cover;
      background-position: center;
      height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .hero h1 {
      font-size: 48px;
      color: #fff;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 24px;
      color: #fff;
    }
    .features {
      background-color: #f2f2f2;
      padding: 50px;
      text-align: center;
    }
    .features h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    .features p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .cta {
        background-image: url("images/sn.jpg");
      background-size: cover;
      background-position: center;
      height: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .cta h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    .cta p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .cta button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      font-size: 18px;
      border: none;
      cursor: pointer;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <header class="hero">
    <div class="hero-content">
      <h1> Wind Speed, Temperature, and Humidity Detection </h1>
      <p>By Team Anemo</p>
    </div>
  </header>

  <section class="cta">
    <div class="hero-content">
    <h2>To Dashboard</h2>
    <form>
      <button formaction="/monitoring">Dashboard</button>
    </form>
</div>
  </section>

  <footer class="footer">
    <p>&copy; Team Anemo.</p>
  </footer>
</body>
</html>
