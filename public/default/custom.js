// function successalert(message)
// {
//     SnackBar({
//         message: message,
//         status: "success",
//         icon: "add",
//         position:'tr'
//     });
// }
// function failalert(message)
// {
//     SnackBar({
//         message: message,
//         status: "danger",
//         icon: "exclamation",
//         position:'tr'
//     });
// }
// function show_loader()
// {
//     $('#load_screen').css({'display':'block'});
// }
// function hide_loader()
// {
//     $('#load_screen').css({'display':'none'});
// }
// $( window ).on( "load", function() { hide_loader();});



function generalalert(msg)
{
    iziToast.show({
        // title: 'OK',
        icon:'fas fa-exclamation-circle',
        iconColor:'#00d1cd',
        message: msg,
        position:'topRight',
        color:'#253342',
        messageColor:'#00d1cd',
        close:true,
    });    
}
function successalert(msg)
{
    iziToast.show({
        icon:'fas fa-check-square',
        iconColor:'#3cd2a5',
        message: msg,
        position:'bottomRight',
        color:'#253342',
        messageColor:'#3cd2a5',
        close:true,
    });
}
function failalert(msg)
{
    iziToast.show({
        icon:'fas fa-ban',
        iconColor:'rgb(255, 96, 96)',
        message: msg,
        position:'bottomRight',
        color:'#253342',
        messageColor:'rgb(255, 96, 96)',
        close:true,
    });
}

$(document).ready(function(){
    $('#mainTable').doubleScroll({resetOnWindowResize: true});
})

window.onload = function(e){
    $('#mainTable').doubleScroll({resetOnWindowResize: true});
 }

 $(function(){
    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); 
        $('#sidebar a').each(function(){
            //$(this).parents("li)removeClass('active');
        
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parents(".menu-item").addClass('active');
            }
        });
});