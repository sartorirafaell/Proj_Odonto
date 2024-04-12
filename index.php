
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Clínica Rafadol</title>
</head>
<body>
   
    <header class="header">
        <div id="logo">
            <a href="index.php" title="Clínica Rafadol">
                <img src="imagens/logoClinica.png" alt="Clínica Rafadol">
            </a>
            
        </div>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="view/tratamentos.html">Tratamentos</a></li>
                <li><a href="view/info-dicas.html">Informativo/Dicas</a></li>
                <li><a href="view/sobrenos.html">A Clínica</a></li>
            </ul>
        </nav>
        <div class="admin-area">
            <a href="DAO/login.php"  class="admin-btn">Área do Administrador</a>
        </div>
    </header>
    <main>
        <div class="texto-main">
            <h1>Clínica Odontológica em Porto Alegre</h1>
            <p>Há mais de 20 anos transformando sorrisos</p>
        </div>

        <section class="container">
            <div class="container-imagem"><img src="imagens/foto-conteiner.png" alt=""></div>
            <div class="rounded-box">
                
                <div class="titulo-box"><p>Olá, por qual tratamento você procura?</p></div>
                <div class="subtitulo-box"><p>É só preencher que logo logo respondemos!</p></div>
                <form action="#" method="post">
                    <input type="text" name="nome" placeholder="Nome*" required>
                    <input type="text" name="whatsapp" placeholder="WhatsApp (ex: +5551111111111)*" required>
                    <select name="tratamento" required>
                        <option value="" disabled selected>Tratamento*</option>
                        <option value="tratamento1">Implante Dentário</option>
                        <option value="tratamento2">Prótese Dentária</option>
                        <option value="tratamento3">Lentes de Contato Dental</option>
                        <option value="tratamento3">Acunpuntura</option>
                    </select>
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>
                    <button type="submit" onclick="alert('Mensagem Enviada.')">Enviar</button>
                </form>
    
            </div>
        
        </section>
        <article id="steps" class="padding-block">
            <div class="conteudo-princ">
            <div class="conteudo">
                <div class="title-block text-center mb-5">
                    <h2 class="color-default font-futura-book">
                        Etapas
                        
                    </h2>
                </div>
                <ul id="listSteps" class="row">
                    <li class="col-md-4">
           <div class="item-step">
              <div class="figure-step position-relative text-center">
                 <span class="font-futura-book">1</span>

                 <figure>
                    <img src="https://clinicabiehl.com.br/storage/app/uploads/public/630/f6c/46b/630f6c46b0a51441999851.svg" alt="Avaliação" loading="lazy" height="62" width="62" class="img-fluid">
                 </figure>
              </div>

              <div class="description-step font-futura-book color-default">
                 <h3>
                    Avaliação
                 </h3>

                 <p>Entre em contato com a clínica para agendar sua consulta de avaliação, assim, nossos dentistas construirão o seu plano de tratamento.</p>
              </div>
           </div>
        </li>
                    <li class="col-md-4">
           <div class="item-step">
              <div class="figure-step position-relative text-center">
                 <span class="font-futura-book">2</span>

                 <figure>
                    <img src="https://clinicabiehl.com.br/storage/app/uploads/public/630/f6c/574/630f6c5742569720715867.svg" alt="Planejamento" loading="lazy" height="62" width="62" class="img-fluid">
                 </figure>
              </div>

              <div class="description-step font-futura-book color-default">
                 <h3>
                    Planejamento
                 </h3>

                 <p>Nossa equipe lhe apresentará diversas condições de pagamento, de acordo com suas necessidades clínicas e financeiras, construindo seu cronograma de consultas odontológicas</p>
              </div>
           </div>
        </li>
                    <li class="col-md-4">
           <div class="item-step">
              <div class="figure-step position-relative text-center">
                 <span class="font-futura-book">3</span>

                 <figure>
                    <img src="https://clinicabiehl.com.br/storage/app/uploads/public/630/f6c/650/630f6c650b06a831340324.svg" alt="Tratamento" loading="lazy" height="62" width="62" class="img-fluid">
                 </figure>
              </div>

              <div class="description-step font-futura-book color-default">
                 <h3>
                    Tratamento
                 </h3>

                 <p>Com tecnologia e segurança, um dentista especializado, de nosso corpo clínico, realizará seu tratamento em um único local, com estacionamento próprio, para seu maior conforto e segurança.</p>
              </div>
           </div>
        </li>
              </ul>
            </div>
        </div>
        </article>

        <article id="testimonies" class="padding-block">
            <div class="conteudo-testimonies">
                <div class="title-block text-center mb-5">
                    <h2 class="color-default font-futura-book">
                        O que dizem os pacientes que passaram pela Clínica
                    </h2>
                </div>
                <div class="block-text width-block text-center font-futura-book color-default mb-5">
                    <h3>Agende sua avaliação na clínica e descubra o seu melhor sorriso com a ajuda de quem entende do assunto!</h3>
                    <div id="google">
                        <figure>
                            <img src="https://clinicabiehl.com.br/themes/default/assets/images/google.svg" alt="Google" loading="lazy" class="img-fluid">
                        </figure>
    
                                                <p>
                                <span class="d-block">Excelente</span>
                                Com base na nota 4.9 de 5 estrelas
                            </p>
                                        </div>
                </div>
                <ul class="list-testimonies row justify-content-center">
                    <li class="col-md-6 col-lg-4">
        <div class="item-testimony color-default font-futura-book h-100">
            <div class="info-testimony d-flex flex-wrap align-items-center mb-3">
                                            <figure class="text-center">
                    <img src="imagens/usu-padrao.png" alt="" height="70" width="70" loading="lazy" class="img-fluid rounded-circle">
                </figure>
                
                <div class="name-testimony">
                    <h5>Joao Silva</h5>

                </div>
            </div>

            <p dir="ltr">"Eu adoro o carinho com que toda equipe me atende.</p>

<p dir="ltr">A qualidade do serviço e a segurança que o conhecimento profissional transmitido, para mim é o que se precisa para definir onde se faz este tipo de trabalho, nesta especialização de implantes dentários.</p>

<p dir="ltr">Estou totalmente satisfeito. Muito obrigada, Rafadol Odontologia."</p>
        </div>
    </li>
                    <li class="col-md-6 col-lg-4">
        <div class="item-testimony color-default font-futura-book h-100">
            <div class="info-testimony d-flex flex-wrap align-items-center mb-3">
                                            <figure class="text-center">
                    <img src="imagens/usu-padrao.png" alt="" height="70" width="70" loading="lazy" class="img-fluid rounded-circle">
                </figure>
                
                <div class="name-testimony">
                    <h5>Paulo Roberto</h5>

                </div>
            </div>

            <p dir="ltr">"É o melhor cirurgião com quem tive o privilégio em realizar 3 implantes dentários, a quem devo minha auto estima.</p>

<p dir="ltr">Profissional zeloso, sempre fazendo acima do esperado, transmite total confiança além de sua calma e atenção e de toda a sua equipe.</p>

<p dir="ltr">Merece total confiança, nota 10. E os preços e condições são ótimas."&nbsp;</p>
        </div>
    </li>
                    <li class="col-md-6 col-lg-4">
        <div class="item-testimony color-default font-futura-book h-100">
            <div class="info-testimony d-flex flex-wrap align-items-center mb-3">
                                            <figure class="text-center">
                    <img src="imagens/usu-padrao.png" alt="" height="70" width="70" loading="lazy" class="img-fluid rounded-circle">
                </figure>
                
                <div class="name-testimony">
                    <h5>Robert Renan</h5>

                </div>
            </div>

            <p dir="ltr">“Para mim o atendimento da Dra Fernanda além de ser extraordinário ele é acolhedor.</p>

<p dir="ltr">Meu tratamento ortodôntico foi um sucesso, realizado com muito profissionalismo e perfeição!</p>

<p dir="ltr">Além de tudo ela tem um astral, uma simpatia e uma energia que me conquistou desde a primeira consulta.”</p>
        </div>
    </li>
                </ul>
            </div>

        </article>
    </main>

    <!-- INICIO DO FOOTER -->
    <footer>
    <section id="contentFooter" class="padding-block bg-default font-futura-book">
        <div class="conteudo-footer">
            <div class="row justify-content-center">
                <div class="column-footer col-md-6 col-lg-4">
                    <div id="infosFooter">
                        <h4 class="text-white mb-4">
                            Contato
                        </h4>

                        <ul id="listInfos">
                                                        <li>
                                <div class="item-info d-flex ">
                                    <i class="fas fa-map-marker-alt"></i>

                                    <address class="info-text">
                                        <p>Av. Arlindo Silva, 2304
    <br>Porto Alegre – RS
    <br>CEP: 90580-022</p>
                                    </address>
                                </div>
                            </li>
                            
                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                        
                                <li>
<div class="item-info d-flex">
<i class="fas fa-phone-alt"></i>
<div class="info-text">
(51) 3000.4000

</div>
</div>
</li>

   <li>
<div class="item-info d-flex">
  <i class="fab fa-whatsapp"></i>
<div class="info-text">
(51) 98160.8853

</div>
</div>
</li>

                                
                                                            
                                                        <li>
                                <div class="item-info d-flex ">
                                    <i class="fal fa-envelope"></i>

                                    <div class="info-text">
                                            contato@clinicarafadol.com.br
                                        
                                    </div>
                                </div>
                            </li>
                                                    </ul>
                    </div>
                </div>

                <div class="column-footer col-md-3 col-lg-2">
                    <div id="menuFooter">
                        <h4 class="text-white mb-4">
                            Links
                        </h4>

                        <ul>
                            <li>
                                <a title="Página Inicial" href="index.php" class="transition-all ">
                                    <span>Página Inicial</span>
                                </a>
                            </li>
                            
                            <li>
                                <a title="Tratamentos" href="view/tratamentos.html" class="transition-all ">
                                    <span>Tratamentos</span>
                                </a>
                            </li> 
                            
                            <li>
                                <a title="Informativo/Dicas" href="view/info-dicas.html" class="transition-all ">
                                    <span>Informativo/Dicas</span>
                                </a>
                            </li>

                            <li>
                                <a title="A Clínica" href="view/sobrenos.html" class="transition-all ">
                                    <span>A Clínica</span>
                                </a>
                            </li>
                            

                        </ul>
                    </div>
                </div>

                <div class="column-footer col-md-3 col-lg-2">
                    <div id="servicesFooter">
                        <h4 class="text-white">
                            Tratamentos
                        </h4>

                        <ul>
                                                        <li>
                                <a title="Implantes Dentários" href="" class="transition-all   ">
                                    <span>Implantes Dentários</span>
                                </a>
                            </li>
                                                        <li>
                                <a title="Prótese Dentária" href="" class="transition-all   ">
                                    <span>Prótese Dentária</span>
                                </a>
                            </li>
                                                  
                                                        <li>
                                <a title="Lentes de Contato Dental" href="" class="transition-all   ">
                                    <span>Lentes de Contato Dental</span>
                                </a>
                            </li>
                                                      
                                                        <li>
                                <a title="Clareamento Dentário" href="" class="transition-all  ">
                                    <span>Clareamento Dentário</span>
                                </a>
                            </li>
                                              
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="networkFooter" class="bg-clean">
                <div class="conteudo-network">
            <div id="contentNetworkFooter">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div id="logo2">
                            <a href="index.php" title="Clínica Rafadol">
                                <figure class="transition-all">
                                    <img src="imagens/logoClinicaWhite.png" alt="Clínica Rafadol" loading="lazy" height="66" width="115" class="img-fluid">
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div id="contentNetwork" class="color-default d-flex align-items-center justify-content-lg-between">
                            <figure class="transition-all me-3">
                                <img src="https://clinicabiehl.com.br/themes/default/assets/images/facebook.svg" alt="Facebook Clínica Biehl" loading="lazy" width="36" height="34" class="img-fluid">
                            </figure>

                            <figure class="transition-all">
                                <img src="https://clinicabiehl.com.br/themes/default/assets/images/instagram.svg" alt="Instagram Clínica Biehl" loading="lazy" width="38" height="38" class="img-fluid">
                            </figure>

                            <ul class="list-network d-flex">
                                                                <li>
                                    <a href="https://instagram.com/_sartorirafael" target="_blank"><span>@_sartorirafael</span></a>
                                                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="copyright" class="text-center color-default d-flex align-items-center justify-content-center">
            
                <p>
                    © 2024 Clínica Rafadol - Desenvolvido por Rafael.
                </p>
            
        </div>
    </section>

</footer>

</body>
</html>