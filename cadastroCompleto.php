<!-- Header -->
<?php
		$titulo = "Mercado Exchange";
		include 'common/head.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>

<!-- Header -->
<?php
	include 'common/header.php';
?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Formulário de Cadastro</h1>
    <p class="lead">Por favor preencha o forumulário de cadastro para fazer parte do <strong>Mercado Exchange</strong> - o maior marketplace de troca de produtos usados.</p>
  </div>
</div>

<div class="container">
		
    <form class="needs-validation" novalidate>
            
            <!-- Row 1 -->
            <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationNome">Nome</label>
                            <input type="text" class="form-control" id="validationNome" placeholder="Nome" value="Nome" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationSobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="validationSobrenome" placeholder="Sobrenome" value="Sobrenome" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                                <label for="validationCpf">CPF</label>
                                <input type="text" class="form-control" id="validationCpf" placeholder="CPF" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                Por favor indique seu CPF.
                                </div>
                        </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                                <label for="validadtionCidade">Cidade</label>
                                <input type="text" class="form-control" id="validadtionCidade" placeholder="Cidade" required>
                                <div class="invalid-feedback">
                                    Por favor coloque sua cidade.
                                </div>
                </div>

                <div class="col-md-4 mb-3">
                                <label for="validationEstado">Estado</label>
                                <input type="text" class="form-control" id="validationEstado" placeholder="Estado" required>
                                <div class="invalid-feedback">
                                    Por favor coloque seu estado.
                                </div>
                </div>

                <div class="col-md-4 mb-3">
                            <label for="validationCep">CEP</label>
                            <input type="text" class="form-control" id="validationCep" placeholder="CEP" required>
                            <div class="invalid-feedback">
                            Por favor coloque seu cep.
                            </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row">
                <div class="col-md-6 mb-2">
                        <label for="validationUsuario">Usuário</label>
                        <input type="text" class="form-control" id="validationUsuario" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                            Por favor escolha um nome de usuário.
                            </div>
                </div>

                <div class="col-md-6 mb-2">
                        <label for="validationSenha">Senha</label>
                        <input type="password" class="form-control" id="validationSenha" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                    Por favor escolha uma senha.
                            </div>
                </div>
            </div>
<br>

    <!-- Termos e Condições -->
        <div class="col-md-6 mb-2">
            <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck"><a href="#">Termos e condições.</a></label>
                        <div class="invalid-feedback">
                            Concorde com os termos e condições.
                        </div>
                    </div>
            </div>
        </div>

    <!-- Botão Cadastro -->
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Cadastre-se</button>  
            </div>
                    
    </form>
            
</div>

 

<!-- JavaScript para função de preenchimento correto de dados -->
</div>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>




    <script src="js/jquery-3.3.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/greensock/TweenMax.min.js"></script>
        <script src="plugins/greensock/TimelineMax.min.js"></script>
        <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="plugins/greensock/animation.gsap.min.js"></script>
        <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/slick-1.8.0/slick.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/custom.js"></script>



<!-- Footer -->
<?php
	include 'common/footer.php';
?>

    
</body>
</html>





