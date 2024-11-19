<html>
  <head>
		<title>HelpVision</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
	
       
  <nav class="navbar navbar-dark bg-dark">
	 <img src="img/Logo Help Vision 2.png" class="rounded float-left" style="width: 30%;" alt="Imagem responsiva"> 
 
	<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle bg-primary text-white mx-auto" style="width: 200px;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu2">
  <a class="dropdown-item font-weight-bold"  href="cadastro.php" type="button"><h3><strong>Cadastro</strong><h3> </a>
    <a class="dropdown-item" href="index.php" type="button">Inicio</a>
    <button class="dropdown-item" type="button">Quem somos</button>
    <button class="dropdown-item" type="button">Sugestões</button>
	<button class="dropdown-item" type="button">Suporte</button>
  </div>
  </div>
 </nav>
 

<br>
<br>

   <div class="text-center"><h1><strong>Cadastro</strong></h1>
   </div>

	<form class="container-fluid" method="post" action="verificacadastro.php">
		
    <div class="form-group">
      <strong>Nome</strong> <input type="text" class="form-control" name="txtnome" id="exampleFormControlInput1" placeholder="Nome" required>
      <strong>Endereço de Email</strong><input type="email" class="form-control" name="txtemail" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
      <strong>Senha</strong><input type="password" id="inputPassword5" name="txtsenha" class="form-control" aria-describedby="passwordHelpBlock"><br><br>
      <input type="submit" class="btn btn-success btn-lg btn-block" style="align-center" value="Cadastrar">
    </div>
</div>

<br>	 
  </form>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>