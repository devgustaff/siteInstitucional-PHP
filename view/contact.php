<div class="home-about form-contact">
  <h4>Contact</h4>
  <?php
    if (!empty($aviso)) {
      echo $aviso;
    }
  ?>
  <form action="" method="post">
    <div class="el-form">
      <label for="nome">Nome:</label><br>
      <input type="text" name="nome" id="nome"><br><br>
    </div>
    <div class="el-form">
      <label for="email">Email:</label><br>
      <input type="email" name="email" id="email"><br><br>
    </div>
    <div class="el-form">
      <label for="mensagem">Mensagem:</label><br>
      <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br><br>
    </div>
    <button type="submit" >Enviar</button>
  </form>
</div>
