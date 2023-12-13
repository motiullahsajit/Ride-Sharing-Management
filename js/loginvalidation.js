function validation() 
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    

    if(username=='' && password=='')
    {
        document.getElementById('un').innerHTML = 'null username detected';
        document.getElementById('pass').innerHTML = 'null password detected';
        return false;
    }
    if (username == '') {
        document.getElementById('un').innerHTML = 'null username detected';
        
        
        return false; 
    }
    else if(password=='')
    {
        document.getElementById('pass').innerHTML = 'null password detected';
        return false;
    }


    return true;
    
}


