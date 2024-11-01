function addResi(event) {
  if (event.key === "Enter") {
      event.preventDefault();
      
      const resiInput = document.getElementById("resiInput");
      const resiNumber = resiInput.value.trim();

      if (resiNumber) {
          const bubble = document.createElement("div");
          bubble.className = "bg-green-100 text-green-700 font-semibold px-4 py-2 rounded-full inline-flex items-center space-x-2 shadow-md";

          const resiText = document.createElement("span");
          resiText.textContent = resiNumber;
          bubble.appendChild(resiText);

          const closeButton = document.createElement("button");
          closeButton.className = "text-red-500 hover:text-red-700 font-bold";
          closeButton.innerHTML = "&times;";
          closeButton.onclick = function () {
              bubble.remove();
          };

          bubble.appendChild(closeButton);

          document.querySelector(".resi-container").appendChild(bubble);

          resiInput.value = "";
      }
  }
}

