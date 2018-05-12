<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="layer/layer.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            overflow: hidden;
        }

        #head {
            background-color: rgb(12, 14, 13);
            /* height: 50px; */
            color:white;
        }

        #head_left {
            float: left;
            width: 50%;
            padding-left: 3%;
        }

        #head_right {
            float: right;
            width: 50%;
        }

        #character {
            float: right;
            margin-right: 5%;
        }

        #msg_block {
            float: right;
            margin-right: 5%;
        }

        #main {
            /* height:600px; */
            background-color: blanchedalmond;
        }

        #left {
            float: left;
            width: 15%;
            padding-top: 3%;
            /* height: 600px; */
            background-color: rgb(230, 230, 230);
            border-right: solid 0.5px rgb(204, 204, 204);
        }

        #left dl dt,
        dd {
            padding-left: 25%;
        }

        #left dl:hover {
            cursor: pointer;
        }

        #left dl dt:hover {
            /* background-color: rgb(216, 49, 27); */
            color:steelblue;
        }

        #left dl dd:hover {
            background-color: rgb(255, 255, 255);
            color:steelblue;
        }

        #right {
            float: left;
            width: 85%;
            /* height: 600px; */
            /* background-color: rgb(80, 61, 150); */
        }

        #bars {
            /* width: 100%; */
            /* height: 30px; */
            background-color: rgb(230, 230, 230);
        }

        #bars ul {
            margin: 0;
        }

        #bars ul li {
            float: left;
            text-align: center;
            list-style: none;
            padding-left: 6px;
            padding-right: 6px;
            margin-right: 5px;
            background-color: rgb(167, 165, 161);
        }

        #bars ul :hover {
            cursor: pointer;
        }

        #bars ul li img {
            width: 8px;
            height: 8px;
            margin-left: 5px;
        }

        #bars ul li img:hover {
            src: url(imgs/hover_close.png);
        }

        /* #bars em {
            width: 5px;
            
            float: left;
        } */

        #ifrs iframe {
            border: none;
            height: 100%;
            width: 100%;
            /* background-color: darkgrey; */
        }

        .live {
            background-color: blue !important;
        }
    </style>
</head>

<body>
    <div id="head">
        <div id="head_left">医药连锁店管理系统</div>
        <div id="head_right">
            <div id="msg_block">
                    {{$user_name}}
            </div>
            <div id="character">
                管理员
            </div>

        </div>
    </div>
    <div id="mian">
        <div id="left">
            <dl>
                <dt>连锁店管理</dt>
                <!-- <dd onclick="bars_new('会员管理',1,'测试');">会员管理</dd> -->
                <dd onclick="bars_new('连锁店列表',1,'chainStore');">连锁店列表</dd>
            </dl>
            <dl>
                <dt>药品管理</dt>
                <dd onclick="bars_new('药品列表',2,'medicine');">药品列表</dd>
            </dl>
        </div>
        <div id="right">
            <div id="bars">
                <ul>
                    <li id="bars_ul_li0" onclick="to_index();" class="live">首页</li>
                    <!-- <li>会员管理
                        <img src="imgs/close.png" onclick="bars_del(id);javascript:$(this).parent().remove();" alt="">
                    </li>
                    <li>连锁店管理
                        <img src="imgs/close.png" onclick="bars_del(id);javascript:$(this).parent().remove();" alt="">
                    </li>
                    <li>药品管理
                        <img src="imgs/close.png" onclick="bars_del(id);javascript:$(this).parent().remove();" alt="">
                    </li> -->
                </ul>
            </div>
            <div id="ifrs">
                <iframe src="welcome"></iframe>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var height = window.innerHeight;//浏览器高度
        var head = height * 0.07;//页面头部高度
        var main = height * 0.93;//主体高度
        var bars_height = main * 0.05;//bars元素高度
        var bars_ul_li_height = main * 0.05;//li元素高度
        function to_index() {
            $("#bars ul li").attr("class", "");//去掉所有li的“live”样式
            $("#bars_ul_li0").attr("class", "live");//该li加上“live”样式
            $("#ifrs iframe").css("display", "none");
            $("#ifrs iframe[src='welcome']").css("display", "block");
        }
        //删除对应的iframe(删除bars操作在元素中)
        $(document).on("click", "#bars ul li img", function (event) {
            var ifr_url = $(this).attr("url");
            $("#ifrs iframe[src='" + ifr_url + "']").remove();
            $("#ifrs iframe").eq(-1).css("display", "block");
            $(this).parent().remove();
            $("#bars ul li").eq(-1).attr("class", "live");

            //event.stopPropagation();
        });

        //鼠标经过bars的li元素时更换显眼的图标
        function chang_close_img(id) {
            $(id).attr("src", "imgs/hover_close.png");
        }
        //鼠标离开bars的li元素时还原图标
        function release_close_img(id) {
            $(id).attr("src", "imgs/close.png");
        }
        //新建一个bars和iframe
        function bars_new(bars_name, id, url) {
            //如果该栏已存在，则block，否则新建
            if ($("#bars_ul_li" + id).length > 0) {
                //刷新该栏
                $("#bars ul li").attr("class", "");//去掉所有li的“live”样式
                $("#bars_ul_li" + id).attr("class", "live");//该li加上“live”样式

                //如果当前活动页为其他，则隐藏其他页，并显示该页
                //$("#ifrs iframe[src='" + url + "']").attr("src",url);
                $("#ifrs iframe").css("display", "none");
                $("#ifrs iframe[src='" + url + "']").css("display", "block");

            }
            else {
                //新建该栏
                $("#bars ul li").attr("class", "");//去掉所有li的“live”样式
                //新建li
                //url用来标记对应哪个iframe
                $("#bars ul").append("<li onclick='bars_new(\"" + bars_name + "\",\"" + id + "\",\"" +
                    url + "\");' id='" + "bars_ul_li" + id + "' class='live'> " + bars_name +
                    "<img url='" + url + "' onmouseleave='release_close_img(this);' onmouseover='chang_close_img(this);' src='imgs/close.png' alt=''></li>");

                $("#bars ul li").css("line-height", bars_ul_li_height + "px");
                //新建iframe
                $("#ifrs").append("<iframe src=" + url + "></iframe>");
                $("#ifrs iframe").css("display", "none");
                $("#ifrs iframe[src='" + url + "']").css("display", "block");
            }
        }

        $("#head").css("height", head);
        $("#head").css("line-height", head+"px");
        $("#left").css("height", main);
        $("#bars").css("height", bars_height);
        $("#bars ul li").css("line-height", bars_ul_li_height + "px");
        // $("#bars ul li").css("padding-top", main * 0.05*0.2+"px");
        $("#ifrs").css("height", main * 0.95);

    </script>
</body>

</html>