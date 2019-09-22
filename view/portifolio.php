<div class="recent-work">
  <h4>Portifolio</h4>
  <?php foreach($images as $image): ?>
  <div class="galeria">
    <img src="<?php echo BASE_URL;?>public/upload/<?php echo $image['imagem'] ?>" alt="" />
  </div>
  <?php endforeach; ?>
</div>