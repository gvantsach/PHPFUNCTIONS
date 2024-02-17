<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css" >

</head>
<body>
    <header >
        <div class="container" >
              <img src="Starter.png" alt=" poto " >
            <nav class="navigation">
              <ul>
                  <li>
                     <a href="#" > Blog </a>
                 </li>

                  <li>
                     <a href="#" >Newsletter</a>
                  </li>

                  <li>
                     <a href="#" >Twitter</a>
                  </li>
              </ul>
            </nav>
         </div>
    </header>
    <section class="Recent Projects" >
          <div class="container-1" >
                  <h2>
                    Recent <span>Projects</span>    
                  </h2>
               <div class="cards">

            <?php

              function generatecard($images, $text1, $text2) {
                $html = '';

                if (count($images) < 3) {
                 return "Error: Array must have at least 3 elements.";
              }
                for ($i = 0; $i < 3; $i++) {
                $html .= '<div class="card">';
                $html .= '<img src="' . $images[$i]['url'] . '" alt="' . $images[$i]['title'] . '" />';
                $html .= '<div>';
                $html .= '<h3>' . $images[$i]['title'] . '</h3>';
                $html .= '<p>' . $text1 . '</p>';
                $html .= '<p>' . $text2 . '</p>';
                $html .= '</div>';
                $html .= '</div>';
                }
                 return $html;
             }
               $images = array(
               array('url' => '3D-illustrations-gabriel-pinheiro.com.png', 'title' => 'Project 1'),
               array('url' => '2.png', 'title' => 'Project 2'),
               array('url' => '3.png', 'title' => 'Project 3')
            );

              $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
         ';
             $text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';
 
               echo generatecard ($images,  $text1, $text2);
           ?>
            </div> 
          </div> 
    <div class="latestposts">
                 <h2>
                   Latest <span>Posts</span>
                 </h2>
               <div class="posts">

           <?php

             function generatelatestposts($images, $titles,$time, $texts ) {
              $html = '';

             if (count($images) < 3) {
               return "Error: Array must have at least 3 elements.";
              }

             for ($i = 0; $i < 3; $i++ )  {
              $html .= '<div class="post">';
              $html .= '<img src="' . $images[$i] . '" alt="' . $titles[$i] . '" />';
              $html .= '<div>';
              $html .= '<h3>' . $titles[$i] . '</h3>';
              $html .= '<h4>' . $time[$i] . '<h4>';
              $html .= '<p>' . $texts[$i] . '</p>';
              $html .= '</div>';
              $html .= '</div>';
              }
                return $html;
              } 
             $images = array('./Notifications_Outline 1.png', './Data processing _Outline 2.png', './3Outline-3.png');
             $titles = array('Lorem ipsum dolor','Lorem ipsum dolor','Lorem ipsum dolor');
             $time = array('April 24, 2022 - 5 min read','April 24, 2022 - 5 min read','April 24, 2022 - 5 min read');
             $texts = array('Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.','Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.','Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.');

               echo generatelatestposts($images, $titles,$time, $texts )
    
            ?>
            </div>
      </div>      
          <div class="footer" > 
              <div class="footers" >
                    <img src="./© Copyright 2022 All rights reserved.png" alt="">
                 <div class="icon" >
                    <a  href="#"><img src="./facebook.png" alt=""></a>
                    <a  href="#"><img src="./twitter.png"  alt=""></a>
                    <a  href="#"><img src="./ins.png"      alt=""></a>
                 </div>
              </div>
          </div>
  </body>
</html>