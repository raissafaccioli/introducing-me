<?php include 'header.php' ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Suas mensagens: </h1>
    </div>
  </div>

  <?php 
    include 'connection.php';

    $sql = "SELECT * FROM contact";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()){ ?>

        <div class="row">
          <div class="col-12">
            Nome: <?php echo $row['name']; ?>
            <br>
            E-mail: <?php echo $row['email']; ?>
            <br>
            Mensagem: <?php echo $row['message']; ?>
          </div>
        </div>

      <?php }
    }
  ?>
</div>

<?php include 'footer.php' ?>