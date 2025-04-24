<?php include "head.php"; ?>
<?php include "header.php"; ?>

<div class="container mx-auto py-4 relative" id="dropdown-container">
  <!-- Dropdown button -->
  <button id="dropdown-button" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    Create New Listing
  </button>

  <!-- Dropdown menu -->
  <div id="dropdown-menu" class="absolute hidden bg-white border border-gray-300 rounded-md mt-2 w-48 shadow-lg">
    <a href="sell_item.php" class="block px-4 py-2 hover:bg-gray-100">Sell Item</a>
    <a href="buy_item.php" class="block px-4 py-2 hover:bg-gray-100">Buy Item</a>
  </div>
</div> 

<?php include "footer.php"; ?>