<?php
require './View/ValidaLogin.php';

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MuninFeather - Pagina Inicial</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-latest.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic' rel='stylesheet' type='text/css'>
        <style>.geral{width: 100%; margin: 0 auto;}</style>
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
        <script type="text/javascript">
    $(document).ready(function() {
       $('#subir').click(function(){ 
          $('html, body').animate({scrollTop:0}, 'slow');
      return false;

         });
     });

</script>
    </head>
    <body>
        <div class="geral">
            <div id='cssmenu'>
                <ul>
                    <li class='active has-sub'><a href='index.php'><span>Inicio</span></a></li>
                    <li ><a href='produtos.php'><span>Produtos</span></a> </li>
                    <li><a href='View/Formulario.php'><span>Cadastro</span></a></li>
                    <li ><a href='DuvidasFrequentes.php'><span>Duvidas</span></a></li>
                    <li style='float: right;'><a href='#'><span><?php if(!isset($_SESSION['usuario']))echo "<a href='Login.php'>Entrar</a>";?></span></a></li>
                    <li style='float: right;'><a href='controladores/saircontroller.php'><span><?php if(isset($_SESSION['perfil']))echo "SAIR"?></span></a></li>
                    <li style='float: right;'><a href='#'><span><?php if(isset($_SESSION['usuario']))echo $_SESSION['usuario']?></span></a></li>
                    
                    
                </ul>
            </div> 
           <div class="slides">
                    <div class="slides">
                    <ul> <!-- slides -->
                        <li><img src="img/img4.jpg"  height="400" width="135%"/></li>
                        <li><img src="img/img.jpg" height="400" width="100%" /></li>   
                        <li><img src="img/img5.jpg"  height="400" width="105%"/></li>
                        <li><img src="img/img3.jpg"  height="400" width="100%"/></li>
                    </ul>       
           </div>        
           </div>           
           <div class="container_produtos">
               <table cellspacing="25" cellpadding="2" >
                   <tr>
                       <td><img src="img/produto/Blusa10.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff;">Blusa Winter is Coming</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:100px; " >R$39.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E3EA85F05B5B6E7774EC5F9555CC3AF5"/>
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                           
                       </td>
                       <td><img src="img/produto/blusa11.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 25px;">Blusa Fire and Blood</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:100px;  " >R$39.90</p>
                           <p>
                              
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="DE28005E84849A7DD4B0AF8E56CEF4F2" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                       <td><img src="produto/../img/produto/blusa2.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 75px;">Blusa Batman</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:100px;  " >R$39.90</p>
                            <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E39B96AC2F2F2B200442CF9E6A8FA939" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                       <td><img src="img/produto/blusa3.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 55px;">Blusa Superman</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:100px " >R$39.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="8DB129912C2C35E114882FB0CDB06221" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                   </tr>
                   <tr>
                       <td><img src="img/produto/Blusa7.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 35px;" >Blusa Dearth Vader</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:100px;  " >R$39.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E39B96AC2F2F2B200442CF9E6A8FA939" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                       <td><img src="img/produto/blusa6.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 25px;">Blusa de Frio Hogwarts</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; ;margin-left:100px;  " >R$139.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E39B96AC2F2F2B200442CF9E6A8FA939" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                       <td><img src="produto/../img/produto/blusa5.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 45px;">Blusa Supernatural</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:85px " >R$39.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E39B96AC2F2F2B200442CF9E6A8FA939" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                       <td><img src="img/produto/blusa4.jpg" width="300" height="300"/>
                           <p style="font:20px Verdana;font-weight: 600; color: #fff; margin-left: 45px;">Blusa Star Wars</p>
                           <p style="font:20px Verdana;font-weight: 600; color: #ff3333; margin-left:85px " >R$39.90</p>
                           <p>
                                   <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                   <input type="hidden" name="itemCode" value="E39B96AC2F2F2B200442CF9E6A8FA939" />
                                   <input type="submit" class="btn" value="COMPRAR">
                                   </form>
                           </p>
                       </td>
                   </tr>
               </table>
          </div>
           </div>  
            <!------------ BANNER -->
            <div class="banner">
                <img src="img/produto/aboutus.jpg" width="100%"/>
            </div>
           
            
           <!--DADOS DO BLOG-->
           <div class="caixa_blog">
               <div>
                   <div class="titulo_blog">
               <h2 align="center">Novidades Geeks!</h2>
                  </div>
              <video width="560" height="320" controls>
                  <source src="video/Batman vs Superman- A Origem da Justiça (2016) - Trailer 3 Legendado.mp4" type="video/mp4">
                                     
             </video>
               <p class="titulo_post">Batman vs Superman</p>
               <p class="titulo_post2">Etiam varius suscipit mauris, sit amet condimentu
                   m erat accumsan vel. Nulla molestie magna vel me
                   tus porta, at consequat diam rutrum. Pellentesque pla
                   cerat, nisi in facilisis dapibus, nibh leo scelerisque elit
                   ut mattis magna magna et ipsum. Cras hendrerit leo nec commodo c
                   ongue. Proin lacinia vehicula ligula a facilisis. Donec varius mi magna
                   , nec laoreet sapien vulputate ut. Quisque fermentum elit augue, in lacinia 
                   neque malesuada nec. Aliquam et arcu ac libero semper dictum ut in orci. Ut ege
                   t nisl tempus, vehicula urna sit amet, suscipit ligula. Aenean sit amet tellus non e
                   x tincidunt feugiat non ut ligula. Nam lobortis libero libero, in scelerisque justo cong
                   ue eget. Donec interdum vehicula massa, q
                   uis aliquet leo. Vivamus leo nibh, facili
                   sis ac efficitur a, porttitor at tortor.
                   ue eget. Donec interdum vehicula massa, q
                   uis aliquet leo. Vivamus leo nibh, facili
                   sis ac efficitur a, porttitor at tortor.
               </p>
               </div>
                     <br>
           <div class="caixa_blog" >
               <img src="img/morto.jpg" height="315" width="560" style=" border: 4px solid #000;"/>
               <p class="titulo_post3_index">Fãns tem medo de final de Guerra Civil </p>
               <p class="titulo_post4">Etiam varius suscipit mauris, sit amet condimentu
                   m erat accumsan vel. Nulla molestie magna vel me
                   tus porta, at consequat diam rutrum. Pellentesque pla
                   cerat, nisi in facilisis dapibus, nibh leo scelerisque elit
                   ut mattis magna magna et ipsum. Cras hendrerit leo nec commodo c
                   ongue. Proin lacinia vehicula ligula a facilisis. Donec varius mi magna
                   , nec laoreet sapien vulputate ut. Quisque fermentum elit augue, in lacinia 
                   neque malesuada nec. Aliquam et arcu ac libero semper dictum ut in orci. Ut ege
                   t nisl tempus, vehicula urna sit amet, suscipit ligula. Aenean sit amet tellus non e
                   x tincidunt feugiat non ut ligula. Nam lobortis libero libero, in scelerisque justo cong
                   ue eget. Donec interdum vehicula massa, q
                   uis aliquet leo. Vivamus leo nibh, facili
                   sis ac efficitur a, porttitor at tortor.</p>
              
           </div>
               <br>
               <div class="caixa_blog">
                   <img src="img/jessica.jpg" height="315" width="560" style=" border: 4px solid #000;"/>
               <p class="titulo_post5_index">Jessica Jones - Serie Destaque</p>
               <p class="titulo_post6">Etiam varius suscipit mauris, sit amet condimentu
                   m erat accumsan vel. Nulla molestie magna vel me
                   tus porta, at consequat diam rutrum. Pellentesque pla
                   cerat, nisi in facilisis dapibus, nibh leo scelerisque elit
                   ut mattis magna magna et ipsum. Cras hendrerit leo nec commodo c
                   ongue. Proin lacinia vehicula ligula a facilisis. Donec varius mi magna
                   , nec laoreet sapien vulputate ut. Quisque fermentum elit augue, in lacinia 
                   neque malesuada nec. Aliquam et arcu ac libero semper dictum ut in orci. Ut ege
                   t nisl tempus, vehicula urna sit amet, suscipit ligula. Aenean sit amet tellus non e
                   x tincidunt feugiat non ut ligula. Nam lobortis libero libero, in scelerisque justo cong
                   ue eget. Donec interdum vehicula massa, q
                   uis aliquet leo. Vivamus leo nibh, facili
                   sis ac efficitur a, porttitor at tortor.</p>
             
             </div>
          
           <br>
           <div class='container_2'>
               <div class="titulo_blog">
               <h2 align="center">Estampas destaques!</h2>
                  </div>
               </div>
            <div class="produto_1_queima slides">
                <ul> <!-- slides -->
                    <li><img src="img/produto/Breaking Bad/my.jpg"/></li>
                    <li><img src="img/produto/Breaking Bad/name.jpg"/></li>
                    <li><img src="img/produto/Breaking Bad/reme.jpg" /> </li>
                </ul>       
            </div>
            <div class="produto_1_queima slides">
                <ul> <!-- slides -->
                    <li><img src="img/produto/Game of Thrones/Game of Thrones.jpg"/></li>
                    <li><img src="img/produto/Game of Thrones/game.jpg" /></li>   
                    <li><img src="img/produto/Game of Thrones/game2.jpg" /></li>
                    <li><img src="img/produto/Game of Thrones/gameof.jpg" /></li>
                </ul>       
            </div>
            <div class="produto_1_queima slides">
                <ul> <!-- slides -->
                    <li><img src="img/produto/Star Wars/starwar.jpg" /></li>
                    <li><img src="img/produto/Star Wars/starwar1.png" /></li>
                    <li><img src="img/produto/Star Wars/starwar2.jpg" /></li>                    
                    <li><img src="img/produto/Star Wars/starwar3.gif" /></li>
                </ul>       
             </div>
               
           </div>  
         
            
           
           
        
        <footer>
            <a  href="#" id="subir"><img src="img/seta.png" height="50" width="50" style="float:right;"/></a>
        <div class="splitter"></div>
        <ul>
            <li>
                <div class="icon" data-icon="S"></div>
                <div class="text">
                    <h4>Skype</h4>
                    <div>Usamos Skype para atendermos clientes,que estão com duvidas,entre outros varios tipos de assunto relacionado ao MuninFeather.</div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="f"></div>
                <div class="text">
                    <h4>Facebook</h4>
                    <div>Usamos Facebook para postarmos promoções,siga-nos e fique atento as promoções que podem chegar até 90%.</div>
                </div>
            </li>
            <li>
                <div class="icon" data-icon="n"></div>
                <div class="text">
                    <h4>Segurança</h4>
                    <div>Crie sua conta sem medo e entre para ver promoções,o site possui fortes codigos para a segurança de seus dados.</div>
                </div>
            </li>
        </ul>

        <div class="bar">
            <div class="bar-wrap">
                <ul class="links">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../produtos.php">Produtos</a></li>
                    <li><a href="../paginas/Contato.php">Contato</a></li>
                    <li><a href="../Formulario.php">Cadastro</a></li>
                    <li><a href="../login.php">Login</a></li>
                </ul>

                <div class="social">
                    <a href="#" class="fb">
                        <span data-icon="f" class="icon"></span>
                        <span class="info">
                            <span class="follow">Veja as Promoções no Facebook</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>

                    <a href="#" class="tw">
                        <span data-icon="T" class="icon"></span>
                        <span class="info">
                            <span class="follow">Siga nos Twitter</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>

                    <a href="#" class="rss">
                        <span data-icon="R" class="icon"></span>
                        <span class="info">
                            <span class="follow">Se inscreva</span>
                            <span class="num">9,999</span>
                        </span>
                    </a>
                </div>
                <div class="clear"></div>
                <div class="copyright">&copy;  2015 Todos Direitos Reservados</div>
            </div>
        </div>
    </footer>
        <div class="pos_footter"></div>
        
       </div>                  
  
        </div>
       
    </body>
</html>
