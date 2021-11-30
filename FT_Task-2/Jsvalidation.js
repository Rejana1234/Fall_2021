function formValidation()
{
var fname = document.Reg_form.fname; 
var age = document.Reg_form.age;
var email = document.Reg_form.email; 
var pwd = document.Reg_form.password;
var file = document.Reg_form.file;
var uemail = document.Reg_form.email;

{
if(allLetter(fname,Alphabet,5))
{
if(allLetter(lname,Alphabet,5))
{
if(ValidateEmail(uemail))
{ 
if(passid_validation(password,8,12))
{
if(fileselect(file))
{

}
} 
}
} 
}
}
}
}
return false;
}
