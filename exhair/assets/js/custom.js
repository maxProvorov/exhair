console.log(123);
//Swiper Slider
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    slidesPerView: 2,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});

//Google map
// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 45.25, lng: 19.82 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

window.initMap = initMap;

//
