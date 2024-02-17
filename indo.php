<!-- <?php
//  function generateImageWithCaption ($image,$title,$text1,$text2) {
//     $image ='./3D-illustrations-gabriel-pinheiro.com.png';
//     $title ='Project1';
//     $text1='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.';
//     $text2='Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.'
//     return $generateImageWithCaption;

//  }
 echo "dgsdg";


 function generateImageWithCaption($imageUrl, $title, $text1,$text2) {
   
    $html = '<div class="image-container">';
    $html .= '<img src="' . $imageUrl . '" alt="' . $title . '" />';
    $html .= '<h2>' . $title . '</h2>';
    $html .= '<p>' . $text1 . '</p>';
    $html .= '<p>' . $text2 . '</p>';
    $html .= '</div>';
    return $html;
 }
 $imageUrl = './3D-illustrations-gabriel-pinheiro.com.png';
 $title = ' Project1';
 $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
          Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';
 $text2 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.';
 echo generateImageWithCaption($imageUrl, $title, $text);



 ///
 <div class="card">
                <img src="./3D-illustrations-gabriel-pinheiro.com.png" >
                <div>
                    <h3>
                        Project1
                     </h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
                        
                      </p>
                      <p>Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.

                      </p>
                </div>
               
              </div>
              <div class="card">
               <img src="./2.png" alt="poto">  

               <div>
                <h3>
                    Project2
                 </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
                  </p>
                  <p>Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim. 
                  </p>
               </div>
            </div>
              <div class="card">
                 
                <img src="./3.png" alt="">  
                <div>
                    <h3>
                        Project3
                    </h3>
                      <p>
                         
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
                      </p> 
                      <p>Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.

                      </p> 
                </div>
                
              </div>
        
            </div> -->
///

function generateImagesWithCaptions($image, $title, $text1, $text2) {
    for ($i = 0; $i < 3; $i++) {
       
        $html .= '<div class="container">';
        $html .= '<img src="' . $images[$i]['url'] . '" alt="' . $images[$i]['title'] . '" />';
        $html  .= '<div>';
        $html .= '<h3>' . $images[$i]['title'] . '</h3>';
        $html .= '</div>';
        $html .= '</div>';
    }
 
  
    return $html;
    $images = array(
        array('url' => './3D-illustrations-gabriel-pinheiro.com.png', 'title' =>'Project 1'),
        array('url' => './2.png', 'title' => 'Project 2'),
        array('url' => './3.png', 'title' => 'Project 3')  
        $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
                     ';
             $text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';
    );
    echo generateContainersWithImages($images,$title, $text1, $text2);

    // $imageUrl = './3D-illustrations-gabriel-pinheiro.com.png';
    //          $title = ' Project1';
    //          $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
    //                  ';
    //          $text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';
    //         //  echo generatecard($imageUrl, $title, $text1 , $text2);
    for ($i = 0; $i < 3; $i++) {
    
        $html = '<div class="card">';
        $html .= '<img src="' . $images[$i]['url'] . '" alt="' . $images[$i]['title'] . '" />';
        $html  .= '<div>';
        $html .= '<h3>' . $images[$i]['title'] . '</h3>';
        $html .= '<p>' . $text1 . '</p>';
        $html .= '<p>' . $text2 . '</p>';
        $html .= '</div>';   
        $html .= '</div>';
        return $html;

        $images = array(
            array('url' => './3D-illustrations-gabriel-pinheiro.com.png', 'title' =>'Project 1'),
            array('url' => './2.png', 'title' => 'Project 2'),
            array('url' => './3.png', 'title' => 'Project 3')  
        );
        $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
        ';
$text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';

echo generatecard($image, $title, $text1, $text2);


kargi
// function generatecard($imageUrl, $title, $text1, $text2) {
   
//     $html = '<div class="card">';
//     $html .= '<img src="' . $imageUrl . '" alt="' . $title . '" />';
//     $html .= '<div>';
//     $html .= '<h2>' . $title . '</h2>';
//     $html .= '<p>' . $text1 . '</p>';
//     $html .= '<p>' . $text2 . '</p>';
//     $html .= '</div>';
//     $html .= '</div>';
//     return $html;
//  }
//  $imageUrl = './3D-illustrations-gabriel-pinheiro.com.png';
//  $title = ' Project1';
 $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
         ';
 $text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';
 echo generatecard($imageUrl, $title, $text1,$text2);
 
          
        <div class="posts">

            <div class="post">

                <img src="./Notifications_Outline 1.png" alt="">

               <div class="title">

                   <h3>
                         Lorem ipsum dolor
                   </h3>

                 <div class="period">

                        April 24, 2022 - 5 min read

                 </div>
                  <p>
                    Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.
                  </p>

                </div>

            </div>
            
            <div class="post">

                <img src="./Data processing _Outline 2.png" alt="">

               <div class="title">

                  <h3>
                         Lorem ipsum dolor
                  </h3>

                          <div class="period"> date
                         
                            April 24, 2022 - 5 min read

                     </div>
                  <p>
                    
                      Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui 
                         odio id enim.
                  </p>
                  
               </div>
          
            </div>
             
            <div class="post">
                <img src="./3Outline-3.png" alt="">

              <div class="title">
                 <h3>Lorem ipsum dolor

                 </h3>
               <div class="period">April 24, 2022 - 5 min read

               </div>
                <p>
                  
                  Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.
  
                </p>
              </div>
          
            </div>
          </div> 
      </div> 


      function generatelatestposts($images, $title, $date,$text ) {
        $html = '';

        if (count($images) < 3) {
          return "Error: Array must have at least 3 elements.";
      }
        for ($i = 0; $i < 3; $i++) {
        $html  .= '<div class="card">';
        $html .= '<img src="' . $images[$i]['url'] . '" alt="' . $images[$i]['title'] . '" />';
        $html .= '<div>';
        $html .= '<h2>' . $images[$i]['title'] . '</h2>';
        $html .= '<p>' . $title . '</p>';
        $html .= '<p>' . $date . '</p>';
        $html .= '<p>' . $text . '</p>';
        $html .= '</div>';
        $html .= '</div>';
        }
        return $html;
     }
     $images = array('./Notifications_Outline 1.png', './Data processing _Outline 2.png', './3Outline-3.png');
$titles = array('Lorem ipsum dolor ');
$date = array('April 24, 2022 - 5 min read');
$text = array('Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.
');

    $text1 = 'orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
 ';
    $text2 = ' Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.';

    echo generatecard ($images, $title, $date,$text );
    lates     
    Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.
  