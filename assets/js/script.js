function showPwd() {
    let input = document.getElementById('pwd');
    
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }