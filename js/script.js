const images = document.querySelector('.carousel-images');
const imageCount = images.children.length;
const intervalTime = 3000; // Tiempo en milisegundos para cambiar de imagen

let currentIndex = 0;

function moveToNextImage() {
    currentIndex = (currentIndex + 1) % imageCount;
    const offset = -currentIndex * 100; // Calcula el desplazamiento necesario
    images.style.transform = `translateX(${offset}%)`;
}

// Cambia de imagen cada `intervalTime` milisegundos
setInterval(moveToNextImage, intervalTime);