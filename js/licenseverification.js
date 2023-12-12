function validation() 
{
    let vehicleModel = document.getElementById('vehicleModel').value;
    let licensePlate = document.getElementById('licensePlate').value;
    let licenseNumber = document.getElementById('licenseNumber').value;
    

    if(vehicleModel=='' || licensePlate=='' || licenseNumber=='')
    {
        document.getElementById('vm').innerHTML = 'null vehicleModel detected';
        document.getElementById('lp').innerHTML = 'null licensePlate detected';
        document.getElementById('ln').innerHTML = 'null licenseNumber detected';
        return false;
    }
    if (vehicleModel == '') {
        document.getElementById('vm').innerHTML = 'null vehicleModel detected';
        
        
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


