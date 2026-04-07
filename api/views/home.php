<?php ob_start(); ?>

<div class="hero">
<h1>Premium Tech Essentials</h1>
<p>Focus, kwaliteit en vertrouwen.</p>
<a href="/producten" class="btn">Bekijk assortiment</a>
</div>

<div class="container">
<h2>Waarom Techidna?</h2>
<ul>
<li>✔ Premium kwaliteit</li>
<li>✔ Levering via bol.com</li>
<li>✔ Modern design</li>
</ul>
</div>

<?php $content=ob_get_clean(); require 'layout.php'; ?>
