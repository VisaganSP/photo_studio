// Function to load images from JSON file and filter them
function loadImages(filter) {
    const imageContainer = document.getElementById("image-container");
    imageContainer.innerHTML = ""; // Clear existing images

    // Load JSON data
    fetch("images.json")
        .then((response) => response.json())
        .then((data) => {
            data.forEach((image) => {
                // Check if the image matches the filter or if the filter is "all"
                if (filter === "all" || image.category === filter) {
                    // Create an image element
                    const img = document.createElement("img");
                    img.className = "mm-columns__img";
                    img.src = image.src;
                    // img.loading = "lazy";

                    // Create a div element for the image container
                    const div = document.createElement("div");
                    div.className = "mm-columns__item";
                    div.appendChild(img);

                    // Append the image container to the image container
                    imageContainer.appendChild(div);

                    img.addEventListener("click", () => {
                        const modal = document.getElementById("image-modal");
                        const modalImage = document.getElementById("full-size-image");
                        modalImage.src = img.src;
                        modal.style.display = "block";
                    });
                }
            });
        });
}

// Filter images when a filter button is clicked
const filterButtons = document.querySelectorAll(".filter-button");
filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const filter = this.getAttribute("data-filter");
        loadImages(filter);
        // Remove the 'active' class from all buttons and add it to the clicked button
        filterButtons.forEach((btn) => {
            btn.classList.remove("active-fil");
        });
        this.classList.add("active-fil");
    });
});

// Default select the "All" option in the filter
loadImages("all");

const modal = document.getElementById("image-modal");
modal.addEventListener("click", (event) => {
    if (event.target === modal || event.target.className === "close") {
        modal.style.display = "none";
    }
});