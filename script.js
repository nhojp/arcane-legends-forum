// Scoped selectors (use IDs to avoid conflicts)
const button = document.getElementById('dropdown-button');
const menu = document.getElementById('dropdown-menu');
const container = document.getElementById('dropdown-container');

// Toggle dropdown visibility on button click
button.addEventListener('click', function (e) {
    e.stopPropagation(); // Prevent click from bubbling to document
    menu.classList.toggle('hidden');
});

// Hide dropdown if clicking outside
document.addEventListener('click', function (e) {
    if (!container.contains(e.target)) {
        menu.classList.add('hidden');
    }
});

//dynamic year setting
document.getElementId("year").textContent = new Date().getFullYear();

//add comma and prevent letter
const priceInput = document.getElementById('item_price');

priceInput.addEventListener('input', function (e) {
  let rawValue = e.target.value.replace(/,/g, '');

  // Remove any invalid characters (allow only digits and dot)
  rawValue = rawValue.replace(/[^0-9.]/g, '');

  // Prevent multiple dots
  const parts = rawValue.split('.');
  if (parts.length > 2) {
    rawValue = parts[0] + '.' + parts[1]; // Keep only first dot
  }

  // Format integer part with commas
  const [integerPart, decimalPart] = rawValue.split('.');
  const formatted = parseInt(integerPart || '0', 10).toLocaleString();

  e.target.value = decimalPart !== undefined ? `${formatted}.${decimalPart}` : formatted;
});