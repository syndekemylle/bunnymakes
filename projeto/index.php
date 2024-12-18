<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Bunny Makes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Agbalumo&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
        }

        header {
            background-color: #b3b0f7; 
            padding: 10px 0;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
        }

        .logo img {
            width: 120px; 
        }

        .search-container input {
            width: 300px;
            padding: 8px;
            border-radius: 30px;
            border: none;
        }

        .search-container .search-icon {
            width: 20px;
            margin-left: -35px;
            position: absolute;
            top: 13px;
            right: 10px;
        }

        .header-right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .header-right .btn {
            color: white;
            background-color: #b3b0f7;
            border: none;
            margin-left: 15px;
            padding: 10px;
            border-radius: 30px;
        }

        .header-right .btn:hover {
            background-color: #a2a1f0; 
        }

        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 50px;
        }

        .main-content h1 {
            font-size: 72px;
            font-weight: bold;
            color: #b3b0f7;
        }

        .main-content .cta-text p {
            font-size: 18px;
            color: #b3b0f7;
            font-weight: 600;
        }

        .cta-btn {
            background-color: #b3b0f7;
            border: none;
            padding: 12px 30px;
            color: white;
            font-size: 18px;
            border-radius: 30px;
            text-transform: uppercase;
        }

        .cta-btn:hover {
            background-color: #a2a1f0;
        }

        .carousel-item {
            background-color: #b3b0f7;
            color: white;
            padding: 30px;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            border-radius: 10px;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: black;
        }

        #promoBanner {
            width: 100%;
            height: 400px; 
        }

        #promoBanner .carousel-inner {
            height: 100%;
        }

        #promoBanner .carousel-item img {
            height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .icon-button {
            font-size: 20px;
        }

        .icon-button img {
            width: 25px; 
        }

        .promo-text {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .text-container {
            padding-left: 90px;
        }

       
        .product-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

       
        @media (max-width: 768px) {
            .product-cards {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); 
            }
        }
        
        @media (max-width: 480px) {
            .product-cards {
                grid-template-columns: 1fr; 
            }
        }
        .contact-section {
            background: url('img/your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            padding: 50px 0;
            text-align: center;
            position: relative;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        .contact-box {
            background-color: rgba(0, 0, 0, 0.5); 
            padding: 20px 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .contact-box:hover {
            transform: scale(1.05); 
        }

        .contact-box i {
            font-size: 30px; 
        }

       
        .parallax {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            z-index: -1;
            background-attachment: fixed;
        }

       
        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }
        }



        .contact-section {
            background-image: url(img/fundo_contato.png);
            color: white;
            padding: 50px 0;
            text-align: center;
            position: relative;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
        }

       
        .contact-container {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
        }

        
        .contact-box {
            background-color: #6a4c9c; 
            padding: 15px; 
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            color: white; 
            width: 100px; 
            height: 100px; 
            text-align: center;
        }

        .contact-box a {
            text-decoration: none;
            color:white;
        }

        .contact-box:hover {
            transform: scale(1.1); 
            background-color: #573f8c; 
        }

        
        .contact-box i {
            font-size: 60px; 
        }
   
        .btn a {
            text-decoration: none;
            color: white; 
            margin-left: 5px; 
        }

        .btn:hover {
            background-color: #a2a1f0;
        }

        .icon-button {
            font-size: 20px;
            margin-right: 5px;
        }

        .submenu {
            background-color: white;
            color: #b3b0f7;
            display: flex;
            padding: 1px 0;
            font-size: 20px;
            font-weight: bold;
            justify-content:space-between;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
        }

        .btf{
            background-color: white;
            color: #b3b0f7;
            font-size: 20px;
            font-weight: bold;
            border: none;
        }

        .btf a {
            color:#b3b0f7;
            text-decoration: none;
            font-size: 20px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 10px;
        }

        .dropdown a {
            color:#b3b0f7;
            text-decoration: none;
        }

        .dropdown-content a {
            color:#b3b0f7;
            text-decoration: none;
            font-size: 18px;
        }

        .dropdown-content {
            color:#b3b0f7;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .recomendacao {
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .titulorcm {
            font-size: 30px;
            font-weight: bold;
            color: black;
            text-align: center;
        }

        .exemplorcm {
            margin-inline-start: 20%;
            margin-inline-end: 20%;
            margin-top: 30px; 
            display: flex;
            text-align: center;
            justify-content:space-between;
        }

        .fotorcm img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        footer {
            background-color: #f9f9f9;
            padding: 20px 40px;
            box-shadow: 0px 0px 8px #ccc;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-section, .footer-newsletter {
            flex: 1;
            min-width: 200px;
        }

        .footer-section h4, .footer-newsletter h4 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 5px 0;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #333;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-newsletter p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer-newsletter form {
            display: flex;
            gap: 10px;
        }

        .footer-newsletter input {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .footer-newsletter button {
            padding: 5px 10px;
            border: none;
            background-color: #6441ce;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .footer-newsletter a{
            text-decoration: none;
            color:white;
        }

        .footer-newsletter button:hover {
            background-color: #4f33a1;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 14px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .social-icons a, i{
            font-size: 20px;
            margin-left: 10px;
        }  

        .carousel-container {
            width: 450px;
            height: 450px;
            background-color: #a2a1f0;
            border-radius: 15px;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .carousel-container {
                width: 100%;
                height: auto;
                padding: 5px;
            }

            .carousel-inner img {
                height: auto;
            }
        }
      

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; 
        }

        .button-container a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .responsive-button {
            background-color: #a2a1f0;
            color: #ffffff;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }


        .responsive-button:hover {
            background-color:#a2a1f0;
            transform: scale(1.05);
        }

        
        .responsive-button:active {
            transform: scale(0.95);
        }


        @media (max-width: 768px) {
            .responsive-button {
                font-size: 14px;
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            .responsive-button {
                font-size: 12px;
                padding: 8px 16px;
            }
        }


        *{
    margin: 0;
    padding: 0;
}

.conteudo{
    width: auto;
    display: grid;
    place-content: center;
    padding: 1rem;
    position: static;
}
.contsecgrid{
    display: grid;
    padding: 30px;
    grid-template-columns: 25% 25% 25% 25%;
}
.quadro{
    padding: 20px;
    line-height: 150%;
}
.imgquadro img{
    text-align: center;
    width: 100%;
    height: 100%;
}

.h2-destaque{
    text-align: center;
    justify-content: center;
}
 
.conteudo{
    width: auto;
    display: grid;
    place-content: center;
    padding: 1rem;
    position: static;
}
.contsecgrid-produto{
    display: grid;
    padding: 30px;
    grid-template-columns: 25% 25% 25% 25%;
}
.quadro-produto{
    padding: 20px;
    line-height: 150%;
}
.imgquadro-produto img{
    text-align: center;
    width: 100%;
    height: 100%;
}

 img{
    width: 100%;
    transition: 0.5s all ease-in-out;
}
img:hover {
    transform: scale(1.1);
}
.imagens {
    width: 90%;
    height: 100%;
    overflow: hidden;
    margin: 0 auto;
}

.btn-produto{
    color: #fff;
    background: #de7cf7;
    padding: 4px 30px;
    border-radius: 25px;
    align-items: center;
    border-bottom: none;
    font-size: 20px;
    border: none;
    cursor: pointer;
}
.btn-produto :hover{
    color: #fa72cb;
    transition: all .50s ease;
}
.product-title{
    text-align: center;
}
.item-produtos{
    display: flex;
    justify-content: space-between;
}

.item-produtos .icons{
        display: flex;
        align-items: center;
        gap: 20px;
        margin: 10px 20px;
        color: #9a4bae;
        cursor: pointer;
        text-decoration: none;
        font-size: 35px;
    }
    .icons{
        color: #de7cf7;
    }
    .icons :hover{
        color: #fa72cb;
        transition: all .50s ease;
    }
    </style>

</head>
<body>

    <header class="container-fluid">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="logo">
                <img style="width: 50px; height: auto;margin: 2px;padding: 0;" src="img/logo.png" alt="Logo Bunny Makes">
            </div>

            <div class="search-container position-relative">
                <input type="text" class="form-control" placeholder="Digite o que você procura">
                <i class="fas fa-search search-icon"></i>
            </div>

            <div class="header-right">
                <button class="btn">
                    <i class="fas fa-headset icon-button"></i>
                    <a href="atendimento.html">Central de Atendimento</a>
                </button>

                <button class="btn">
                    <i class="fas fa-user icon-button"></i>
                    <a href="cadastro.php">Cadastre-se</a>
                </button>

                <button class="btn">
                    <i class="fas fa-shopping-cart icon-button"></i>
                    <a href="carrinho.html">Carrinho</a>
                </button>
            </div>
        </div>
    </header>

    <header class="submenu">
        <div class="itemmenu">
            <div class="dropdown">
                <span><a href=""><i class="fas fa-bars" id="menu-bars"></i> Todas as categorias</a></span>
                    <div class="dropdown-content">
                        
                        <?php
                
                        include "banco/conexao.php";
        
                        $conn = conectar();
                        
                        $sql = "SELECT * FROM categoria";
        
                        $result = $conn->query($sql);
        
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){

                                echo "<p><a href=''>".$row["nome"]."</a></p>"; 
                                
                            }
        
                        }else{
                            echo "<p>Não existe categorias cadastradas</p>";
                        }
        
                    ?>
                        <p><a href="categoria.php">Mais opções</a></p>
                    </div>
          </div>
        </div>

        <button class="btf">
            <i class="fa-solid fa-bullhorn" style="color: #B197FC;"></i>
            Ofertas
        </button>

        <button class="btf">
            <a href="carrinho.html">Favoritos</a>
            <i class="fa-solid fa-heart" style="color: #B197FC;"></i>
        </button>
    </header>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="promoBanner" class="carousel slide carousel-container" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img src="img/Gel facial.jpg" alt="Promoção 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/pink.jpg" alt="Promoção 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/mimo.jpg" alt="Promoção 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#promoBanner" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#promoBanner" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <h1 style="color: #B197FC;" class="text-center display-4">Bunny Makes</h1>
                <p style="color: #6441ce;" class="text-muted text-center">
                    Explore uma linha de produtos incríveis para você. Promoções exclusivas que vão transformar sua experiência.
                </p>
                <div class="button-container">
                    <button class="responsive-button">
                    <a href="login.php">Fazer login</a></button>
                </div>
            </div>
        </div>
    </div>



    

    <section class="product-cards container">
        <div class="card">
            <img src="img/Lip Gloss Glitter Ruby Rose 🎀.jpg" alt="Produto 1">
        </div>
        <div class="card">
            <img src="img/mimo.jpg" alt="Produto 2">
        </div>
        <div class="card">
            <img src="img/cola.jpg" alt="Produto 3">
        </div>
        <div class="card">
            <img src="img/Corretivo Melu by Ruby Rose💜.jpg" alt="Produto 4">
        </div>

        <div class="card">
            <img src="img/esfoliante labial ruby rose.jpg" alt="Produto 1">
        </div>
        <div class="card">
            <img src="img/• Gloss _ Linha MELU by Ruby Rose.jpg" alt="Produto 2">
        </div>
        <div class="card">
            <img src="img/make.jpg" alt="Produto 3">
        </div>
        <div class="card">
            <img src="img/Gel facial.jpg" alt="Produto 4">
        </div>
        </br>
    </section>

    <div class="conteudo">
        <div class="contsecgrid">
            <div class="quadro">
                <div class="imgquadro"><a href=""><img src="img/post1.jpg"></a></div>
            </div>
            <div class="quadro">
                <div class="imgquadro"><a href=""><img src="img/post2.jpg"></a></div>
            </div>
            <div class="quadro">
                <div class="imgquadro"><a href=""><img src="img/post3.jpg"></a></div>
            </div>
            <div class="quadro">
                <div class="imgquadro"><a href=""><img src="img/post4.jpg"></a></div>
            </div>
    </div>


   <section class="shopcontainer">
    <h2 class="section-title"><samp style="font-family: 'Agbalumo', sans-serif;">Chegou Agora na</samp> <span style="color: #b3b0f7; font-family: 'Sour Gummy', sans-serif;">Bunny </span><span style="color: #fa72cb; font-family: 'Sour Gummy', sans-serif;">Makes</span></h2>
   
               <div class="contsecgrid-produto">
                   <div class="quadro-produto">
                       <div class="imgquadro-produto"><a href=""><img src="img/produto01.jpg"></a></div>
                       <h2 class="product-title">Delineador Melu</h2>
                       <div class="item-produtos">
                        <a href="#" class="icons">
                       <i class='bx bx-heart'></i></a>
                       <button class="btn-produto">R$ 18,40</button>
                       <a href="#" class="icons">
                       <i class='bx bx-cart add-cart'></i></a>
                    </div>
                   </div>

                    <div class="quadro-produto">
                        <div class="imgquadro-produto"><a href=""><img src="img/produt6.jpg"></a></div>
                        <h2 class="product-title">Delineador Melu</h2>
                        <div class="item-produtos">
                         <a href="#" class="icons">
                        <i class='bx bx-heart'></i></a>
                        <button class="btn-produto ">R$ 18,40</button>
                        <a href="#" class="icons">
                        <i class='bx bx-cart add-cart'></i></a>
                     </div>
                    </div>

                        <div class="quadro-produto">
                            <div class="imgquadro-produto"><a href=""><img src="img/produto3.jpg"></a></div>
                            <h2 class="product-title">Delineador Melu</h2>
                            <div class="item-produtos">
                             <a href="#" class="icons">
                            <i class='bx bx-heart'></i></a>
                            <button class="btn-produto">R$ 18,40</button>
                            <a href="#" class="icons">
                            <i class='bx bx-cart add-cart'></i></a>
                         </div>
                        </div>

                            <div class="quadro-produto">
                                <div class="imgquadro-produto"><a href=""><img src="img/produto4.jpg"></a></div>
                                <h2 class="product-title">Delineador Melu</h2>
                                <div class="item-produtos">
                                 <a href="#" class="icons">
                                <i class='bx bx-heart'></i></a>
                                <button class="btn-produto">R$ 18,40</button>
                                <a href="#" class="icons">
                                <i class='bx bx-cart add-cart'></i></a>
                             </div>
                            </div>
               </div>
                <h2 class="h2-destaque"><span style="color: #fa72cb; font-family: 'Sour Gummy', sans-serif; text-align: center;">DESTAQUES</span></h2>
            <div class="contsecgrid-produto">
                <div class="quadro-produto">
                    <div class="imgquadro-produto"><a href=""><img src="img/blush.jpg"></a></div>
                    <h2 class="product-title">Delineador Melu</h2>
                    <div class="item-produtos">
                        <a href="#" class="icons">
                       <i class='bx bx-heart'></i></a>
                       <button class="btn-produto">R$ 18,40</button>
                       <a href="#" class="icons">
                       <i class='bx bx-cart add-cart'></i></a>
                    </div>
                </div>
                <div class="quadro-produto">
                    <div class="imgquadro-produto"><a href=""><img src="img/blush1.jpg"></a></div>
                    <h2 class="product-title">Delineador Melu</h2>
                    <div class="item-produtos">
                        <a href="#" class="icons">
                       <i class='bx bx-heart'></i></a>
                       <button class="btn-produto">R$ 18,40</button>
                       <a href="#" class="icons">
                       <i class='bx bx-cart add-cart'></i></a>
                    </div>
                </div>
                <div class="quadro-produto">
                    <div class="imgquadro-produto"><a href=""><img src="img/images.jpg"></a></div>
                    <h2 class="product-title">Delineador Melu</h2>
                    <div class="item-produtos">
                        <a href="#" class="icons">
                       <i class='bx bx-heart'></i></a>
                       <button class="btn-produto">R$ 18,40</button>
                       <a href="#" class="icons">
                       <i class='bx bx-cart add-cart'></i></a>
                    </div>
                </div>
                <div class="quadro-produto">
                    <div class="imgquadro-produto"><a href=""><img src="img/saboneta.jpg"></a></div>
                    <h2 class="product-title">Delineador Melu</h2>
                    <div class="item-produtos">
                        <a href="#" class="icons">
                       <i class='bx bx-heart'></i></a>
                       <button class="btn-produto">R$ 18,40</button>
                       <a href="#" class="icons">
                       <i class='bx bx-cart add-cart'></i></a>
                    </div>
                </div>


            </div>  

   </section>

    <section class="contact-section">
        <div class="parallax"></div>
        <div class="contact-container">
            <div class="contact-box">
                <a href="https://www.instagram.com/bunny__makes?igsh=Mjk5YzBsOWJyMDhm">
                <i class="fab fa-instagram" title="Conheça nosso instagram!"></i></a>
            </div>
            <div class="contact-box">
                <i class="fab fa-whatsapp" title="Nosso whatsapp estará disponível em breve!"></i> 
            </div>
            <div class="contact-box">
                <a href="https://www.instagram.com/s/aGlnaGxpZ2h0OjE4MDUzMjg0MTUwNzI2MjM5?
                        story_media_id=3420662489927748174_66775223612&igsh=OTZ6NGJwc29wd3Rl">
                <i class="fa-solid fa-percent" title="Mais informações sobre as promoções!"></i></a>
            </div>
           <div class="contact-box">
            <a href="https://www.instagram.com/s/aGlnaGxpZ2h0OjE4MDUzMjg0MTUwNzI2MjM5?
                    story_media_id=3420662489927748174_66775223612&igsh=OTZ6NGJwc29wd3Rl">
            <i class="fa-solid fa-truck" title="Conheça nosso processo de entrega"></i></a>
            </div>
        </div>
    </section>

    <section class="recomendacao">
        <div class="titulorcm">
            <i class="fa-regular fa-star" style="color: #B197FC;"></i>
            QUEM JÁ COMPROU RECOMENDA
            <i class="fa-regular fa-star" style="color: #B197FC;"></i>
        </div>
        <div class="exemplorcm ">
            <div class="fotorcm">
                <img src="img/recomendacao1.png" alt="Recomendação 1">
            </div>
            <div class="fotorcm">
                <img src="img/recomendacao2.png" alt="Recomendação 2">
            </div>
            <div class="fotorcm">
                <img src="img/recomendacao3.png" alt="Recomendação 3">
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
            <h4>Seção</h4>
                <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Produtos</a></li>
                </ul>
            </div>

            <div class="footer-section">
            <h4>Seção</h4>
                <ul>
                <li><a href="atendimento.html">Central de atendimento</a></li>
                <li><a href="carrinho.html">Carrinho</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><a href="cadastro.php">Cadastrar</a></li>
                
                </ul>
            </div>

            <div class="footer-newsletter">
            <h4>Faça parte da nossa loja</h4>
            <p>A Bunny Makes tem o prazer de recebê-lo(a) de braços abertos</p>
                <form>
                    <input type="email" placeholder="Endereço de e-mail" required>
                    <button type="submit">
                        <a href="cadastro.php">Cadastre-se</a>
                    </button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
        <p>© 2024 Bunny Makes. Todos os direitos reservados</p>
            <div class="social-icons">
                <a href="https://www.instagram.com/bunny__makes?igsh=Mjk5YzBsOWJyMDhm" title="Instagram">
                <i class="fa-brands fa-instagram" style="color: #6441ce;"></i></i></a>
                <i class="fa-brands fa-whatsapp" style="color: #6441ce;" title="Whatsapp"></i></a>
            </div>
        </div>

        
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>