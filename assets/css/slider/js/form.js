function isValidEmailAddress(emailAddress) {
   var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
   var valid = emailRegex.test(emailAddress);
   return valid;
};
function sendMessage() {
      var emailid = $("#emailid").val();
      var subject = $("#subject").val();
      var message = $("#message").val();
      var contactp = $("#contactp").val();
      if( !isValidEmailAddress(emailid) ){
    	    alert( "Please enter correct email ID..." )
	    return false ;
      }
      if( message.length <= 5 ){
	    alert( "Your message is too short. Please give Us more." )
            return false ;
      }

   }