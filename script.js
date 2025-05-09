function calculatePrice() {
    var product = document.getElementById('product').value;
    var price = 0;
  
    // Calculate the price based on the selected product
    switch (product) {
      case '1 Month':
        price = 1500;
        break;
      case '6 Months':
        price = 5500;
        break;
      case '1 Yearly':
        price = 10000;
        break;
      default:
        price = 0;
    }
  
    // Update the price input field
    document.getElementById('price').value = price;
    calculateTotal();
  }
  
  function calculateTotal() {
    var price = document.getElementById('price').value;
    var quantity = document.getElementById('quantity').value;
  
    // Calculate the total
    var total = price * quantity;
  
    // Update the total input field
    document.getElementById('total').value = total;
  }
  
  function saveData(event) {
    event.preventDefault();
  
    // Retrieve form data
    var name = document.getElementById('name').value;
    var product = document.getElementById('product').value;
    var quantity = document.getElementById('quantity').value;
    var total = document.getElementById('total').value;
  
    // Generate membership ID
    var generateMembershipID = generateMembershipID();
  
    // Save data to PHPMyAdmin using AJAX or other method
  
    // Show success message to the user
    alert('Data saved successfully!');
  }
  
  function generateMembershipID() {
    // Generate a random membership ID
    var randomNumber = Math.floor(Math.random() * 100000);
    var membershipID = 'GYM' + randomNumber;
  
  
    // Update the membership ID input field
  document.getElementById("membershipID").value = membershipID;
  
    return membershipId;
  }
  
  function generateReceipt() {
    var membershipID = document.getElementById("membershipID").value;
    var name = document.getElementById('name').value;
    var product = document.getElementById('product').value;
    var quantity = document.getElementById('quantity').value;
    var price = document.getElementById('price').value;
    var total = document.getElementById('total').value;
  
    // Get current date and time
    var dateTime = new Date().toLocaleString();
  
    // Update receipt modal content
    document.getElementById('date-time').textContent = dateTime;
  
    var receiptTableBody = document.getElementById('receipt-table').getElementsByTagName('tbody')[0];
  
    var newRow = receiptTableBody.insertRow();
    var productCell = newRow.insertCell(0);
    var quantityCell = newRow.insertCell(1);
    var priceCell = newRow.insertCell(2);
  
    productCell.textContent = product;
    quantityCell.textContent = quantity;
    priceCell.textContent = price;
  
        document.getElementById("receipt-membershipID").textContent = membershipID;
      document.getElementById("receipt-name").textContent = name;
    document.getElementById('total-price').textContent = 'Total: $' + total;
  
    // Show receipt modal
    document.getElementById('modal').style.display = 'block';
  }
  
  
  
  function printReceipt() {
    // Print the receipt
    window.print();
  }
  
  // Reload the page after printing to reset the form
  window.onafterprint = function() {
    location.reload();
  };
  
  // Close modal
  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }
  
    // Generate membership ID and calculate initial price
    generateMembershipID();
    calculatePrice();