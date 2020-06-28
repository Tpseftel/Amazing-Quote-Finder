function isValidEmail(email){
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(mailformat)){
        return true;
    }
    return false;
}
// console.log(`Is Valid email: ${isValidEmail(email)}`);

function greaterEqualDate(date1, date2){
    date1 = new Date(date1);
    date1.setHours(0,0,0,0);

    date2 = new Date(date2);
    date2.setHours(0,0,0,0);

    if(date1 >= date2) return true;
    return false;
}
// console.log(`End Date is greater or equal than Start Date: ${greaterEqualDate(end_date, start_date)}`);

function lowerEqualDate(date1, date2){
    date1 = new Date(date1);
    date1.setHours(0,0,0,0);

    date2 = new Date(date2);
    date2.setHours(0,0,0,0);
    
    if(date1 <= date2){
    return true ;
    }
    return false;
}
// console.log(`Start Date is lower or equal than End Date: ${lowerEqualDate(start_date,end_date)}`);


function lowerThanToday(date_value){
    let today = new Date();
    today.setHours(0,0,0,0);

    date_value = new Date(date_value);
    date_value.setHours(0,0,0,0);

    if(date_value <= today) {
        return true;
    }
    return false;
}
// console.log(`Is lower than today: ${lowerThanToday(start_date)}`);

function isValidDate(date_value) {
    var regEx = /^\d{4}-\d{2}-\d{2}$/;
    if(!date_value.match(regEx)) return false;  // Invalid format
    var d = new Date(date_value);
    var dNum = d.getTime();
    if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
    return d.toISOString().slice(0,10) === date_value;
}
// console.log(`Is Valid date: ${isValidDate(start_date)}`);


function validateEmail(email) {
    if (!isValidEmail(email))
        return "Pleaze provide a valid email";
}

function validateEndDate(end_date, start_date) {
    if (!isValidDate(end_date))
        return 'End date is invalid';
    if (!greaterEqualDate(end_date, start_date))
        return 'End date must be lower or equal than Start date';
    if (!lowerThanToday(end_date))
        return 'End date must be lower or equal than today';
}

function validateStartDate(start_date, end_date) {
    if (!isValidDate(start_date))
        return 'Start date is invalid';
    if (!lowerEqualDate(start_date, end_date))
        return 'Start date must be lower or equal than end date';
    if (!lowerThanToday(start_date))
        return 'Start date must be lower or equal than today';
}