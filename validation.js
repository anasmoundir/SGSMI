
function validate()
{
    let name = document.getElementById('name').value; 
    if(document.getElementById('name').value == "")
    {
        alert('enter the name');
        name.focus();
    }
   
}