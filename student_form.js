function validateForm(){

	var firstname =document.myForm.firstname.value;
	var lastname =document.myForm.lastname.value;
    var gender=document.myForm.gender.value;
    var contact1=document.myForm.contact1.value;
    var sscmarks=document.myForm.sscmarks.value;
    var hscmarks=document.myForm.hscmarks.value;
    var cetmarks=document.myForm.cetmarks.value;
    var college=document.myForm.college.value;
    var branch=document.myForm.branch.value;
    var type=document.myForm.type.value;

	if( firstname == "" )
         {
            alert("Please provide your first name!");
        	return false;
         }

    if( lastname == "" )
         {
            alert("Please provide your last name!");
            return false;
         }

    if( contact1 == "" )
         {
            alert("Please provide your contact number");
            return false;
         }

    if( sscmarks == "" )
         {
            alert("Please enter your SSC marks");
            return false;
         }

    if( hscmarks == "" )
         {
            alert("Please enter your HSC marks");
            return false;
         }

    if( cetmarks == "" )
         {
            alert("Please enter your CET score");
            return false;
         }



    return true;

}