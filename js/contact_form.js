function emailSend(){

   var userName = document.getElementById('name').value;
   var message = document.getElementById('message').value;
   var email = document.getElementById('email').value;

   var messageBody = "Name " + userName +
   "<br/> Email " + email +
   "<br/> Message " + message;
   Email.send({
   Host : "smtp.elasticemail.com",
   Username : "host@gmail.com",
   Password : "Password",
   To : 'reviever@gmail.com',
   From : "website@gmail.com",
   Subject : "This is the subject",
   Body : messageBody
}).then(
 message => {
     if(message=='OK'){
         swal("Secussful", "You clicked the button!", "success");
     }
     else{
         swal("Error", "You clicked the button!", "error");
     }
 }
);
}