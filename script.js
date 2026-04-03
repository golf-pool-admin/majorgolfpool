document.getElementById('submitButton').addEventListener('click', function() {
    const inputElement = document.getElementById('numberInput');
    const messageElement = document.getElementById('message');
    const number = parseInt(inputElement.value, 10);
  
    // Validate the input
    if (isNaN(number) || number < 1 || number > 8) {
      messageElement.textContent = 'Please enter a valid number between 1 and 8.';
      messageElement.style.color = 'red';
    } else {
      messageElement.textContent = 'Played!';
      messageElement.style.color = 'green';
      // Additional logic to add the number to the table
    }
  
    // Clear the input field
    inputElement.value = '';
  });
  