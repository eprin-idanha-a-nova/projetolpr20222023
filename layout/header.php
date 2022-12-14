<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Projeto Gestão - ERP</title>
</head>

<body>


    <header class="mb-5">

        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../artigos/fichaArtigos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Artigos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../artigos/fichaArtigos.php">Ficha de Artigos</a></li>
                      <li><a class="dropdown-item" href="#">consulta de stock</a></li>
                    </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../clientes/fichadeclientes.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          clientes
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../clientes/fichadeclientes.php">Ficha de clientes</a></li>
                          <li><a class="dropdown-item" href="#">Emisao de documentos</a></li>
                          <li><a class="dropdown-item" href="#">consultar conta corrente</a></li>
                        </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="../fornecedores/fichaFornecedores.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Fornecedores
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="../fornecedores/fichaFornecedores.php">Ficha de Fornecedores</a></li>
                              <li><a class="dropdown-item" href="#">Emisao de documentos</a></li>
                              <li><a class="dropdown-item" href="#">consultar conta corrente</a></li>
                            </ul>
                        
                          
                  </li>
                 
                </ul>
                <a class="d-flex" style="gap: 8px;" href="">
                  <p>Nome Login</p>
                  <i class="bi bi-person-circle fs-4"></i>  
                </a>
              </div>
            </div>
          </nav>

    </header>