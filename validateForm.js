const submitButton = document.querySelector("input[type='submit']");
submitButton.disabled = true;

const inputFields = Array.from(document.querySelectorAll("input[type='number']"));

const validateForm = () => {
  if (inputFields.every(input => {
    return input.value !== null && input.value !== "";
  })) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}

validateForm();

console.log(inputFields);

inputFields.forEach(input => {
  input.addEventListener('input', () => {
    validateForm();
  });
});