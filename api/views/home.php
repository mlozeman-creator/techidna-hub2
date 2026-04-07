<?php ob_start(); ?>

<div class="hero">
  <h1>Focus Starts Here</h1>
  <p>Premium tools for a distraction-free workspace</p>
  <a href="/producten" class="btn">Explore Products</a>
</div>

<div class="section">
  <h2>Why Techidna?</h2>
  <p>Designed for performance, built for focus.</p>
</div>

<div class="grid">
  <div class="card">
    <h3>Minimal Design</h3>
    <p>No distractions. Only what matters.</p>
  </div>
  <div class="card">
    <h3>Trusted Delivery</h3>
    <p>Handled via bol.com logistics.</p>
  </div>
  <div class="card">
    <h3>Top Rated</h3>
    <p>4.8★ average customer rating.</p>
  </div>
</div>

<?php $content = ob_get_clean(); require 'layout.php'; ?>
