<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Image Grid</title>
  <link rel="stylesheet" href="../../assest/css/styles.css">
  
  <link rel="stylesheet" href="../../assest/font/fontawesome-free-6.4.2-web/css/all.min.css">

  <style>
    body {
      background-color: black;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    #category-selector{
        border-radius:20px;
        border-color:#EEEEEE;
        background-color: #EEEEEE;
        max-width: fit-content;
        width: fit-content;
        min-width: 40px;
        max-height: fit-content;
        font-size: medium;
        padding: 8px;
    }

    .image-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .image-grid img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
      transition: transform 0.3s;
      cursor: pointer;
    }

    .image-grid img:hover {
      transform: scale(1.1);
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      overflow: auto; /* Enable scrolling for the modal */
    }

    .modal-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
      text-align: center;
      overflow: auto; /* Enable scrolling for the modal content */
      background-color: #fff; /* Set a background color for the modal content */
      padding: 20px; /* Add some padding for better visibility */
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Add a subtle shadow for better contrast */
    }

    .modal img {
      width: auto; /* Set width to auto for images that are larger than the modal */
      max-width: 120%;
      height: auto;
      max-height: 500px;
      object-fit: cover;
      border-radius: 8px;
    }

    .back-button, .download-button {
      position: absolute;
      bottom: 23px;
      cursor: pointer;
      padding: 8px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .download-button {

      right: 20px;
      z-index: 1; /* Ensure the download button appears on top */
    }

    .load-random {
      margin-left: 10px;
      margin-top: 5px;
      cursor: pointer;
      padding: 2px 10px;
      background-color: #EEEEEE;
      color: #000000;
      border: none;
      border-radius: 10px;
      max-width: fit-content;
      max-height: fit-content;
      font-size: 16px;
    }
    select, .back-button, .download-button, .load-random {
      width: 20%;
    }
    .s{
      display: flex;
      gap: 10px;
      background-color: #FFFFFF;
      border-top: rgb(240, 237, 237) solid 1px;
      padding-bottom: 5px;
    }
    .s-1{
      color: #000000;

    }

  </style>
</head>
<body>
  <div class="nevbar">
    <div class="header">

        <div class="header_left">
            <a href="Home.html"><img  src="../../assest/img/logo.png" alt="logo"></a>
            
        </div>

        <div class="header_middel"> 

            <div class="catagary">
              <select id="category-selector">
                <option value="">All</option>
                <option value="nature">Nature</option>
                <option value="architecture">Architecture</option>
                <option value="people">People</option>
                <!-- Add more categories as needed -->
              </select>
            </div>

            <div class="nav-search-form">
                <form>
                  <input type="text" placeholder="Search free high-resolution photos">
                </form>
              </div>
        </div>

        <div class="header_right">

            <div class="file_post">
                <button>
                    <i class="fa-solid fa-plus fa-2xl" style="color:rgb(25, 98, 122);"></i>
                </button>
            </div> 
            
            <div id="openBtn"> 
                <div class="Profile">
                    <a href="user_profile.html"><img src="../../assest/img/profile.png" alt="profile_img"></a>
                </div>
            </div> 
            

            

            
          
            <div class="manu" id="menu-button">
              <button>
                  <i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i>
              </button>
            </div>
                      
      
          <!-- Menu overlay -->
          <div id="menu-overlay"></div>
          <!-- Menu content -->
          <div id="menu-content">
              <h2>Menu</h2>
              <div><a href="#"><button>BLOGS</button></a></div>
              <hr>
              <div><a href="#"><button>COMMUNITY</button></a></div>
              <hr>
              <div><a href="#"><button>WALLPAPER</button></a></div>
              <hr>
              <div><a href="#"><button>FAVOURITES</button></a></div>

          </div>
          <script>
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
          </script>
        </div>
    </div>
  </div>
  <div class="s">
    <button class="load-random " id="load-random">New Images</button>
    
    <button class="load-random " id="load-random">Nature</button>
    
    <button class="load-random " id="load-random">Architecture</button>
    
    <button class="load-random " id="load-random">People</button>
    <p class="s-1">  |  </p>
    <button class="load-random " id="load-random">Lifestyle</button>
    
    <button class="load-random " id="load-random">Sports</button>
    
    <button class="load-random " id="load-random">Cars</button>

    <button class="load-random " id="load-random">Phone wallpaper</button>
    
    <button class="load-random " id="load-random">Bikes</button>
    
    <button class="load-random " id="load-random">Birds</button>
    
    <button class="load-random " id="load-random">Houses</button>

    <button class="load-random " id="load-random">Bikes</button>

    <button class="load-random " id="load-random">Bikes</button>
    
    <button class="load-random " id="load-random">Birds</button>
    
    <button class="load-random " id="load-random">Houses</button>
    
  </div>

  <div class="image-grid" id="image-grid">  </div>


  <div class="modal" id="image-modal">
    <div class="modal-content">
      <button class="back-button" id="back-button">&lt; Back</button>
      <img id="modal-image" alt="Enlarged Image">
      <button class="download-button" id="download-button">Download</button>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const imageGrid = document.getElementById("image-grid");
    const loadRandomButton = document.getElementById("load-random");
    const categorySelector = document.getElementById("category-selector");
    const imageModal = document.getElementById("image-modal");
    const modalContent = document.querySelector(".modal-content");
    const modalImage = document.getElementById("modal-image");
    const backButton = document.getElementById("back-button");
    const downloadButton = document.getElementById("download-button");
    let page = 1;
    let selectedCategory = "";
    const loadedImages = [];

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
      loadedImages.push(imageUrl);

      // Add click event listener to open the modal on image click
      imageElement.addEventListener("click", () => {
        openModal(imageUrl);
      });
    }

    function loadMoreImages() {
      const numImagesToLoad = 25; // Adjust the number of images as needed

      for (let i = 0; i < numImagesToLoad; i++) {
        let imageUrl;
        do {
          imageUrl = getRandomImageUrl(selectedCategory);
        } while (loadedImages.includes(imageUrl));

        displayImage(imageUrl);
        page++;
      }
    }

    function loadRandomImages() {
      imageGrid.innerHTML = ""; // Clear grid before loading new images
      loadedImages.length = 0; // Reset loaded images array
      page = 1; // Reset page counter
      selectedCategory = categorySelector.value;
      loadMoreImages();
    }

    function isBottomOfPage() {
      return window.innerHeight + window.scrollY >= document.body.offsetHeight;
    }

    function handleScroll() {
      if (isBottomOfPage()) {
        loadMoreImages();
      }
    }

    function openModal(imageUrl) {
      modalImage.src = imageUrl;
      imageModal.style.display = "flex";

      // Reset scroll position when opening the modal
      modalContent.scrollTop = 0;
    }

    function closeModal() {
      imageModal.style.display = "none";
    }


    function downloadImage(imageUrl) {
      const timestamp = new Date().getTime();
      const filename = `image_${timestamp}.jpg`;

      fetch(imageUrl)
        .then(response => response.blob())
        .then(blob => {
          const link = document.createElement('a');
          link.href = window.URL.createObjectURL(blob);
          link.download = filename;
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
        })
        .catch(error => console.error('Error downloading image:', error));
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

    // Initial load
    loadMoreImages();

    // Event listeners
    loadRandomButton.addEventListener("click", loadRandomImages);
    categorySelector.addEventListener("change", () => {
      imageGrid.innerHTML = ""; // Clear grid before loading new images
      loadedImages.length = 0; // Reset loaded images array
      page = 1; // Reset page counter
      selectedCategory = categorySelector.value;
      loadMoreImages();
    });

    // Infinite scroll
    window.onscroll = handleScroll;
  });
</script>

</body>
</html>
