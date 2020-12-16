$(document).ready(()=>{  
    // setActualDate();
});

function setActualDate() {
    let date = new Date();
    $("#task_date_for_month").val(date.getMonth() + 1);
    $("#task_date_for_day").val(date.getDate());
    $("#task_date_for_year").val(date.getFullYear());
}