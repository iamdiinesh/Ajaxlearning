
$(document).ready(function(){
    $("#submit").click(function(){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var contact = $("#contact").val();
    var dataString = 'name='+ name + '&email='+ email + '&password='+ password + '&contact='+ contact;
    
    if(name==''||email==''||password==''||contact=='')
    {
    alert("Please Fill All Fields");
    }
    else
    {
    $.ajax({
    type: "POST",
    url: "ajaxsubmit.php",
    data: dataString,
    cache: false,
    success: function(result){
    alert(result);
    }
    });
    }
    return false;
    });
    });
    