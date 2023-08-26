$(document).ready(function () {
window.setTimeout(function() {
    $(".custome_alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 3000);
});
