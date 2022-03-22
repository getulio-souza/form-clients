<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- databases link -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.css"/>
    
    <title>Listagem de clientes - CRUD</title>
  </head>
  <body>
    <h1 class="text-center">Tabela de dados de clientes</h1>
      <!-- container -->
      <section class="container-fluid">
        <article class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <!--colunas -->
                    <div class="col-md-8">
                    <!-- tabela -->
                    <table id="datatable" class="table text-center">
                        <thead>
                            <th>Quantidade</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone </th>
                            <th>Cidade</th>
                        </thead>
                        <!-- corpo da tabela -->
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>João da Silva</td>
                                <td>joao_da_silva@gmail.com</td>
                                <td>(11) 0000-0000</td>
                                <td><a class="btn">Editar</a><a href="">Deletar</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </article>
      </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--javascript link-->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- inserindo o rodape dinâmico com jquery-->
    <script type="text/javaScript">
        $('#datatable').DataTable({
            'serveside': true, 
            'processing': true,
            'paging': true,
             'order':[],
             'ajax':{
               'url': 'fetch_data.php',
               'type': 'post',
             },
             fncreateRow: function(nRow, aData, IdataIndex){
                 $(nRow).attr('id', aData[0]);
             },
             'columnDefs':[{
                 'target': [0,5],
                 orderable:false,
             }]
        });
    </script>
  </body>
</html>