<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Shop Interior</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">

</head>
<body>

    <header>

        <div class="interior" data-aos="fade-right">
            <img class="img-home" src="./assets/icon-interior.png" alt="">
            <h3 class="text-interior">interior</h3> 
        </div>

        <div class="paginas-topo" data-aos="fade-down">
            <h3 class="pagina">Home</h3>
            <h3 class="pagina">Pages</h3>
            <h3 class="pagina">Services</h3>
            <h3 class="pagina">Projects</h3>
            <h3 class="pagina">Blog</h3>
            <h3 class="pagina">Contact Us</h3>
        </div>

        <div class="busca" data-aos="fade-left">
            <img class="img-busca" src="./assets/icon-pesquisa.png" alt="">
            <img class="img-busca" src="./assets/icon-carrinho.png" alt="">
        </div>
        
    </header>

    <section class="inicio">

        <div class="texto-inicio" data-aos="fade-right">
            <h3 class="sub-titulo">INTERIOR</h3>
            <h1 class="titulo">Home Deasigns Made Easy</h1>
            <h3 class="preco">$416.00<span>Starting</span></h3>
            <button class="compre">SHOP NOW</button>
        </div>

    </section>

    <section class="colecoes" data-aos="fade-up">

        <div class="colecao">
            <h3 class="nome-colecao">New Chair Collection 2022</h3>
            <button>SHOP NOW</button>
            <img class="img-colecao1" src="./assets/colecao1.png" alt="">
        </div>

        <div class="colecao">
            <h3 class="nome-colecao">Lamp Desk</h3>
            <button>SHOP NOW</button>
            <img class="img-colecao2" src="./assets/colecao2.png" alt="">
        </div>

        <div class="colecao">
            <h3 class="nome-colecao">Modern Chair Collection 2022</h3>
            <button>SHOP NOW</button>
            <img class="img-colecao3" src="./assets/colecao3.png" alt="">
        </div>

    </section>

    <div class="texto-solto" data-aos="fade-down">
        <h3 class="linha">━━━</h3>
        <h3 class="titulo-solto">PROFESSIONAL TEAM</h3>
    </div>

    <section class="novidades">

        <div class="topo-novidades" data-aos="fade-down">
            <h3 class="titulo-novidades">The Best New Arrivals</h3>
            <div class="paginas-novidades">
                <h3 class="pagina-novidade">Desk</h3>
                <h3 class="pagina-novidade">Bedroom</h3>
                <h3 class="pagina-novidade">Lighting</h3>
                <h3 class="pagina-novidade">Accessories</h3>
            </div>
        </div>
        
        <div class="produtos" data-aos="fade-up">

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto1.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>

                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Blue chair</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto2.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Blue chair</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$18.00</span>$12.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto3.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Coral vase</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto4.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Coffe table set</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto5.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Decorative vase</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$30.00</span>$25.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto6.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Coral vase</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$12.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto7.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Gray sofa</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto8.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Black chair</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

        </div>

    </section>

    <section class="comentarios-clientes">

        <div class="textos-comentarios" data-aos="fade-down">
            <h3 class="sub-titulo">━━━ WHAT PEOPLE SAY ━━━</h3>
            <h2 class="titulo-comentarios">Words Of Our Clients</h2>
        </div>

        <div class="comentarios" data-aos="fade-up">

            <div class="comentario">
                <img src="./assets/cliente1.png" alt="" class="foto-cliente">
                <h3 class="nome-cliente">Bessie Cooper</h3>
                <h3 class="cargo-cliente">Communications Director</h3>
                <div class="avalicao-cliente">
                    <img src="./assets/icon-estrela.png" alt="" class="estrela">
                    <h3 class="nota-cliente">4.0</h3>
                </div>
                <h3 class="contario-cliente">I Have Gotten At Least 50 Times The Value From Surely. After Using Surely My Business After Skyrocketed Heaven To Delhi</h3>
            </div>

            <div class="comentario">
                <img src="./assets/cliente2.png" alt="" class="foto-cliente">
                <h3 class="nome-cliente">Anjelina Jolie</h3>
                <h3 class="cargo-cliente">Sales Manager</h3>
                <div class="avalicao-cliente">
                    <img src="./assets/icon-estrela.png" alt="" class="estrela">
                    <h3 class="nota-cliente">4.0</h3>
                </div>
                <h3 class="contario-cliente">I Have Gotten At Least 50 Times The Value From Surely. After Using Surely My Business After Skyrocketed Heaven To Delhi</h3>
            </div>

            <div class="comentario">
                <img src="./assets/cliente3.png" alt="" class="foto-cliente">
                <h3 class="nome-cliente">Brooklyn Simmons</h3>
                <h3 class="cargo-cliente">Public Relations Specialist</h3>
                <div class="avalicao-cliente">
                    <img src="./assets/icon-estrela.png" alt="" class="estrela">
                    <h3 class="nota-cliente">4.0</h3>
                </div>
                <h3 class="contario-cliente">I Have Gotten At Least 50 Times The Value From Surely. After Using Surely My Business After Skyrocketed Heaven To Delhi</h3>
            </div>

            <div class="comentario">
                <img src="./assets/cliente4.png" alt="" class="foto-cliente">
                <h3 class="nome-cliente">Michael James</h3>
                <h3 class="cargo-cliente">Communications Director</h3>
                <div class="avalicao-cliente">
                    <img src="./assets/icon-estrela.png" alt="" class="estrela">
                    <h3 class="nota-cliente">4.0</h3>
                </div>
                <h3 class="contario-cliente">I Have Gotten At Least 50 Times The Value From Surely. After Using Surely My Business After Skyrocketed Heaven To Delhi</h3>
            </div>

        </div>

        

    </section>

    <div class="texto-solto" data-aos="fade-down">
        <h3 class="linha">━━━</h3>
        <h3 class="titulo-solto">POPULAR PRODUCT</h3>
    </div>

    <section class="produtos-especiais">
        
        <div class="topo-especiais" data-aos="fade-down">
            <h3 class="titulo-especiais">Top Special Product</h3>
            <button>See More Product</button>
        </div>
        
        <div class="produtos" data-aos="fade-up">

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto1.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>

                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Blue chair</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto2.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Blue chair</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$18.00</span>$12.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto3.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Coral vase</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>

            <div class="produto">

                <div class="img-produto">
                    <img class="img-do-produto" src="./assets/produto4.png" alt="">
                </div>
    
                <div class="info-produto">
                    <img src="./assets/icon-recarregar.png" alt="">
                    <img src="./assets/icon-curtida.png" alt="">
                    <img src="./assets/icon-adicionar-carrinho.png" alt="">
                </div>
                
                <div class="descricao-produto">
                    <div class="nome">
                        <h3 class="nome-produto">Coffe table set</h3>
                    </div>
                    <div class="extra-descricao">
                        <h3 class="preco-produto"><span>$20.00</span>$15.00</h3>
                        <img src="./assets/icon-5estrelas.png" alt="">
                    </div>
                </div>
    
            </div>
        </div>
    </section>

    <section class="colunas">

        <div class="coluna" data-aos="fade-up">
            <div class="infos">
                <img src="./assets/icon-frete.png" alt="">
                <div class="textos">
                    <h3 class="titulo">Free Shipping</h3>
                    <h3 class="info">Capped at $319 per order</h3>
                </div>
            </div>
        </div>

        <div class="coluna" data-aos="fade-up">
            <div class="infos">
                <img src="./assets/icon-devolucao.png" alt="">
                <div class="textos">
                    <h3 class="titulo">Free Returns</h3>
                    <h3 class="info">Within 25 Days</h3>
                </div>
            </div>
        </div>

        <div class="coluna" data-aos="fade-up">
            <div class="infos">
                <img src="./assets/icon-seguro.png" alt="">
                <div class="textos">
                    <h3 class="titulo">100% Secure</h3>
                    <h3 class="info">100% Secure payment</h3>
                </div>
            </div>
        </div>

        <div class="coluna" data-aos="fade-up">
            <div class="infos">
                <img src="./assets/icon-qualidade.png" alt="">
                <div class="textos">
                    <h3 class="titulo">Best Price</h3>
                    <h3 class="info">Guaranteed Gifts</h3>
                </div>
            </div>
        </div>

    </section>

    <div class="texto-solto2"  data-aos="fade-down">
        <h3 class="titulo-solto">━━━ RECENT ARTICLES ━━━</h3>
    </div>

    <section class="artigos">

        <div class="topo-artigos" data-aos="fade-down">
            <h3 class="titulo-artigos">Read Our Latest Articles</h3>
        </div>

        <div class="produtos-artigos" data-aos="fade-up">
            <div class="produto-artigo">

                <div class="img-artigos">
                    <img src="./assets/artigo1.png" alt="">
                </div>

                <div class="infos-artigos">
                    <div class="bloco-data">
                        <h3 class="dia">05</h3>
                        <h3 class="mes">May</h3>
                    </div>
                    <div class="comentarios">
                        <img src="./assets/icon-user.png" alt="">
                        <h3 class="info-comentario">John Doe</h3>
                        <img src="./assets/icon-comentario.png" alt="">
                        <h3 class="info-comentario">9 Comments</h3>
                    </div>
                    <h3 class="descricao-artigo">Things to Know When Choosing the Perfect Sofa</h3>
                    <button>See More Product</button>
                </div>

            </div>

            <div class="produto-artigo">

                <div class="img-artigos">
                    <img src="./assets/artigo2.png" alt="">
                </div>

                <div class="infos-artigos">
                    <div class="bloco-data">
                        <h3 class="dia">23</h3>
                        <h3 class="mes">Jun</h3>
                    </div>
                    <div class="comentarios">
                        <img src="./assets/icon-user.png" alt="">
                        <h3 class="info-comentario">John Doe</h3>
                        <img src="./assets/icon-comentario.png" alt="">
                        <h3 class="info-comentario">3 Comments</h3>
                    </div>
                    <h3 class="descricao-artigo">Things to Know When Choosing the Perfect Sofa</h3>
                    <button>See More Product</button>
                </div>

            </div>

            <div class="produto-artigo">

                <div class="img-artigos">
                    <img src="./assets/artigo3.png" alt="">
                </div>

                <div class="infos-artigos">
                    <div class="bloco-data">
                        <h3 class="dia">15</h3>
                        <h3 class="mes">May</h3>
                    </div>
                    <div class="comentarios">
                        <img src="./assets/icon-user.png" alt="">
                        <h3 class="info-comentario">John Doe</h3>
                        <img src="./assets/icon-comentario.png" alt="">
                        <h3 class="info-comentario">6 Comments</h3>
                    </div>
                    <h3 class="descricao-artigo">Things to Know When Choosing the Perfect Sofa</h3>
                    <button>See More Product</button>
                </div>

            </div>

        </div>


    </section>

    <footer>

        <div class="conteudo">
            <div class="logo" data-aos="zoom-in">
                <img src="./assets/logo.png" alt="">
                <h3 class="nome">interior</h3>
            </div>
            <h2 class="titulo" data-aos="zoom-in">Join Now For Early Access</h2>
            <h3 class="info" data-aos="zoom-in">Suspendisse eu velit est. Cras nec vestibulum quam. Donec tincidunt purus nec enim tincidunt, sit</h3>
            <div class="email" data-aos="zoom-in">
                <input type="email" name="email" id="" placeholder="Enter your email address...">
                <button>SUBSCRIBE</button>
            </div>
        </div>

        <div class="parte-inferior">
            <h3 class="texto">Copyright 2022 - Designed & Developed by Frenify</h3>
            <div class="redes-sociais">
                <img src="./assets/icon-facebook.png" alt="">
                <img src="./assets/icon-instagram.png" alt="">
                <img src="./assets/icon-twitter.png" alt="">
                <img src="./assets/icon-linkedin.png" alt="">
            </div>
        </div>

    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>