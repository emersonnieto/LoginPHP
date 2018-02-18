<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        #btnlogin{
            margin-left: 47.3%;
        }

        #button{
            margin-left: 10px;
            background: -webkit-linear-gradient( to top left,#0069c0, #003263);
            background: linear-gradient(to top left, #0069c0, #003263);
            border-radius: 3px;
            color: white;
            border: none;
            box-shadow: 0 3px 6px black;
                        
            display: block;
            font-size: 14px;
            padding: 5px 15px;
            width: 80px;


        }
        
        #corpo{
            background-image: url(/imagens/tt.jpg);
            background-repeat: no-repeat;
            background-size: 120%;
        }

        .field{
            margin-top: 5%;
            background: #F5FFFA;
            width: 400px;
            margin-left: 34%;
            opacity: 0.7;
            border: 2px solid black;
        }
        legend{
            color: blue;
        }
        fieldset.field label{
            margin-left: 60px;
            color: red;
            font-weight: bold;
            opacity: 1;
        }

        a{
            color: red;
            margin-left: 280px;
            
        }
        input{
            border: 1px solid black;
            background: transparent;
        }
        
        #usuario{
            margin-left: 15px;
        }

        #senha{
            margin-left: 8px;
        }

        #imagem{
            width:100px;
            height:100px;
        }

        #gif{
            margin-top: 8%;
            margin-left: 35.5%;
            
        }
    
    </style>

    
</head>

<body id="corpo">
<img src="/imagens/BitDrunk.gif"id="gif">
<form method="POST">
    <fieldset class="field">
        <br><label>Login:</label><input type="text" name="usuario" id="usuario"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br> 
        <button id="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Login
        </button>
        <a id="cadastro"href=cadastro.php>Cadastrar-se</a>
    </fieldset>
</form>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
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
<script>
    $(document).ready(function(){
       
       $("#button").on("click", function(){
            var usuario = $("#usuario").val();
            var senha = $("#senha").val();
            if (usuario == '' || senha == ''){
                $("#modal").append("<h3> Prencha todos os campos</h3>");
            }else{
                $.post("login.php", {"usuario": usuario, "senha": senha}, function(data){
                    if(data == 0){
                        $("#modal").append("<h3>usuario ou senha invalido!</h3>");    
                    }else{
                        window.location.href="bitdrunk.php"
                    }                
                });
            }
       });
        
       });
    $(document).ready(function(){
       $("#btnfechar").on("click", function(){
            window.location.reload(true);
        });
    });
       
</script>
</html>





