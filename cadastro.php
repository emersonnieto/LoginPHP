<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .field{
            margin-top: 5%;
            background: #F5FFFA;
            width: 30%;
            margin-left: 34%;
            opacity: 0.7;
            
        }
        legend{
            color: blue;
            
        }
        fieldset.field label{
            margin-top: 30px;
            margin-left: 60px;
            color: black;
            font-weight: bold;
            opacity: 1;
        }
        input{
            border: 1px solid black;
            background: white;
            margin-left: 5px;
            padding: 3px;
        }
        button{
            margin-top: 30px;
            margin-left: 300px;
        }
        #usuario{
            margin-left: 8px;
            border: 1px solid black;
            background: white;
        }
    </style>

</head>
<body>
    <form method="POST">
        <fieldset class="field">
        <legend>Cadastro</legend>
        <label>Nome:</label><input type="text" name="usuario" id="usuario">
        <label>Senha:</label><input type="password" name="senha" id="senha">
        <button id="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Cadastrar
        </button>
        </fieldset>
    </form>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button id="btnfechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal" class="modal-body">

      </div>

      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script>
    $(document).ready(function(){
       
       $("#button").on("click", function(){
            var usuario = $("#usuario").val();
            var senha = $("#senha").val();
            if (usuario == '' || senha == ''){
                $("#modal").append("<h3> Prencha todos os campos</h3>");
                $("#btnfechar").on("click", function(){
                window.location.reload();
                });
            }else{
                $.post("cadastrar.php", {"usuario": usuario, "senha": senha}, function(data){
                    $("#modal").append("<h3> cadastro realizado com sucesso</h3>");
                    $("#btnfechar").on("click", function(){
                    window.location.href="index.php"
                    });
                    
                });    
            }    
       });
    });

</script>