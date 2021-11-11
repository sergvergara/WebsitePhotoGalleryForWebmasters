
<!doctype html>
<html>
    <head>
        <title>sv_skeleton</title>
        <link href='simplelightbox-master/dist/simple-lightbox.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
        
        <link href='style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
     <?php 
echo "<BR>"; 
include "../index.php"; 
echo "<BR>"; 
?>
<h1>sv_skeleton</h1>
<h2><a href='images/sv_skeleton.pdf' download>Download all in pdf</a></h2>

        <div class='container'>
            <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'images/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;
                    
                    
                    $filenames = array();
                    while ($filename = readdir($dh)) {
                       $filenames[] = $filename;
                    }

                    sort($filenames);

                    // Read files
                    foreach ($filenames as $temp => $file) {

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "images/thumbnail/".$file;

                            // Image path
                            $image_path = "images/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?php echo $image_path; ?>">
                                    <img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                                </a>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>


        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script>
    </body>
</html>
