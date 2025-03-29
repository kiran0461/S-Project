// Function to change the navbar background color on scroll
window.onscroll = function() {
    changeNavbarBackground();
  };

  function changeNavbarBackground() {
    const navbar = document.getElementById("navbar");
    
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  }

  // Function to toggle the text of the product details
  document.addEventListener("DOMContentLoaded", function () {
    function toggleText(productId) {
      var dots = document.getElementById("dots" + productId);
      var moreText = document.getElementById("more" + productId);
      var btnText = document.getElementById("btn" + productId);

      if (dots.style.display === "none") {
          dots.style.display = "inline";
          moreText.style.display = "none";
          btnText.innerHTML = "View Details";
      } else {
          dots.style.display = "none";
          moreText.style.display = "inline";
          btnText.innerHTML = "Read Less";
      }
    }

    // Attach event listeners to toggle buttons
    document.querySelectorAll(".toggle-btn").forEach(button => {
        button.addEventListener("click", function () {
            var productId = this.getAttribute("data-product-id");
            toggleText(productId);
        });
    });
  });