function validation(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var repass = document.getElementById("repass").value;
  var error_messege = document.getElementById("error_messege");
  var text;


  if (id.length != 4){
    text = "ID must be 4 digit";
    error_messege.innerHTML = text;
    return false;
  }

  if (name.length<2){
    text = "Length of name is too short";
    error_messege.innerHTML = text;
    return false;
  }
  if (email.indexof("@") == -1 || email.length < 6){
    text = "Please Enter the Valid Email";
    error_messege.innerHTML = text;
    return false;
  }
  if (password.length<=8){
    text = "Password should be atleast 8 characters long!";
    error_messege.innerHTML = text;
    return false;
  }
  if (password != repass){
    text = "Password and Confirm password should match!";
    error_messege.innerHTML = text;
    return false;
  }
  alert("Form Submited Sucessfully!")


  return true;
}
