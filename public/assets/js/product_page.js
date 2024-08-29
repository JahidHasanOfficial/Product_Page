function changeImage(src) {
    document.getElementById('largeImage').src = src;
  }

 
  // Assuming you have the color swatches with the class 'color-swatch'
  const colorSwatches = document.querySelectorAll('.color-swatch');

  colorSwatches.forEach(swatch => {
      swatch.addEventListener('click', function () {
          // Remove 'selected' class from all swatches
          colorSwatches.forEach(s => s.classList.remove('selected'));

          // Add 'selected' class to the clicked swatch
          this.classList.add('selected');
      });
  });

  // Get references to the elements
const decrementButton = document.querySelector('.decrement-button');
const incrementButton = document.querySelector('.increment-button');
const quantityLabel = document.querySelector('.quantity-label');

// Initial quantity
let quantity = parseInt(quantityLabel.textContent, 10);

// Function to update the quantity
function updateQuantity(amount) {
  quantity += amount;
  if (quantity < 0) {
    quantity = 0; // Prevent quantity from going below 0
  }
  quantityLabel.textContent = quantity;
}

// Event listeners for buttons
decrementButton.addEventListener('click', () => updateQuantity(-1));
incrementButton.addEventListener('click', () => updateQuantity(1));
