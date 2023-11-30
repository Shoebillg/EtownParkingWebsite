function showModal(message) {
    const modal = document.querySelector('.modal');
    const modalContent = document.querySelector('.modal-content');
    modalContent.innerText = message;
    modal.style.display = 'block';
  }
   
  function hideModal() {
    const modal = document.querySelector('.modal');
    modal.style.display = 'none';
  }
   
  document.addEventListener('DOMContentLoaded', function () {
    fetchProductOptions();
    fetchLocationOptions();
    document.querySelector('#productSelect').addEventListener('change', function () {
      setSelection1(this.options[this.selectedIndex].innerText);
    });
    document.querySelector('#locationSelect').addEventListener('change', function () {
      setSelection2(this.options[this.selectedIndex].innerText);
    });
   
    const orderForm = document.querySelector('#orderForm');
    orderForm.addEventListener('submit', function (event) {
      event.preventDefault();
      const formData = new FormData(orderForm);
      fetch('insertOrder.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          showModal(data.error);
        } else if (data.success) {
          showModal(data.success);
        }
      })
      .catch(error => {
        console.error(error);
        showModal("Failed to place order due to an error.");
      });
    });
   
    const closeButton = document.querySelector('.modal-close-button');
    if (closeButton) {
      closeButton.addEventListener('click', function() {
        hideModal();
      });
    }
   
    const modal = document.querySelector('.modal');
    modal.addEventListener('click', function(event) {
      if (event.target === modal) {
        hideModal();
      }
    });
  });