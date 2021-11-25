<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="gallary.css" rel="stylesheet" />
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        // $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
        $('.portfolio-menu ul li').click(function () {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function () {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h4>Our Designs</h4>
            </div>
        </div>
        <div class="portfolio-item row">
        <?php 
        $imagesDirectory = "data/".$_GET['name'];

                            if(is_dir($imagesDirectory))
                            {
	                          $opendirectory = opendir($imagesDirectory);
  
                              while (($image = readdir($opendirectory)) !== false)
	                          {
	                          	if(($image == '.') || ($image == '..'))
	                          	{
	                          		continue;
	                          	}
	                          	
	                          	$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
	                          	
	                          	if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
	                          	{
	                          		echo "<div class='item selfie col-lg-3 col-md-4 col-6 col-sm'>
                                      <a href='data/".$_GET['name']."/".$image."'
                                          class='fancylight popup-btn' data-fancybox-group='light'>
                                          <img class='img-fluid'
                                              src='data/".$_GET['name']."/".$image."'
                                              alt=''>
                                      </a>
                                  </div>";
	                          	}
                              }
	
                              closedir($opendirectory);
 
                            }
                            
                        
        
        ?>
        
            
          
        </div>
    </div>



</body>

</html>