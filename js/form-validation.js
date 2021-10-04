let firstname = document.getElementById('fname');
let nameError = document.getElementById('fname-error');
let lastname = document.getElementById('lname');
let lnameError = document.getElementById('lname-error');
let email = document.getElementById('email');
let emailError = document.getElementById('email-error');
let mobile = document.getElementById('mobile');
let mobileError = document.getElementById('mobile-error');
let loginForm = document.getElementById('MyForm');

firstname.addEventListener('input', function(e) {
  
  let pattern = /^[a-zA-Z ]+$/;
  let currentValue = e.target.value;
  let valid = pattern.test(currentValue)

  if(valid){
    nameError.style.display = 'none';    
  } else {
    nameError.style.display = 'block';
  }
})

lastname.addEventListener('input', function(e) {
  
    let pattern = /^[a-zA-Z ]+$/;
    let currentValue = e.target.value;
    let valid = pattern.test(currentValue)
  
    if(valid){
      lnameError.style.display = 'none';    
    } else {
      lnameError.style.display = 'block';
    }
  })

  
email.addEventListener('input', function(e) {
  
    let pattern = /\S+@\S+\.\S+/;
    let currentValue = e.target.value;
    let valid = pattern.test(currentValue)
  
    if(valid){
      emailError.style.display = 'none';    
    } else {
      emailError.style.display = 'block';
    }
  })

  mobile.addEventListener('input', function(e) {
  
    let pattern = /\d/g;
    let currentValue = e.target.value;
    let valid = pattern.test(currentValue)
  
    if(valid){
      mobileError.style.display = 'none';    
    } else {
      mobileError.style.display = 'block';
    }
  })