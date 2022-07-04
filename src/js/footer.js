window.initMap = function initMap() {
  const coordinate = { lat: 1.4872285042594668, lng: 103.39238458307112 };
  const map = new google.maps.Map(document.getElementById('hcc-map'), {
    zoom: 15,
    center: coordinate
  });
  const marker = new google.maps.Marker({
    position: coordinate,
    map: map
  })
}