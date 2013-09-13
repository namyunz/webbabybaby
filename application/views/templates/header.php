<!DOCTYPE html>
<html>
<head>
    <title><?php echo($title);?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="application/views/templates/css/bootstrap-cerulean.css">
    <link rel="stylesheet" href="application/views/templates/css/template-style.css">
</head>
<body>
    <!-- 헤더 -->
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- 헤더제목 -->
            <div class="navbar-header">
                <a class="navbar-brand top-header" href="#">Baby Baby</a>
            </div>

            <!-- 헤더 메뉴 -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">센터소개</a></li>
                    <li><a href="#about">식단만들기</a></li>
                    <li><a href="#contact">게시판</a></li>
                    <li><a href="#community">커뮤니티</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
                </ul>

            </div>
        </div>
    </div>
    
    <div class="wrapper">