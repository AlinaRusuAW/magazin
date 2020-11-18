<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">
    <span id="type-text" style="color:Tomato;">...</span>
    <span class="blinking-cursor" style="color:Tomato;">_</span>
</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Pagina principală</a>
    <a class="p-2 text-dark" href="despre.php">Despre noi</a>
    <a class="p-2 text-dark" href="contacte.php">Contacte</a>  
  </nav>
  <?php
  if ($_COOKIE['user'] == ''):
  ?>

<a class="btn btn-outline-success" href="log.php">Conectează-te</a>

<?php else:?>
  
<a class="btn btn-outline-success" href="cab.php">Cabinet persoal</a>
  
<?php endif; ?>
<script src="script.js"></script>
</div>
