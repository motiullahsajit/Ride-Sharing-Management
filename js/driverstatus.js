function validation() 
{
    let availability = document.getElementById('availability').value;
    let reason = document.getElementById('reason').value;
    
    

    if(vehicleModel=='' || licensePlate=='' || licenseNumber=='')
    {
        document.getElementById('av').innerHTML = 'null vehicleModel detected';
        document.getElementById('unav').innerHTML = 'null licensePlate detected';
        
        return false;
    }
    if (vehicleModel == '') {
        document.getElementById('av').innerHTML = 'null vehicleModel detected';
        
        
        return false; 
    }
    else if(licensePlate=='')
    {
        document.getElementById('lp').innerHTML = 'null licensePlate detected';
        return false;
    }
    else if(licenseNumber=='')
    {
        document.getElementById('ln').innerHTML = 'null licenseNumber detected';
        return false;
    }


    return true;
    
}


