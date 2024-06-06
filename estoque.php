<?php
 	session_start();
	include_once("conexao.php");
	$result_cursos = "SELECT * FROM produto";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<?php if($_SESSION['log'] == "logado"){?>
	<html lang="pt-br">
		<head> 
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Estoque</title>
			<link rel="stylesheet" type="text/css" href="css/details.css">
			<link href="css/bootstrap.min.css" rel="stylesheet">
		   	<link rel="stylesheet" type="text/css" href="css/style.css">	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		</head>
		<body>
			<?php include_once("header/header_estoque.php")?>
			
			

			<div class="container theme-showcase" role="main" >
				<div class="page-header"> 
					<h1>Informatica</h1>
				</div>
				<details open>
				<summary>
				Monitor
				</summary>
				<div class="container theme-showcase" role="main">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Nome do Produto</th>
									<th>Foto</th>
									<th>Preço</th>
									<th>Quantidade/Ação</th>
								</tr>
							</thead>
							<tbody>                         <!-- EXIBIR ESTOQUE-->
								<?php while($rows_produto = mysqli_fetch_assoc($resultado_cursos)){ ?>
									<?php 
										$categoria = $rows_produto['fk_categoria'];
										$quantidade = $rows_produto['quantidade'] 
									?>
									<?php if(($categoria==501 ) && ($quantidade>0)){ ?>
										<tr>
											<td><?php echo $rows_produto['nome']; ?></td>
											<td><img src="<?php echo "upload/".$rows_produto['Foto'] ?>" style="width: 20px; height: 20px;"><br><br></td>
											<td class="preco"><?php echo $rows_produto['valor']; ?></td>
											<td>
												<input type="hidden" id="id11123" name="id" value="<?php echo $rows_produto['id']; ?>">
													<!-- <input type="number" id="quantity" min="0" value="<?php echo $rows_produto['quantidade']; ?>" name="quantidade"> -->
												<input type="number" pattern="[0-9]*" id="spinner" name="quantidade_estoque" product-id="<?php echo $rows_produto['id']; ?>" 
													value="<?php echo $rows_produto['quantidade']; ?>"   min="0" >
													<button name="qnt_butt" class="buttonalt" >Alterar</button>
											</td>
										</tr>   
									<?php } ?>
								<?php } ?>
							</tbody>
						</table>
					</div>		
				</div>
									</details>
			</div>

			<!-- MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE MOUSE-->
			<?php	
				$result_cursos = "SELECT * FROM produto";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
			?>
			<div class="container theme-showcase" role="main">
				<details open>
				<summary>
				Mouse
				</summary>
				<div class="container theme-showcase" role="main">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Nome do Produto</th>
									<th>Foto</th>
									<th>Preço</th>
									<th>Quantidade/Ação</th>
								</tr>
							</thead>
							<tbody>                         <!-- EXIBIR ESTOQUE-->
								<?php while($rows_produto = mysqli_fetch_assoc($resultado_cursos)){ ?>
									<?php 
										$categoria = $rows_produto['fk_categoria'];
										$quantidade = $rows_produto['quantidade'] 
									?>
									<?php if(($categoria==301 ) && ($quantidade>0)){ ?>
										<tr>
											<td><?php echo $rows_produto['nome']; ?></td>
											<td><img src="<?php echo "upload/".$rows_produto['Foto'] ?>" style="width: 20px; height: 20px;"><br><br></td>
											<td class="preco"><?php echo $rows_produto['valor']; ?></td>
											<td>
												
													<div class="form-group">
														<input type="hidden" id="id11123" name="id" value="<?php echo $rows_produto['id']; ?>">
														<input type="number" pattern="[0-9]*" id="spinner" name="quantidade_estoque" product-id="<?php echo $rows_produto['id']; ?>" 
															   value="<?php echo $rows_produto['quantidade']; ?>" min="0">	
															   <button name="qnt_butt" class="buttonalt" >Alterar</button>													
													</div>
												
											</td>
										</tr>   
									<?php } ?>
								<?php } ?>
							</tbody>
						</table>
					</div>		
				</div>
				</details>
			</div>
	

			
			<!-- TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS TECLADOS-->
			<?php	
				$result_cursos = "SELECT * FROM produto";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
			?>
			<div class="container theme-showcase" role="main">
				<details open>
				<summary>
				Teclado
				</summary>
				<div class="container theme-showcase" role="main">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Nome do Produto</th>
									<th>Foto</th>
									<th>Preço</th>
									<th>Quantidade/Ação</th>
								</tr>
							</thead>
							<tbody>                         <!-- EXIBIR ESTOQUE-->
								<?php while($rows_produto = mysqli_fetch_assoc($resultado_cursos)){ ?>
									<?php 
										$categoria = $rows_produto['fk_categoria'];
										$quantidade = $rows_produto['quantidade'] 
									?>
									<?php if(($categoria==401 ) && ($quantidade>0)){ ?>
										<tr>
											<td><?php echo $rows_produto['nome']; ?></td>
											<td><img src="<?php echo "upload/".$rows_produto['Foto'] ?>" style="width: 20px; height: 20px;"><br><br></td>
											<td class="preco"><?php echo $rows_produto['valor']; ?></td>
											<td>
												
													<div class="form-group">
														<input type="hidden" id="id11123" name="id" value="<?php echo $rows_produto['id']; ?>">
														<input type="number" pattern="[0-9]*" id="spinner" name="quantidade_estoque" product-id="<?php echo $rows_produto['id']; ?>" 
															   value="<?php echo $rows_produto['quantidade']; ?>" min="0">
														<button name="qnt_butt" class="buttonalt">Alterar</button>														
													</div>
												
											</td>
										</tr>   
									<?php } ?>
								<?php } ?>
							</tbody>
						</table>
					</div>		
				</div>
									</details>
			</div>					

			<!-- ESGOTADOS  ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS ESGOTADOS-->
			<?php	
				$result_cursos = "SELECT * FROM produto";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
			?>
			<div class="container theme-showcase" role="main">
				<div class="page-header"> 
					<h1>Esgotados</h1>
				</div>
				<div class="color_esg">
				<div class="container theme-showcase" role="main">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Nome do Produto</th>
									<th>Foto</th>
									<th>Repor estoque</th>
									<th>Quantidade/Ação</th>
								</tr>
							</thead>
							<tbody>                         <!-- EXIBIR ESTOQUE-->
								<?php while($rows_produto = mysqli_fetch_assoc($resultado_cursos)){ ?>
									<?php $quantidade = $rows_produto['quantidade'] ?>
									<?php if($quantidade<=0){ ?>
										<tr>
											<td><?php echo $rows_produto['nome']; ?></td>
											<td><img src="<?php echo "upload/".$rows_produto['Foto'] ?>" style="width: 20px; height: 20px;"><br><br></td>
											<td><a href= "https://api.whatsapp.com/send?phone=5575998420803" target="_blank">Encomendar</a></td>
											<td>
												
													<div class="form-group">
														<input type="hidden" id="id11123" name="id" value="<?php echo $rows_produto['id']; ?>">
														<input type="number" pattern="[0-9]*" id="spinner" name="quantidade_estoque" product-id="<?php echo $rows_produto['id']; ?>" 
															   value="<?php echo $rows_produto['quantidade']; ?>" min="0">	
															   <button name="qnt_butt" class="buttonalt" >Alterar</button>													
													</div>
												
											</td>
										</tr>   
									<?php } ?>
								<?php } ?>
							</tbody>
						</table>
					</div>		
				</div>
									</div>
			</div>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>			
		<script src="js/bootstrap.min.js"></script>	
		<script>
			$(() =>{
					$("input[name='quantidade_estoque']").change(e =>{
					$("button[name='qnt_butt']").click(function(){
					const campo = e.target;
					const id_produto = campo.getAttribute("product-id");
					const qte_digitada = campo.value;

					var requisicao = $.ajax("estoque_altera.php", {type: "POST", data: {id: id_produto, quantidade: qte_digitada}});
					requisicao.done(function(mensagem){
						location.reload();
					});
					// alert("iD é " + id_produto + ", Qte é " + qte_digitada);	
				});
			});
			});
		</script>
	</body>
	</html>
<?php }else{
	header("Location: paglogin.php");
}?>