<?php include "../includes/head.php" ?>
<link rel="stylesheet" href="style.css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="backdrop"></div>
  
        <?php include "../includes/navigation.php" ?>
 
    <?php include "../includes/mobile_navigation.php" ?>

<main>
    <h1>Confirm Location</h1>
    <style>
        .map-container {
            display: flex;
            flex-direction: column;
            width:100%;
            
        }

       #map{
        height: 400px;
        width: 100;
       }

       .map-left {
        width: 80%;
        
        justify-content: center;
        align-items: center;
       }

       
      

        </style>
        <div class="map-container">
        <div class="map" id="map"></div>
        <div class="map_left">
        <?php
            if (isset($_POST['create_user'])) {

            echo $_POST['street_number'];
               
            }
            ?>
            <form action="" method="post" id="formData">
               
            </form>
         <!-- <form id="addressData" class="addressData">

         </form> -->
        </div>
      
        </div>
       
   
<script>
    const form = document.getElementById('formData')
    const plat = document.querySelector('.latitude')
    const plng = document.querySelector('.longitude')
    const address = document.querySelector('.formattedAddress')
    const getLat = localStorage.getItem("latitude")
    const getLng = localStorage.getItem("longitude")
    const getAddress = localStorage.getItem("formattedAddress")
    let addressComponents =  localStorage.getItem("addressComponents");
     addressComponents = JSON.parse(addressComponents);

    let addressComponentsOutput; 
 
      for (var i = 0; i < addressComponents.length; i++) {
        const label = document.createElement('label');
        label.setAttribute("for", `${addressComponents[i].types[0]}`)
        label.innerHTML = `${addressComponents[i].types[0]}`
        const input = document.createElement('input');
        input.setAttribute("type", "text")
        input.setAttribute("name", `${addressComponents[i].types[0]}`)
        input.setAttribute("value", `${addressComponents[i].long_name}`)
        input.disabled = true
    form.append(label,input)
      }

      const button = document.createElement('button');
        button.type = "submit"
       button.name  = "create_user"
    button.innerHTML = "Submit"
    form.append(button)
     
      
      
    console.log(getAddress) 
    function initMap() {
    const options =  {
        zoom:8,
        center: {lat: +getLat, lng: +getLng}
    }  
    var map = new google.maps.Map(document.getElementById('map'), options);

    var marker = new google.maps.Marker({
       position: {lat: +getLat, lng: +getLng},
       map:map
    });
    var infoWindow = new google.maps.InfoWindow({
        content: getAddress
    })
    marker.addListener('click', function() {
        infoWindow.open(map, marker)
    })
    }
</script>
  
</main>

<?php include "../includes/footer.php" ?>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDntzfs8xNNVsm3EZMBYroK-nJhlroPTL4&callback=initMap&v=weekly"></script>

</body>




