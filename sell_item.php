
<?php include "head.php"; ?>
<?php include "header.php"; ?>

<div class="container mx-auto p-4 space-y-4">
  <!-- Text box -->
  <div>
    <label for="item_name" class=" text-sm font-medium text-gray-700">Item name: </label>
    <input type="text" id="item_name" name="item_name"
      class="mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" 
      placeholder="Enter item name">
  </div>
  <div>
  <label for="item_price" class="block text-sm font-medium text-gray-700">Price</label>
  <input type="text" id="item_price" name="item_price"
    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
    placeholder="0.00">
</div>

  <!-- Text area -->
  <div>
    <label for="item_description" class=" text-sm font-medium text-gray-700">Description</label>
    <textarea id="item_description" name="item_description" rows="5"
      class="mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
      placeholder="Write a description..."></textarea>
  </div>
</div>

<script>
    //pricing have comma
const priceInput = document.getElementById('item_price');

priceInput.addEventListener('input', function (e) {
  let value = e.target.value.replace(/,/g, ''); // Remove commas first
  if (!isNaN(value) && value !== '') {
    // Format with commas
    e.target.value = parseFloat(value).toLocaleString('en-US', {
      maximumFractionDigits: 2,
      useGrouping: true
    });
  }
}); 
</script>
<?php include "footer.php"; ?>
