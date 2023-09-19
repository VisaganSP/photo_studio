const searchBox = document.getElementById("search-box");
const suggestionsList = document.getElementById("suggestions-list");
const isFirstLoading = true;

function getSuggestions() {
  const inputValue = searchBox.value;

  // Send an AJAX request to fetch data from the PHP script
  fetch(`search_config.php?query=${inputValue}`)
    .then((response) => response.json())
    .then((data) => {
      populateSuggestions(data);
      //   console.log(data);
    });

  //   if (isFirstLoading) {
  //     console.log("loading,,,,,");
  //     searchBox.value = data[data.length - 1];
  //     document.forms["functionSearch"].submit();
  //     isFirstLoading = false;
  //   }
}

// Add event listeners for input, click, touch, and keydown events
searchBox.addEventListener("input", getSuggestions);
searchBox.addEventListener("click", getSuggestions);
searchBox.addEventListener("touchstart", getSuggestions);

searchBox.addEventListener("keydown", function (e) {
  if (suggestionsList.style.display === "block") {
    const suggestionItems = suggestionsList.getElementsByTagName("li");
    let selectedIndex = -1;

    for (let i = 0; i < suggestionItems.length; i++) {
      if (suggestionItems[i].classList.contains("selected")) {
        selectedIndex = i;
        suggestionItems[i].classList.remove("selected", "focus");
      }
    }

    if (e.key === "ArrowDown") {
      selectedIndex = (selectedIndex + 1) % suggestionItems.length;
    } else if (e.key === "ArrowUp") {
      if (selectedIndex === -1) {
        selectedIndex = suggestionItems.length - 1;
      } else {
        selectedIndex =
          (selectedIndex - 1 + suggestionItems.length) % suggestionItems.length;
      }
    }

    suggestionItems[selectedIndex].classList.add("selected", "focus");
    searchBox.value = suggestionItems[selectedIndex].innerText;

    // Remove 'focus' class from other items
    for (let i = 0; i < suggestionItems.length; i++) {
      if (i !== selectedIndex) {
        suggestionItems[i].classList.remove("focus");
      }
    }

    // Calculate the scroll position based on the selected item
    const itemHeight = suggestionItems[0].offsetHeight;
    const scrollPosition = selectedIndex * itemHeight;

    // Scroll the list to the calculated position
    suggestionsList.scrollTop = scrollPosition;

    // Add a class to the search box for focus effect
    searchBox.classList.add("focused");
  }
});

// Add a blur event to remove focus class when the search box loses focus
searchBox.addEventListener("blur", function () {
  searchBox.classList.remove("focused");
});

function populateSuggestions(suggestions) {
  suggestionsList.innerHTML = "";

  if (suggestions.length === 0) {
    suggestionsList.style.display = "none";
    return;
  }

  //   console.log(suggestions);

  suggestions.forEach((suggestion, index) => {
    const listItem = document.createElement("li");
    listItem.textContent = suggestion;
    listItem.addEventListener("click", () => {
      searchBox.value = suggestion;
      suggestionsList.style.display = "none";
    });
    suggestionsList.appendChild(listItem);
  });

  suggestionsList.style.display = "block";
}
