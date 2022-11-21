<?php include "../layout/header.php"; ?>


    <main class="container">

        <!--
            Área de trabalho do Leandro
        -->
        <h2 class="mb-5 py-3 border-bottom border-info border-5">FICHA DE ARTIGOS:</h2>

        <form action="" method="post">

            <div class="mb-3">
                <label for="exampleInputnome" class="form-label">Nome:</label>
                <input type="nome" class="form-control" id="exampleInputnome1" aria-describedby="nomeHelp">
                <br>
                <label for="exampleInputunidade de venda1" class="form-label">Unidade de venda:</label>
                <select class="form-select" aria-label="Default select example">
                <option selected>Nenhuma unidade selecionada</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>
                <label for="exampleInputstock1" class="form-label">stock:</label>
                <input type="number" class="form-control" id="exampleInputstock1">
                <br>
                <label for="exampleInputpreço de venda1" class="form-label">preço de venda:</label>
                <input type="number" class="form-control" id="exampleInputprenço de venda1">
                <br>
                <label for="exampleInputpreço de custo1" class="form-label">preço de custo:</label>
                <input type="number" class="form-control" id="exampleInputprenço de custo1">
            </div>

            <button type="button" class="btn btn-primary">ciar artigo</button>

        </form>

    </main>



<?php include "../layout/footer.php"; ?>