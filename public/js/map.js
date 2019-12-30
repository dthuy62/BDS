function initMap() {
    // The location of Uluru
    var uluru = {lat: 15.976398, lng: 108.250400};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 16, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
    console.log('neeeeeeeeeeeeeeee')
}

$(document).ready(() => {
    initMap()
})
