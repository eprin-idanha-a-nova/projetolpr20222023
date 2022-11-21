<?php include "../layout/header.php"; ?>


    <main class="container">
      <h2 class="mb-5 py-3 border-bottom border-info border-5">FICHA DE CLIENTES:</h2>

      <form action="" method="post">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">NOME:</label>
          <input type="text" class="form-control" id="NOME">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label"> NIF:</label>
          <input type="number" class="form-control" id="NIF">
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">MORADA:</label>
          <input type="text" class="form-control" id="MORADA">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">SALDO ATUAL</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <br>

        <input class="btn btn-primary" type="button" value="Criar Cliente">

      </form>
    </main>
  
<?php include "../layout/footer.php"; ?>