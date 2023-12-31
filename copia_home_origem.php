<?php 
    $dsn = 'mysql:host=localhost;dbname=spgweb';
    $user = 'root';
    $pass = '';

    try {
        $conexao = new PDO ($dsn, $user, $pass);
        
 #       $query = '
 #           insert into usuario (
 #               nome, usuario, senha, email, fone, tipo, id_post
 #           ) values (
 #               "Jose Ricardo", "jricardop3", "Jrk.123", "sac@spgweb.com.br", 13988330356, 1, 1
 #           )
 #       ';
 #inserindo dados com o metodo exec       
 #       $retorno = $conexao->exec($query);
 #       echo $retorno;

    }catch(PDOException $e){
        echo 'Error: ' .$e->getCode().' Mensagem: '.$e->getMessage();
    } 
?>




<!DOCTYPE html>
<meta charset='UTF-8' lang='pt-br'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<head>
    <title>Script Praia Grande Web</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css' integrity='sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU' crossorigin='anonymous'>
  
</head>
    <body>

            <header >
               
            </header>
            <main>
                <div class='container container-fluid' ><!--Container -->
                    <div class='row'><!--Row -->
                    <div class='col-sm-12 m-auto'><!--col-sm12 -->       
                        <h1>Slider com legendas I</h1>
                        <div id='carousel-legendas' class='carousel slide' data-ride='carousel'><!-- Carousel -->
                        <ol class='carousel-indicators'>
                            <li class='active' date-target='carousel-legendas' data-slide-to='0'></li>
                            <li date-target='carousel-legendas' data-slide-to='1'></li>
                            <li date-target='carousel-legendas' data-slide-to='2'></li>
                            <li date-target='carousel-legendas' data-slide-to='3'></li>
                            <li date-target='carousel-legendas' data-slide-to='4'></li>
                        </ol>
                            <div class='carousel-inner'> <!-- Inner -->
                            
                            <div class='carousel-item active'>
                                <img src='img/imagem1.jpeg' class='img-fluid'>
                                <div class='carousel-caption'>
                                <h4>Item I</h4>
                                </div>
                            </div>
                            <div class='carousel-item'>
                                <img src='img/imagem2.jpeg' class='img-fluid'>
                                <div class='carousel-caption'>
                                <h4>Item II</h4>
                                </div>
                            </div>
                            <div class='carousel-item'>
                                <img src='img/imagem3.jpeg' class='img-fluid'>
                                <div class='carousel-caption'>
                                <h4>Item III</h4>
                                </div>
                            </div>
                            <div class='carousel-item'>
                                <img src='img/imagem4.jpeg' class='img-fluid'>
                                <div class='carousel-caption'>
                                <h4>Item IV</h4>
                                </div>
                            </div>
                            <div class='carousel-item'>
                                <img src='img/imagem5.jpeg' class='img-fluid'>
                                <div class='carousel-caption'>
                                <h4>Item V</h4>
                                </div>
                            </div>
                            </div> <!-- carousel -->
                            <!-- Controles -->
                            <a href='#carousel-legendas' class='carousel-control-prev' data-slide='prev'>
                            <span class='carousel-control-prev-icon'></span>
                            </a>
            
                            <a href='#carousel-legendas' class='carousel-control-next' data-slide='next'>
                            <span class='carousel-control-next-icon'></span>
                            </a>
                            <section id='servicos m-auto'><!-- Inicio seção serviços -->
                                <div class='container my-2'>
                                  <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row albuns'>
                                          <div class='col-md-6 my-2'>
                                            <img src='img/img1.jpeg' class='img-fluid d-none d-md-block'>
                                            
                                          </div>
                                          <div class='col-md-6 my-2'>
                                            <img src='img/img2.jpeg' class='img-fluid d-none d-md-block'>
                                          </div>
                                        </div>
                                        <div class='row albuns'>
                                          <div class='col-md-6 my-2'>
                                            <img src='img/img3.jpeg' class='img-fluid d-none d-md-block'>
                                          </div>
                                          <div class='col-md-6 my-2'>
                                            <img src='img/img4.jpeg' class='img-fluid d-none d-md-block'> <!-- d-none (display none) = não exibir d-md-block (display tamanho medio em bloco) condição para não exibir. -->
                                          </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                              </section><!-- Fim seção serviços -->

            
                    </div><!--/col-sm12 -->
                    </div><!--/Row -->
                </div><!--/Container -->
            </main>
            <footer class='container container-fluid expand-md mt-2 text-center'>
                <h5>&copy; Todos Os direitos Reservados <a class='link-danger' href='http://spgweb.com.br' target='_blank'>SPGWeb</a> By: Ricardo J. Peixoto</h5>
            </footer>
            
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
                
    </body>
</html>