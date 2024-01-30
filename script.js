function validateForm() {
  var form = document.querySelector(".payment-form");
  var creditCardNumber = form.elements["creditCardNo"].value;
  var cvc = form.elements["cvc"].value;

  // Basic validation
  if (!creditCardNumber.match(/^\d{16}$/)) {
    alert("Invalid credit card number. Please enter a 16-digit number.");
    return;
  }

  if (!cvc.match(/^\d{3}$/)) {
    alert("Invalid CVC. Please enter a 3-digit number.");
    return;
  }

  // If all validations pass, submit the form
  form.submit();
}
