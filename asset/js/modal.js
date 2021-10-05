function show() {
    document.getElementById('show').style.display = 'block';
  }
  // When the user clicks on <span> (x), close the modal
  function hide() {
    document.getElementById('show').style.display = 'none';
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  