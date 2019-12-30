var file = document.querySelector('#file');
file.addEventListener('change',function()
{
var f_label = document.querySelector(".file_label");

if(file.value=="")
{
  f_label.textContent="Please Upload Profile Picture";
}
else{
  f_label.textContent=file.value;
}
});


var s_link = document.querySelector(".signup_link");
var l_link = document.querySelector(".login_link");
var s_form = document.querySelector(".signup_form");
var l_form = document.querySelector(".login_form");
s_link.addEventListener("click",function()
{
s_form.style.display="block";
l_form.style.display="none";
});
l_link.addEventListener("click",function()
{
l_form.style.display="block";
s_form.style.display="none";
});