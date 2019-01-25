$(function(){
$('#cpass').on('change',function(e){
    
    var cpass=$(this).val();
    var pass=$("#pass").val();
    if(pass!=cpass)
    {
        $(this).val("");
        $("#cpasserr").html("<span class='alert alert-danger'>Password is not match</span>");
    }
    else
    {
        $("#cpasserr").html("<span class='alert alert-success'>Password is match</span>");
    }
});

$("#pass").on('change',function(e){
    
    $("#cpass").val("");
});


$("#user").on('keyup',function(e){
    var user=$(this).val();
    var dataString='user='+user;
    $.ajax({
        type:'POST',
        url:'checkuser.php',
        data:dataString,
        cache:false,
        success:function(available)
        {
            if(available=="false")
            {
                $('#usererr').html('<span class="alert alert-danger">UserName is not available</span>');
            }
            else
            {
                $('#usererr').html('<span class="alert alert-success">UserName is available</span>');
            }
        },
        error: function(xhr,xer){
            $('#usererr').html('<span class="alert alert-danger">Some Error is Occur '+xhr.status+'</span>')
        }
    });
});

});