const button = document.getElementById("formButton");
const input = document.getElementById("post_code");
const displayAddress = document.getElementById("display_address");
const addressData = document.getElementById("address_components");
const geometryData = document.getElementById("geometry");

function activatePlacesSearch(params) {
  const input = document.getElementById("post_code");
  const autocomplete = new google.maps.places.Autocomplete(input);
}

function geocode() {
  event.preventDefault()
  const location = input.value;
  axios
    .get("https://maps.googleapis.com/maps/api/geocode/json", {
      params: {
        address: location,
        key: "ADD_UR_API_KEY",
      },
    })
    .then(function (response) {
      const formattedAddress = response.data.results[0].formatted_address;
      displayAddress.innerHTML = `<p>${formattedAddress}</p>`;
      localStorage.setItem("formattedAddress", formattedAddress)
      const addressComponents = response.data.results[0].address_components;
      localStorage.setItem("addressComponents", JSON.stringify(addressComponents));
      const latitude = response.data.results[0].geometry.location.lat;
      const longitude = response.data.results[0].geometry.location.lng;
      postlong(latitude,longitude);
      
    })
    .catch(function (error) {
      console.log(error);
    });
   
}

function postlong(lat, lng) {
  axios.post('http://localhost/SparePark/rent_out_your_space/index.php', {
    latitude: lat,
    longitude: lng
  })
  .then(function (response) {
    // console.log(response.config.data);
   let geocode =  JSON.parse(response.config.data)
   let lat =  parseFloat(geocode?.latitude);
   let lng =  parseFloat(geocode?.longitude);
   console.log(lat, lng)
   localStorage.setItem("latitude", lat)
   localStorage.setItem("longitude", lng)
   window.open("http://localhost/SparePark/rent_out_your_space/show_location.php");
  })
  .catch(function (error) {
    console.log(error);
  });
}





const getValue = button.addEventListener('click', geocode);
