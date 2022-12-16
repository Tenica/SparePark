<?php include "../includes/head.php" ?>
<link rel="stylesheet" href="style.css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="backdrop"></div>
  
        <?php include "../includes/navigation.php" ?>
 
    <?php include "../includes/mobile_navigation.php" ?>
<main>
 

    <div class="form-container">

    <form class="form" action="" method="POST">
   
    <input type="text" name="post_code" id="post_code" placeholder="enter your postcode">
    <input type="submit" id="formButton" name="submit" value="Add your Space">
</form>
    </div>
    
    <div class="display_address" id="display_address">
     
    </div>

    <div id="address_components">
        
    </div>

    <div id="geometry">

    </div>


</main>


<script src="../public/js/rent_out_your_space.js"></script>
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDntzfs8xNNVsm3EZMBYroK-nJhlroPTL4&libraries=places&callback=activatePlacesSearch"></script>
    <!-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDntzfs8xNNVsm3EZMBYroK-nJhlroPTL4&callback=getMap&v=weekly"
      defer
    ></script> -->

    
<?php include "../includes/footer.php" ?>

</body>
