<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Techidna</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root { --tech:#00d1b2; --dark:#0f172a; }
.hero { background: var(--dark); color:white; padding:80px 0; text-align:center; }
.btn-tech { background:var(--tech); color:white; border-radius:30px; padding:12px 24px; }
.card { border-radius:20px; transition:.3s; }
.card:hover { transform:translateY(-5px); }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white border-bottom">
<div class="container">
<a class="navbar-brand fw-bold" href="/">TECHIDNA®</a>
<div>
<a class="nav-link d-inline" href="/">Home</a>
<a class="nav-link d-inline" href="/producten">Producten</a>
</div>
</div>
</nav>

<?php echo $content; ?>

</body>
</html>
