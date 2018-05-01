//导航栏展开
    // function changeImg(id){
    //     var src=$(id).find("div img").attr("src");
    //     src=src.substring(0,src.indexOf("."));
    //     var temp=src.substring(src.length-1,src.length);
    //     if(temp=="1")
    //     {
    //         src=src.substring(0,src.length-1);
    //         src=src+"2.png";
    //         $(id).find("div img").attr("src",src);
    //         $(id).parent().find(".weak").css("display","block");
    //     }
    //     else{
    //         src=src.substring(0,src.length-1);
    //         src=src+"1.png";
    //         $(id).find("div img").attr("src",src);
    //         $(id).parent().find(".weak").css("display","none");
    //     }
    // }
    //登陆时验证输入框中数据是否合法
    function login(){
        //不为空
        if($("#user_id").val()==null||$("#user_id").val()=="")
        {
            alert("账号不能为空");
            return false;
        }
        //不为非整数
        if(isNaN($("#user_id").val()))
        {
            $("#user_id").val("")
            alert("账号必须为数字");
            return false;
        }
        $("#sub").submit();
    }
    //注销登陆
    function logout(){
        document.write('<?php setcookie("user_name","",time()-3600);?>');
        location.href="login.php";
    }