<div class="home-about">
  <img src="public/images/author.jpg" alt="sobre" width="125" height="125" />
  <h4>About</h4>
  <p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Ipsum quibusdam ad eligendi magni eius perspiciatis voluptatibus, 
    iusto temporibus omnis quisquam distinctio! Nostrum eligendi fugit,
    odit tempora itaque accusantium id iure.About Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Ipsum quibusdam ad eligendi magni eius perspiciatis voluptatibus, 
    iusto temporibus omnis quisquam distinctio! Nostrum eligendi fugit,
    odit tempora itaque accusantium id iure
  </p>
</div>
<div class="recent-work">
  <h4>Recent Work</h4>
  <?php foreach($images as $image): ?>
  <div class="galeria">
    <img src="<?php echo BASE_URL;?>public/upload/<?php echo $image['imagem'] ?>" alt="" />
  </div>
  <?php endforeach; ?>
</div>