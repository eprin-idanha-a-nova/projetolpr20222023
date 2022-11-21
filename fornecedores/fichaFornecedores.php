<?php include "../layout/header.php"; ?>


    <main class="container">

      <h2 class="mb-5 py-3 border-bottom border-info border-5">FICHA DE FORNECEDORES:</h2>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nif</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
    
          <div class="mb-8">
            <label for="exampleInputMorada1" class="form-label">Morada</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
    
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Iban</label>
            <input type="iban" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
    
          <div class="mb-8">
            <label for="exampleInputEmail1" class="form-label">Condicao de pagamento</label>
            
          </div>
          
    
          <div class="mb-3">
            <select class="form-select form-select-lg mb-20" aria-label=".form-select-lg example">
              <option selected>nenhuma condiçao selecionada</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    

    
    </main>



<?php include "../layout/footer.php"; ?>