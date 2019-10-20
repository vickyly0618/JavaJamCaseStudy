// fucntions
function ValidationForm() {
    var name,email,date,experience;
    var name_status, email_status, date_status, experience_status;


    name_status = ValidateName();
    email_status = ValidateEmail();
    date_status = vdate();

    if (name_status && email_status && date_status) {
        alert("Success!");
    }
}

function ValidateName() {
    var name = document.getElementById("name");

    // check if name has alphabet and space
    if ((name.value.match(/[a-z]/i)) && (/\s/.test(name.value))){
        
        document.getElementById("wname").innerHTML = "" ;
        document.getElementById("btn_submit").disabled = false;

        return true;
    }
    else {
        document.getElementById("wname").innerHTML = "Name must contain alphabet characters and character spaces." ;
        document.getElementById("btn_submit").disabled = true;
        return false;

    }
}

function isSpecialCharacter(string){
    var format = /^[!#$%^&*()_+\=\[\]{};':"\\|,.<>\/?]*$/;
    if( format.test(string)){
        return true;
      }else{
        return false;
      }
    
}

function ValidateEmail() {
    var email = document.getElementById("email");
    // split the email address by special chareacters
    var email_splitted = email.value.split("@");
    var email_username = email_splitted[0];
    var email_domainname = email_splitted[1];

    // validate email_username
    if ((!isSpecialCharacter(email_username)) && (!isSpecialCharacter(email_domainname))) {
   
        if (email_username.indexOf('-') == -1){
            document.getElementById("wemail").innerHTML = "You need a hyphen in the email username" ;
            
            document.getElementById("btn_submit").disabled = true;
            return false;
        }
        else if (email_username.split(".").length<=1){
            document.getElementById("wemail").innerHTML = "You need a period in the email username." ;
            
            document.getElementById("btn_submit").disabled = true;
            return false;
        }
        else {
            // validate email_domainname
            var email_domainname_splitted = email_domainname.split(".");
            var len = email_domainname_splitted.length
            if (!(len >=2) || !(email_domainname_splitted.length <=4)){
                document.getElementById("wemail").innerHTML = "You need 2-4 address extensiions in your domain." ;

                document.getElementById("btn_submit").disabled = true;
                return false;
            }
            else {

                if ((email_domainname_splitted[len-1].length >=2) && (email_domainname_splitted[len-1].length <=3)){
                    document.getElementById("wemail").innerHTML = "" ;

                    document.getElementById("btn_submit").disabled = false;
                    return true;
                }
                else 
                    document.getElementById("wemail").innerHTML = "Your last extension must have 2-3 letters.";
                
                    document.getElementById("btn_submit").disabled = true;
                    return false;
                }
        }
    }
    else {
        document.getElementById("wemail").innerHTML = "email cannot have special char.";
        document.getElementById("btn_submit").disabled = true;
        return false;
    }
}



function vdate(date) {

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    
    pattern= yyyy + '-' + mm + '-' + dd;
    
    
    var now=new Date(pattern);
    var ipt=new Date(date);
    console.log(now+' '+ipt);
     if(ipt<=now) {
        document.getElementById("wdate").innerHTML = "The start date cannot be from today and the past." ;
        document.getElementById("btn_submit").disabled = true;
        return false;
     }
     else{

        document.getElementById("wdate").innerHTML = "" ;
        document.getElementById("btn_submit").disabled = false;
        return true;
     }
    }

function ValidateDate (date) {
    var today = new Date();
    var fulldate = today.toLocaleDateString();
    var full_date_splitted = fulldate.split("/");
    
    var today_year =  full_date_splitted[2];
    var today_month = full_date_splitted[1];
    var today_day = full_date_splitted[0];

    var picked_date_splitted = date.value.split("-");
    var picked_date_year = picked_date_splitted[0];
    var picked_date_month = picked_date_splitted[1];
    var picked_date_day = picked_date_splitted[2];

    t = today_year + '-' + today_month + '-' + today_day;
    pick = picked_date_year + '-' + picked_date_month + '-' + picked_date_day;

    // alert (t);
    // alert (pick);

    if ((pick < t)){
        document.getElementById("wdate").innerHTML = "The start date cannot be from today and the past." ;
        document.getElementById("btn_submit").disabled = true;
        return false;
    }

    else {
        document.getElementById("wdate").innerHTML = "" ;
        document.getElementById("btn_submit").disabled = false;
        return true;
    }
}

function ValidateExp(){
    var experience = document.getElementById("experience");

}
