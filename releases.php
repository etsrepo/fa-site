<?php

@include_once('info.php');

function get_file_size($name) {
    $bytes = @filesize($name);
    $bytes = floatval($bytes);
    $arBytes = array(
        0 => array(
            "UNIT" => "TB",
            "VALUE" => pow(1024, 4)
        ),
        1 => array(
            "UNIT" => "GB",
            "VALUE" => pow(1024, 3)
        ),
        2 => array(
            "UNIT" => "MB",
            "VALUE" => pow(1024, 2)
        ),
        3 => array(
            "UNIT" => "KB",
            "VALUE" => 1024
        ),
        4 => array(
            "UNIT" => "B",
            "VALUE" => 1
        ),
    );

    foreach($arBytes as $arItem) {
        if($bytes >= $arItem["VALUE"]) {
            $result = $bytes / $arItem["VALUE"];
            $result = strval(round($result, 2))." ".$arItem["UNIT"];
            break;
        }
    }
    return isset($result) ? $result : null;
}
?><!DOCTYPE html>
<html>
<head>
    <title>Firebase Admin - Releases, Platform, Versions</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta property="og:url"         content="https://firebaseadmin.com" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Firebase Admin - Firebase Management Tool" />
    <meta property="og:description" content="Download different versions and formats of Firebase Admin including windows, mac and linux for 32bit 64bit architectures." />
    <meta property="og:image"       content="https://firebaseadmin.com/screenshot.png" />
    <meta name="theme-color"        content="#faba61" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-45866404-3', 'auto');
        ga('send', 'pageview');
    </script>
    <link rel="shortcut icon" href="https://s9.postimg.org/f7i558jjj/favicon.png">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700|Material+Icons" as="style" onload="this.rel='stylesheet'">
    <style type="text/css">
        html,body,h1,h2,h3,ul,ol{
            margin: 0;
            padding: 0;
        }
        html,body{
            height: 100%;
            color: #333;
            font: 400 16px Roboto,sans-serif;
            line-height: 1.2;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }
        h1, h2, h3{
            font-weight: 300;
        }
        a, a:visited{
            text-decoration: none;
            color: inherit;
        }
        section {
            overflow: hidden;
            border-bottom: 1px solid #eee;
        }
        #home{
            position: relative;
            height: 36px;
            color: #fff;
            overflow: hidden;
        }
        section h2{
            font-size: 28px;
            font-weight: 300;
            padding-top: 0;
            padding-bottom: 5px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        header{
            display: flex;
            flex-direction: row;
            padding: 0 40px;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 999;
            transition: all .4s;
        }
        header.scroll{
            background: rgba(255, 255, 255, 0.97);
            color: #f89d40;
            box-shadow: 0 0 2px rgba(0, 0, 0, .2);
        }
        nav{
            flex-grow: 2;
            position: relative;
        }
        #logo{
            font-size: 24px;
            font-weight: 400;
            line-height: 2.4;
            transition: all .4s;
        }
        #logo span {
            padding-left: 20px;
            color: #666;
        }
        nav ul{
            position: absolute;
            top: 100%;
            background: #fff;
            color: #f89d40;
            right: 0;
            flex-direction: column;
            width: 100%;
            min-width: 250px;
            max-height: 0;
            font-size: 0;
            visibility: hidden;
            display: flex;
            list-style: none;
            justify-content: flex-end;
            z-index: 999;
            overflow: hidden;
            transition: all .2s;
            box-shadow: 0 0 40px rgba(0, 0, 0, .2);
        }
        .active + ul{
            visibility: visible;
            max-height: 999px;
            font-size: inherit;
        }
        nav ul a{
            display: block;
            padding: 20px 40px;
            cursor: pointer;
            transition: all .4s;
        }
        #releases{
            padding: 40px;
            max-width: 800px;
            margin: auto;
            min-height: 60%;
        }
        #releases .release{
            padding-bottom: 20px;
        }
        .release .description{
            font-size: 14px;
            line-height: 1.6;
            padding-bottom: 6px;
        }
        .release .description ul{
            padding-left: 30px;
        }
        .change-link{
            float: right;
            color: #4078c0;
        }
        .downloads{
            list-style: none;
        }
        .downloads li{
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .downloads li strong{
            color: #4078c0;
        }
        .downloads li small{
            float: right;
            color: #767676;
        }
        .toggle-menu{
            top: 50%;
        }
        .toggle-menu, .toggle-menu:before, .toggle-menu:after{
            position: absolute;
            right: 0;
            width: 25px;
            height: 2px;
            background: #fff;
            border-radius: 2px;
        }
        .toggle-menu:before, .toggle-menu:after{
            content: '';
            top: -6px;
            transform-origin: 4px 1px;
            transition: all .2s;
        }
        .toggle-menu:after{
            top: 6px;
        }
        .scroll .toggle-menu, .scroll .toggle-menu:before, .scroll .toggle-menu:after{
            background: #cc741a;
        }
        .dl{
            width: 16px;
            height: 18px;
            color: #767676;
            fill: #767676;
            vertical-align: middle;
            padding-right: 4px;
        }
        @media (min-width: 768px) {
            header{
                padding: 0 20px;
            }
            .toggle-menu {
                display: none;
            }
            nav ul{
                visibility: visible;
                font-size: inherit;
                position: inherit;
                max-height: 999;
                flex-direction: row;
                background: none;
                color: #fff;
                box-shadow: none;
                position: static;
            }
            nav ul a{
                padding: 20px;
            }
            .scroll #logo{
                font-size: 18px;
                line-height: 2;
            }
            .scroll nav ul{
                color: #f89d40;
            }
            .scroll nav a{
                font-size: 14px;
                padding: 10px 20px;
            }
            main{
                top: 40%;
            }
        }
        @media (min-width: 1024px) {
            header{
                padding: 0 20px;
            }
            nav ul a{
                padding: 20px 40px;
            }
            .scroll nav a{
                padding: 10px 40px;
            }
        }
    </style>
</head>
<body>
<section id="home">
    <header class="scroll">
        <h1 id="logo"><a href="/">Firebase Admin</a> <span>Downloads</span></h1>
    </header>
</section>
<section id="releases">
    <?php
    $versions = array_diff(scandir('downloads', SCANDIR_SORT_DESCENDING), ['.', '..']);
    foreach ($versions as $version) {
        $version_class = str_replace('.', '', $version);
        echo "<div class='release $version_class' id='release$version_class'>"; ?>
        <h2><?php echo $version; ?></h2>
        <div class="description">
            <a href="/changelog.html" class="change-link">Full Changelog</a>
            <?php
            if ($version === '1.0.0') {
                echo '<h3>Initial Release Main Features</h3>';
            } else {
                echo '<h3>Notable Changes</h3>';
            }
            ?>
            <ul>
                <?php
                $i = 0;
                while ($i < 4) {
                    if (isset($changes[$version][$i]))
                        echo '<li>' . $changes[$version][$i] . '</li>';
                    $i++;
                }
                ?>
            </ul>
        </div>
        <ul class="downloads">
            <?php
            $files = array_diff(scandir('downloads/'.$version, SCANDIR_SORT_DESCENDING), ['.', '..']);
            foreach ($files as $file) {
                $icon = 'dl';
                if (strpos($file, 'zip') !== false) $icon = 'dlzip'; ?>
                <li>
                    <a href="download.php?file=<?php echo "$version/$file"; ?>" target="_blank">
                        <svg class="dl"><use xlink:href="#<?php echo $icon; ?>"></svg>
                        <strong><?php echo $file; ?></strong>
                        <small><?php echo get_file_size("downloads/$version/$file"); ?></small>
                    </a>
                </li>
            <?php } ?>
        </ul>
        </div>
    <?php } ?>
</section>
<footer>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="//github.com/codefoxes/firebase-admin" target="_blank">GitHub</a></li>
        <li><a href="changelog.html">Changelog</a></li>
    </ul>
    <div class="copyright">
        &copy; 2016 &middot; Codefoxes &middot; All Rights Reserved
    </div>
</footer>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;" width="16" height="16" version="1.1" viewBox="0 0 16 16"><path id="dl" d="M1 4.27v7.47c0 .45.3.84.75.97l6.5 1.73c.16.05.34.05.5 0l6.5-1.73c.45-.13.75-.52.75-.97V4.27c0-.45-.3-.84-.75-.97l-6.5-1.74a1.4 1.4 0 0 0-.5 0L1.75 3.3c-.45.13-.75.52-.75.97zm7 9.09l-6-1.59V5l6 1.61v6.75zM2 4l2.5-.67L11 5.06l-2.5.67L2 4zm13 7.77l-6 1.59V6.61l2-.55V8.5l2-.53V5.53L15 5v6.77zm-2-7.24L6.5 2.8l2-.53L15 4l-2 .53z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;" width="12" height="16" version="1.1" viewBox="0 0 12 16"><path id="dlzip" d="M8.5 1H1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V4.5L8.5 1zM11 14H1V2h3v1h1V2h3l3 3v9zM5 4V3h1v1H5zM4 4h1v1H4V4zm1 2V5h1v1H5zM4 6h1v1H4V6zm1 2V7h1v1H5zM4 9.28A2 2 0 0 0 3 11v1h4v-1a2 2 0 0 0-2-2V8H4v1.28zM6 10v1H4v-1h2z"></path></svg>
</body>
<style type="text/css">
    .toggle-menu.active{
        width: 0;
    }
    .toggle-menu.active:before{
        transform: rotate(45deg);
    }
    .toggle-menu.active:after{
        transform: rotate(-45deg);
    }
    img{
        max-width: 100%;
    }
    .share{
        padding-top: 8%;
    }
    .share .buttons{
        text-align: center;
        padding: 30px 0 20px;
    }
    .share .button{
        background: #3b5998;
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 25px;
        padding-top: 12px;
        box-sizing: border-box;
        margin: 0 20px;
    }
    .button.google{
        background: #DC4E41;
    }
    .button.twitter{
        background: #55ACEE;
    }
    .share svg{
        width: 24px;
        height: 24px;
    }
    footer{
        background: #37424b;
        padding: 40px 0;
        overflow: auto;
        color: #cfd8dc;
        text-align: center;
    }
    footer ul{
        display: flex;
        float: left;
        list-style: none;
    }
    footer a{
        display: block;
        padding: 10px 20px;
    }
    .copyright{
        float: right;
        padding: 10px 0;
    }
    @media (min-width: 768px) {
        #features, #download{
            height: 100%;
        }
        .features-details, .download-details{
            padding: 30px 40px;
            flex-direction: row;
        }
        .features-details .item, .download-details .item{
            width: 33%;
            padding: 30px;
            margin-bottom: inherit;
        }
        footer{
            padding: 40px;
        }
    }
</style>
<script type="text/javascript">
    function currentYPosition() {
        if (self.pageYOffset) return self.pageYOffset;
        if (document.documentElement && document.documentElement.scrollTop)
            return document.documentElement.scrollTop;
        if (document.body.scrollTop) return document.body.scrollTop;
        return 0;
    }

    function elmYPosition(eID) {
        var elm = document.getElementById(eID);
        if(!elm) return;
        var y = elm.offsetTop;
        var node = elm;
        while (node.offsetParent && node.offsetParent != document.body) {
            node = node.offsetParent;
            y += node.offsetTop;
        } return y;
    }

    function smoothScroll(eID) {
        url = window.location.href.substring(0, window.location.href.indexOf('#'));
        var startY = currentYPosition();
        var stopY = elmYPosition(eID);
        var distance = stopY > startY ? stopY - startY : startY - stopY;
        if (distance < 100) {
            scrollTo(0, stopY); return;
        }
        var speed = Math.round(distance / 10);
        if (speed >= 20) speed = 20;
        var step = Math.round(distance / 25);
        var leapY = stopY > startY ? startY + step : startY - step;
        var timer = 0;
        if (stopY > startY) {
            for ( var i=startY; i<stopY; i+=step ) {
                setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
                leapY += step; if (leapY > stopY) leapY = stopY; timer++;
            }
            window.location.href = url + '#' + eID;
            return;
        }
        for ( var i=startY; i>stopY; i-=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
        }
        window.location.href = url + '#' + eID;
        return false;
    }
    function toggle(e){
        e.classList.toggle('active');
    }

    var url = encodeURIComponent(document.URL);
    var text = encodeURIComponent(document.title);

    function socialShare(site) {
        var link;
        switch (site) {
            case 'facebook':
                link = '//www.facebook.com/sharer/sharer.php?u=' + url + '&t=' + text;
                break;
            case 'google':
                link = '//plus.google.com/share?url=' + url;
                break;
            case 'twitter':
                link = '//twitter.com/share?text=' + text;
                break;
        }
        window.open(link, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    }

    function updateCounter(){
        var status = localStorage.getItem('downloaded');
        if(!status) {
            var count = document.getElementById('count').innerHTML;
            count++;
            document.getElementById('count').innerHTML = count;
            localStorage.setItem('downloaded', 1);
        }
    }

    function downloadFile(elem) {
        window.open(elem.getAttribute('href'));
        updateCounter();
    }

</script>
</html>
