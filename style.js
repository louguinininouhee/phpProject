// Effet sur le titre "Welcome !"
window.onload = function () {
    const title = document.querySelector("h1 span");
    if (title) {
      title.style.transition = "color 0.8s ease, transform 0.8s ease";
      title.style.color = "#ff6600"; // couleur vive
      title.style.transform = "scale(1.2)";
      setTimeout(() => {
        title.style.transform = "scale(1)";
      }, 800);
    }
  
    // Effet au survol du bouton
    const button = document.querySelector("button");
    if (button) {
      button.addEventListener("mouseover", () => {
        button.style.backgroundColor = "#ff6600";
        button.style.color = "white";
        button.style.transform = "scale(1.1)";
      });
  
      button.addEventListener("mouseout", () => {
        button.style.backgroundColor = "";
        button.style.color = "";
        button.style.transform = "scale(1)";
      });
    }
  };
