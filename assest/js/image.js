document.addEventListener("DOMContentLoaded", () => {
    const imageGrid = document.getElementById("image-grid");
    const loadRandomButtons = document.querySelectorAll(".load-random");
    const imageModal = document.getElementById("image-modal");
    const modalContent = document.querySelector(".modal-content");
    const modalImage = document.getElementById("modal-image");
    const backButton = document.getElementById("back-button");
    const downloadButton = document.getElementById("download-button");
    let page = 1;
    let selectedCategory = "";
    const loadedImages = new Set();
    
      function getRandomImageUrl(category = "") {
        let apiUrl = `https://source.unsplash.com/random/800x600`;
    
        if (category) {
          apiUrl += `?${category}`;
        }
    
        // Add a timestamp to ensure unique images
        apiUrl += `&timestamp=${Date.now()}`;
    
        return apiUrl;
      }
    
      function displayImage(imageUrl) {
        const imageElement = document.createElement("img");
        imageElement.src = imageUrl;
        imageElement.alt = "Unsplash Image";
        imageGrid.appendChild(imageElement);
        loadedImages.add(imageUrl);
    
        // Add click event listener to open the modal on image click
        imageElement.addEventListener("click", () => {
          openModal(imageUrl);
        });
      }
    
      function loadMoreImages(category) {
        const numImagesToLoad = 15; // Adjust the number of images as needed
        let loadedCount = 0;
    
        while (loadedCount < numImagesToLoad) {
          let imageUrl = getRandomImageUrl(category);
          if (!loadedImages.has(imageUrl)) {
            displayImage(imageUrl);
            loadedCount++;
            page++;
          }
        }
      }
    
      function loadImagesByCategory(category) {
        imageGrid.innerHTML = ""; // Clear grid before loading new images
        loadedImages.clear(); // Reset loaded images Set
        page = 1; // Reset page counter
        loadMoreImages(category);
      }
    
      function isNearBottomOfPage() {
        return (
          window.innerHeight + window.scrollY >= document.body.offsetHeight - 500 // Adjust threshold as needed
        );
      }
    
      function handleScroll() {
        if (isNearBottomOfPage()) {
          loadMoreImages(selectedCategory);
        }
      }
    
      function openModal(imageUrl) {
        modalImage.src = imageUrl;
        imageModal.style.display = "flex";
    
        // Reset scroll position when opening the modal
        modalContent.scrollTop = 0;
        
        // Disable right-click on the modal image
        modalImage.addEventListener('contextmenu', function(e) {
          e.preventDefault();
        });

        // Disable left-click on the modal image
        modalImage.addEventListener('click', function(e) {
          e.preventDefault();
        });

        // Add blur effect to the clicked image
        document.querySelectorAll(".image-grid img").forEach(img => {
          img.classList.remove('selected');  // Remove 'selected' from all images
        });
        
        document.querySelector(`.image-grid img[src="${imageUrl}"]`).classList.add('selected');  // Add 'selected' to the clicked image
        // Show login prompt in the modal
        modalContent.innerHTML = `
        <div class="login-prompt">
        <p>Please <a href="login.html">login</a> to download this image.</p></div>
        <img id="modal-image" src="${imageUrl}" alt="Enlarged Image">`;
      }
    
      function closeModal() {
        imageModal.style.display = "none";
      }
    
      function downloadImage(imageUrl) {
        const timestamp = new Date().getTime();
        const filename = `image_${timestamp}.jpg`;
    
        fetch(imageUrl)
          .then((response) => response.blob())
          .then((blob) => {
            const link = document.createElement("a");
            link.href = window.URL.createObjectURL(blob);
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
          })
          .catch((error) => console.error('Error downloading image:', error));
      }
    
      // Close modal when clicking outside the image
      imageModal.addEventListener("click", (event) => {
        if (event.target === imageModal) {
          closeModal();
        }
      });
    
      // Go back to the image grid when clicking the back button
      backButton.addEventListener("click", () => {
        closeModal();
      });
    
      // Download the image when clicking the download button
      downloadButton.addEventListener("click", () => {
        const imageUrl = modalImage.src;
        downloadImage(imageUrl);
      });
    
      // Event listeners for each category button
      loadRandomButtons.forEach((button) => {
        button.addEventListener("click", () => {
          selectedCategory = button.id;
          loadImagesByCategory(selectedCategory);
        });
      });
    
      // Initial load
      loadImagesByCategory(selectedCategory);
    
      // Scroll event listener for infinite scroll
      window.addEventListener('scroll', handleScroll);
    });
    

 // JavaScript to toggle the menu on button click
 const menuButton = document.getElementById('menu-button');
 const menuOverlay = document.getElementById('menu-overlay');
 const menuContent = document.getElementById('menu-content');
 
    menuButton.addEventListener('click', () => {
    menuOverlay.style.display = 'block';
    menuContent.classList.add('active');
    });

    menuOverlay.addEventListener('click', () => {
    menuOverlay.style.display = 'none';
    menuContent.classList.remove('active');
      });