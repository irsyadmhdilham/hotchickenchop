window.initMap = function initMap() {
  const coordinate = { lat: 2.2576055092316714, lng: 102.2331881675083 };
  const map = new google.maps.Map(document.getElementById('hcc-map'), {
    zoom: 15,
    center: coordinate
  });
  const marker = new google.maps.Marker({
    position: coordinate,
    map: map
  })
}