function validation() 
{
    let username = document.getElementById('username').value;
    let rating = document.getElementById('rating').value;
    let feedback = document.getElementById('feedback').value;
    

    if(vehicleModel=='' || licensePlate=='' || licenseNumber=='')
    {
        document.getElementById('un').innerHTML = 'null username detected';
        document.getElementById('rate').innerHTML = 'null rating detected';
        document.getElementById('feed').innerHTML = 'null feedback detected';
        return false;
    }
    if (username == '') {
        document.getElementById('un').innerHTML = 'null username detected';
        
        
        return false; 
    }
    else if(rating=='')
    {
        document.getElementById('rate').innerHTML = 'null rating detected';
        return false;
    }
    else if(feedback=='')
    {
        document.getElementById('feed').innerHTML = 'null feedback detected';
        return false;
    }


    return true;
    
}


