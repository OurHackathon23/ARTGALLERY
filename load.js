// document.addEventListener("DOMContentLoaded", function() {
//     const gallery = document.getElementById('gallery');
//     const imageCount = 10;

//     function loadImage(index) {
//         const imgElement = document.createElement('img');
//         imgElement.src = `https://picsum.photos/300/200?random=${index}`;
//         imgElement.alt = 'Random Unsplash Image';
        
//         imgElement.onload = function() {
//             console.log('Image loaded successfully:', imgElement.src);
//         };

//         imgElement.onerror = function() {
//             console.error('Error loading image:', imgElement.src);
//             imgElement.src = 'https://via.placeholder.com/300x200?text=Image+Not+Available';
//         };

//         gallery.appendChild(imgElement);
//     }

//     for (let i = 0; i < imageCount; i++) {
//         loadImage(i);
//     }
// });
