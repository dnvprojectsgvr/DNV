 $(document).ready(function()
 {
                $("#subm").click(function(){
                    var username = $("#usid1").val();
                    var password = $("#pass").val();
                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'login_check.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response)
                            {
                                var msg = "";
                                if(response == 1)
                                {
                                    window.location = "../dnv/Student/dashboard.php";
                                }
                                else if(response == 2)
                                {
                                    window.location = "../dnv/Faculty/dashboard.php";
                                }
                                else if(response == 3)
                                {
                                    msg = "Admin Permission Is Denied";
                                }
                                else if(response == 0)
                                {
                                    msg = "Invalid username and password!";
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });