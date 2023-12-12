function validation() 
{
    let fullname = document.getElementById('fullname').value;
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    function checkCharacters(input) {
        let isOnlyLetters = true;
    
        for (let i = 0; i < input.length; i++) {
            let char = input[i];
    
            if (!(char >= 'a' && char <= 'z') && !(char >= 'A' && char <= 'Z') && !(char === ' ')) {
                isOnlyLetters = false;
                break;
            }
        }
    
        return !isOnlyLetters;
    }
    
    function digitCheck(input, digit) 
    {
        return input.length <= digit - 1;
    }
    

    if(fullname=='' || username=='' || email=='' || password=='')
    {
        document.getElementById('fname').innerHTML = 'null value detected';
        
        return false;
    }
    
    else if(checkCharacters(fullname))
    {
        document.getElementById('output').innerHTML = 'only character is allowed in full name';
        return false;
    }
    else if(digitCheck(username,6))
    {
        document.getElementById('output').innerHTML = 'atleast 6 digit is needed for username';
        return false;
    }
    else if(digitCheck(password,6))
    {
        document.getElementById('output').innerHTML = 'atleast 6 digit is needed for password';
        return false;
    }
    


    return true;
    
    

}
