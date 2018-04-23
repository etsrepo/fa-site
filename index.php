<html>
<head>
    <title>Firebase Admin - Firebase Management Tool</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta property="og:url"         content="https://firebaseadmin.com" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Firebase Admin - Firebase Management Tool" />
    <meta property="og:description" content="Firebase Admin is Google's Console on steroids in your machine. A cross platform realtime administration and query builder tool for Firebase" />
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
            text-align: center;
            height: 100%;
            overflow: hidden;
            border-bottom: 1px solid #eee;
        }
        #home{
            position: relative;
            height: 100%;
            min-height: 300px;
            color: #fff;
            overflow: hidden;
        }
        .background{
            position: absolute;
            left: -10px;
            right: -10px;
            top: -10px;
            bottom: -10px;
        }
        .background.image{
            z-index: -2;
            /*background-image: url('bg.jpg');*/
            background-size: cover;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
        }
        .background.gradient{
            z-index: -1;
            background: -moz-linear-gradient(top left, rgba(255,183,50,1) 0%, rgba(125,185,232,0) 100%);
            background: -webkit-linear-gradient(top left, rgba(255,183,50,1) 0%,rgba(125,185,232,0) 100%);
            background: linear-gradient(to bottom right, rgba(252, 202, 63, .6) 0%,rgba(246, 130, 12, .8) 100%);
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
        main{
            text-align: center;
            position: absolute;
            right: 0;
            left: 0;
            top: 20%;
        }
        main h1{
            font-size: 40px;
            font-weight: 300;
        }
        #download-button{
            padding: 11px 40px;
            background: #fff;
            color: #cc741a;
            font-size: 24px;
            border: 1px solid #fff;
            border-radius: 8px;
            outline: none;
            cursor: pointer;
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
    <div class="background image"></div>
    <div class="background gradient"></div>
    <header>
        <h1 id="logo">Firebase Admin</h1>
        <nav>
            <a class="toggle-menu" onclick="toggle(this)"></a>
            <ul>
                <li><a onclick="smoothScroll('home')">Home</a>
                <li><a onclick="smoothScroll('platforms')">Platforms</a>
                <li><a onclick="smoothScroll('features')">Features</a>
                <li><a onclick="smoothScroll('download')">Download</a>
                <li><a href="http://docs.codefoxes.com/firebase-admin" target="_blank">Docs</a>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Admin User Interface for Firebase</h1>
        <p>Firebase Admin is Google's Console on steroids in your machine.</p>
        <button id="download-button" onclick="smoothScroll('download')">Download</button>
    </main>
</section>
<section id="platforms">
    <h2>Cross platform Firebase manager</h2>
    <p class="details">Built for all of you! Firebase Admin is now available for Windows, Mac and Linux.</p>
    <img src="screenshot.png">
</section>
<section id="features">
    <h2>Simple UI. Robust Features.</h2>
    <div class="features-details details">
        <div class="item">
            <svg width="247px" height="197px" viewBox="0 0 247 197" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="desktop">
                    <polygon id="Shape" fill="#999999" points="152.933 147.837 157.733 175.503 88.673 175.503 93.473 147.837"></polygon>
                    <polygon id="Shape" fill="#CCCCCC" points="218.713 172.17 218.713 196.503 27.703 196.503 27.703 172.17 88.673 172.17 157.733 172.17"></polygon>
                    <path d="M232.732,0 L89.21,0 L13.377,2.479 C0.377,3.062 2.627,17.729 2.877,25.479 L3.044,115.979 L2.877,133.979 C2.877,141.479 6.174,146.392 13.673,146.392 L93.473,146.392 L152.933,146.392 L232.743,146.392 C240.243,146.392 226.543,141.646 226.543,134.146 L246.322,127.59 L246.322,13.58 C246.322,6.08 240.232,0 232.732,0 L232.732,0 Z" id="Shape" fill="#666666"></path>
                    <path d="M246.322,127.59 L246.322,137.59 C246.322,145.09 240.243,151.17 232.742,151.17 L152.932,151.17 L93.472,151.17 L13.672,151.17 C6.172,151.17 0.082,145.09 0.082,137.59 L0.082,127.59 L246.322,127.59" id="Shape" fill="#CCCCCC"></path>
                    <path d="M94.64,6 L13.673,6 C9.489,6 6.083,9.4 6.083,13.58 L6.083,121.59 L136.006,121.59 L94.64,6" id="Shape" fill="#505050"></path>
                    <path d="M92.492,0 L13.662,0 C6.162,0 0.082,6.08 0.082,13.58 L0.082,127.59 L138.152,127.59 L136.005,121.59 L6.083,121.59 L6.083,13.58 C6.083,9.4 9.489,6 13.673,6 L94.64,6 L92.492,0" id="Shape" fill="#333333"></path>
                </g>
            </svg>
            <div class="item-description">
                <h3>Multiple Platforms</h3>
                Whatever systems you use. We are here for you. Firebase Admin is available for Windows, Mac and Linux.
            </div>
        </div>
        <div class="item">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 460 460" style="enable-background:new 0 0 460 460;" xml:space="preserve">
					<rect x="10.469" y="143.828" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -81.4359 235.7307)" style="fill:#C8523B;" width="466.729" height="144.679"/>
                <polygon style="fill:#E0D492;" points="27.665,330.029 0,459.998 129.967,432.33 "/>
                <polygon style="fill:#C8523B;" points="0,459.998 9.06,417.433 42.564,450.937 "/>
                <polygon style="opacity:0.3;fill:#5B5B5F;enable-background:new;" points="129.967,432.33 0,459.998 408.848,51.15 460,102.302 "/>
				</svg>
            <div class="item-description">
                <h3>Powerful Query Builder</h3>
                Testing your firebase query is simple now. Write query &amp; test results directly using the query builder.
            </div>
        </div>
        <div class="item">
            <svg width="340px" height="340px" viewBox="0 0 340 340" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect id="square" fill="#00D7DF" x="0" y="0" width="147.333" height="147.333"></rect>
                <rect id="square" fill="#00969B" x="192.667" y="0" width="147.333" height="147.333"></rect>
                <rect id="square" fill="#00D7DF" x="0" y="192.667" width="147.333" height="147.333"></rect>
                <rect id="square" fill="#00969B" x="192.667" y="192.667" width="147.333" height="147.333"></rect>
                <polygon id="Shape" fill="#FFD68C" points="73.9168889 41.3975 84.3964444 62.4775 107.832519 65.85875 90.8740741 82.26625 94.8772593 105.43625 73.9168889 94.4975 52.9552593 105.43625 56.9584444 82.26625 40 65.85875 63.4360741 62.4775"></polygon>
                <polygon id="Shape" fill="#FFD68C" points="73.9168889 234.314125 84.3964444 255.394125 107.832519 258.775375 90.8740741 275.182875 94.8772593 298.352875 73.9168889 287.414125 52.9552593 298.352875 56.9584444 275.182875 40 258.775375 63.4360741 255.394125"></polygon>
                <polygon id="Shape" fill="#FCCA3F" points="266.33413 234 276.813685 255.08 300.249759 258.46125 283.291315 274.86875 287.2945 298.03875 266.33413 287.1 245.3725 298.03875 249.375685 274.86875 232.417241 258.46125 255.853315 255.08"></polygon>
                <polygon id="Shape" fill="#FCCA3F" points="266.33413 41 276.813685 62.08 300.249759 65.46125 283.291315 81.86875 287.2945 105.03875 266.33413 94.1 245.3725 105.03875 249.375685 81.86875 232.417241 65.46125 255.853315 62.08"></polygon>
            </svg>
            <div class="item-description">
                <h3>Multiple Connections</h3>
                Have Multiple Firebase Databases? Add as many connections as you want. Firebase Admin can handle them all.
            </div>
        </div>
        <div class="item">
            <svg width="583px" height="568px" viewBox="0 0 583 568" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M326.308072,382.142423 C370.006939,365.366281 395.520781,319.805291 386.989832,273.78081 C378.458883,227.756329 338.310916,194.366199 291.502477,194.366199 C244.694038,194.366199 204.546072,227.756329 196.015122,273.78081 C187.484173,319.805291 212.998015,365.366281 256.696883,382.142423 L191.280998,552.596622 C65.4213013,504.288967 -8.06801215,373.072916 16.4970774,240.517836 C41.0621669,107.962756 156.690412,11.7939462 291.502477,11.7939462 C426.314542,11.7939462 541.942787,107.962756 566.507877,240.517836 C591.072966,373.072916 517.583653,504.288967 391.723956,552.596622 L326.308072,382.142423 Z" id="path3773" stroke="#21552A" stroke-width="23.3073213" fill="#3FA652"></path>
            </svg>
            <span style="position:absolute;">&reg;</span>
            <div class="item-description">
                <h3>Open Source. Forever.</h3>
                Love Open Source? So do we! We will never charge you for the software. Today, Tomorrow and Forever.
            </div>
        </div>
        <div class="item">
            <svg width="200px" height="195px" viewBox="0 0 200 195" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <circle id="path-1" cx="96.6666667" cy="96.9833333" r="96.6666667"></circle>
                    <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="193.333333" height="193.333333" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                </defs>
                <g id="clock">
                    <use id="Oval" stroke="#545E73" mask="url(#mask-2)" stroke-width="26" fill="#ECF0F1" xlink:href="#path-1"></use>
                    <g id="Group" transform="translate(20.000000, 18.000000)" fill="#8697CB">
                        <path d="M76.6666667,1.91 C74.8266667,1.91 73.3333333,3.4 73.3333333,5.24333333 L73.3333333,8.57666667 C73.3333333,10.42 74.8266667,11.91 76.6666667,11.91 C78.5066667,11.91 80,10.42 80,8.57666667 L80,5.24333333 C80,3.40333333 78.5066667,1.91 76.6666667,1.91 L76.6666667,1.91 Z" id="Shape"></path>
                        <path d="M76.6666667,145.243333 C74.8266667,145.243333 73.3333333,146.733333 73.3333333,148.576667 L73.3333333,151.91 C73.3333333,153.753333 74.8266667,155.243333 76.6666667,155.243333 C78.5066667,155.243333 80,153.753333 80,151.91 L80,148.576667 C80,146.736667 78.5066667,145.243333 76.6666667,145.243333 L76.6666667,145.243333 Z" id="Shape"></path>
                        <path d="M150,75.2433333 L146.666667,75.2433333 C144.826667,75.2433333 143.333333,76.7333333 143.333333,78.5766667 C143.333333,80.42 144.826667,81.91 146.666667,81.91 L150,81.91 C151.84,81.91 153.333333,80.42 153.333333,78.5766667 C153.333333,76.7333333 151.84,75.2433333 150,75.2433333 L150,75.2433333 Z" id="Shape"></path>
                        <path d="M6.66666667,75.2433333 L3.33333333,75.2433333 C1.49333333,75.2433333 0,76.7333333 0,78.5766667 C0,80.42 1.49333333,81.91 3.33333333,81.91 L6.66666667,81.91 C8.50666667,81.91 10,80.42 10,78.5766667 C10,76.7333333 8.50666667,75.2433333 6.66666667,75.2433333 L6.66666667,75.2433333 Z" id="Shape"></path>
                        <path d="M126.163333,24.3666667 L123.806667,26.7233333 C122.503333,28.0266667 122.503333,30.1333333 123.806667,31.4366667 C124.456667,32.0866667 125.31,32.4133333 126.163333,32.4133333 C127.016667,32.4133333 127.87,32.0866667 128.52,31.4366667 L130.876667,29.08 C132.18,27.7766667 132.18,25.67 130.876667,24.3666667 C129.573333,23.0633333 127.466667,23.0633333 126.163333,24.3666667 L126.163333,24.3666667 Z" id="Shape"></path>
                        <path d="M24.8133333,125.72 L22.4566667,128.076667 C21.1533333,129.38 21.1533333,131.486667 22.4566667,132.79 C23.1066667,133.44 23.96,133.766667 24.8133333,133.766667 C25.6666667,133.766667 26.52,133.44 27.17,132.79 L29.5266667,130.433333 C30.83,129.13 30.83,127.023333 29.5266667,125.72 C28.2233333,124.416667 26.1133333,124.416667 24.8133333,125.72 L24.8133333,125.72 Z" id="Shape"></path>
                        <path d="M27.17,24.3666667 C25.8666667,23.0633333 23.76,23.0633333 22.4566667,24.3666667 C21.1533333,25.67 21.1533333,27.7766667 22.4566667,29.08 L24.8133333,31.4366667 C25.4633333,32.0866667 26.3166667,32.4133333 27.17,32.4133333 C28.0233333,32.4133333 28.8766667,32.0866667 29.5266667,31.4366667 C30.83,30.1333333 30.83,28.0266667 29.5266667,26.7233333 L27.17,24.3666667 L27.17,24.3666667 Z" id="Shape"></path>
                    </g>
                    <path d="M86.6666667,99.9133333 L60,99.9133333 C58.16,99.9133333 56.6666667,98.4233333 56.6666667,96.58 C56.6666667,94.7366667 58.16,93.2466667 60,93.2466667 L86.6666667,93.2466667 C88.5066667,93.2466667 90,94.7366667 90,96.58 C90,98.4233333 88.5066667,99.9133333 86.6666667,99.9133333 L86.6666667,99.9133333 Z" id="Shape" fill="#545E73"></path>
                    <path d="M96.6666667,89.9133333 C94.8266667,89.9133333 93.3333333,88.4233333 93.3333333,86.58 L93.3333333,49.9133333 C93.3333333,48.07 94.8266667,46.58 96.6666667,46.58 C98.5066667,46.58 100,48.07 100,49.9133333 L100,86.58 C100,88.42 98.5066667,89.9133333 96.6666667,89.9133333 L96.6666667,89.9133333 Z" id="Shape" fill="#545E73"></path>
                    <path d="M96.6666667,109.913333 C89.3133333,109.913333 83.3333333,103.933333 83.3333333,96.58 C83.3333333,89.2266667 89.3133333,83.2466667 96.6666667,83.2466667 C104.02,83.2466667 110,89.2266667 110,96.58 C110,103.933333 104.02,109.913333 96.6666667,109.913333 L96.6666667,109.913333 Z M96.6666667,89.9133333 C92.99,89.9133333 90,92.9033333 90,96.58 C90,100.256667 92.99,103.246667 96.6666667,103.246667 C100.343333,103.246667 103.333333,100.256667 103.333333,96.58 C103.333333,92.9033333 100.343333,89.9133333 96.6666667,89.9133333 L96.6666667,89.9133333 Z" id="Shape" fill="#545E73"></path>
                </g>
                <g id="sync" transform="translate(116.666667, 111.333333)">
                    <ellipse id="Oval" fill="#26B999" cx="41.3" cy="42.3166667" rx="40" ry="40"></ellipse>
                    <path d="M61.947619,47.6678788 C59.9952381,57.7721212 51.4666667,65.1054545 41.6642857,65.1054545 C33.6857143,65.1054545 26.552381,60.2424242 23.1190476,52.9842424 L33.4157387,52.9842426 L33.4157387,48.1357576 L21.4285714,48.1357576 L19.047619,48.1357576 L16.6666667,48.1357576 L16.6666667,67.529697 L21.4285714,67.529697 L21.4285714,59.430303 C26.1333333,65.8715152 33.5380952,69.9539394 41.6666667,69.9539394 C53.7333333,69.9539394 64.2309524,60.9745455 66.6214286,48.6036364 C66.8738095,47.2921212 66.0357143,46.0169697 64.7452381,45.7575758 C63.4357143,45.4836364 62.202381,46.3539394 61.947619,47.6678788 Z" id="Shape" fill="#FFFFFF"></path>
                    <path d="M61.9047619,26.2327273 C57.2,19.7915152 49.7952381,15.7090909 41.6666667,15.7090909 C29.6,15.7090909 19.102381,24.6884848 16.7119048,37.0593939 C16.4595238,38.3733333 17.297619,39.6484848 18.5880952,39.9054545 C19.897619,40.1793939 21.1309524,39.3090909 21.3857143,37.9951515 C23.3380952,27.8909091 31.8666667,20.5575758 41.6690476,20.5575758 C49.647619,20.5575758 56.7809524,25.4206061 60.2142857,32.6787879 L49.9894196,32.6787876 L49.9894196,37.5272726 L61.9047619,37.5272727 L64.2857143,37.5272727 L66.6666667,37.5272727 L66.6666667,18.1333333 L61.9047619,18.1333333 L61.9047619,26.2327273 Z" id="Shape" fill="#FFFFFF"></path>
                </g>
            </svg>
            <div class="item-description">
                <h3>Realtime Update</h3>
                Update in Firebase Admin will update Firebase. Or update in linked application will update in the Tool too. Reatime.
            </div>
        </div>
        <div class="item">
            <svg width="512px" height="390px" viewBox="0 0 512 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M485.517,0.793 L26.483,0.793 C11.857,0.793 0,12.65 0,27.276 L0,362.724 C0,377.35 11.857,389.207 26.483,389.207 L485.517,389.207 C500.143,389.207 512,377.35 512,362.724 L512,27.276 C512,12.65 500.143,0.793 485.517,0.793 L485.517,0.793 Z M150.069,18.448 L158.897,18.448 C163.772,18.448 167.725,22.401 167.725,27.276 C167.725,32.151 163.772,36.104 158.897,36.104 L150.069,36.104 C145.194,36.104 141.241,32.151 141.241,27.276 C141.241,22.401 145.194,18.448 150.069,18.448 L150.069,18.448 Z M114.759,18.448 L123.587,18.448 C128.462,18.448 132.415,22.401 132.415,27.276 C132.415,32.151 128.462,36.104 123.587,36.104 L114.759,36.104 C109.884,36.104 105.931,32.151 105.931,27.276 C105.931,22.401 109.884,18.448 114.759,18.448 L114.759,18.448 Z M79.448,18.448 C84.323,18.448 88.276,22.401 88.276,27.276 C88.276,32.151 84.323,36.104 79.448,36.104 C74.573,36.104 70.62,32.151 70.62,27.276 C70.621,22.401 74.573,18.448 79.448,18.448 L79.448,18.448 Z M52.966,18.448 C57.841,18.448 61.794,22.401 61.794,27.276 C61.794,32.151 57.841,36.104 52.966,36.104 C48.091,36.104 44.138,32.151 44.138,27.276 C44.138,22.401 48.09,18.448 52.966,18.448 L52.966,18.448 Z M26.483,18.448 C31.358,18.448 35.311,22.401 35.311,27.276 C35.311,32.151 31.358,36.104 26.483,36.104 C21.608,36.104 17.655,32.151 17.655,27.276 C17.655,22.401 21.608,18.448 26.483,18.448 L26.483,18.448 Z M494.345,106.724 L494.345,362.724 C494.345,367.599 490.392,371.552 485.517,371.552 L26.483,371.552 C21.608,371.552 17.655,367.599 17.655,362.724 L17.655,106.724 L17.655,62.586 C17.655,57.711 21.608,53.758 26.483,53.758 L485.517,53.758 C490.392,53.758 494.345,57.711 494.345,62.586 L494.345,106.724 L494.345,106.724 Z M485.517,36.103 L476.689,36.103 C471.814,36.103 467.861,32.15 467.861,27.275 C467.861,22.4 471.814,18.447 476.689,18.447 L485.517,18.447 C490.392,18.447 494.345,22.4 494.345,27.275 C494.345,32.151 490.392,36.103 485.517,36.103 L485.517,36.103 Z" id="Shape" fill="#D2DCF0"></path>
                <circle id="Oval" fill="#FF6469" cx="26.483" cy="27.276" r="8.828"></circle>
                <circle id="Oval" fill="#FFE169" cx="52.966" cy="27.276" r="8.828"></circle>
                <circle id="Oval" fill="#87E1AA" cx="79.448" cy="27.276" r="8.828"></circle>
                <rect id="Rectangle" fill="#DEE3ED" x="44" y="78" width="101" height="267" rx="11"></rect>
                <rect id="Rectangle" fill="#C3B4FA" x="44" y="78" width="101" height="30" rx="11"></rect>
                <rect id="Rectangle" fill="#FF6469" x="172" y="78" width="296" height="30" rx="11"></rect>
                <rect id="Rectangle" fill="#D2555F" x="391" y="78" width="77" height="30" rx="11"></rect>
                <rect id="Rectangle" fill="#DEE3ED" x="172" y="125" width="296" height="221" rx="11"></rect>
                <rect id="Rectangle" fill="#91E6BE" x="172" y="125" width="296" height="30" rx="11"></rect>
            </svg>
            <div class="item-description">
                <h3>Elegant User Interface</h3>
                Software comes with Minimalistic UI. No redundant elements or styles. Just what you need with simple layout &amp; style.
            </div>
        </div>
    </div>
</section>
<section id="download">
    <h2>Download Latest Stable Release</h2>
    <div class="download-details details">
        <div class="item">
            <svg width="306px" height="305px" viewBox="0 0 306 305" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M140.999,25.775 L140.999,142.499 C140.999,143.88 142.118,144.999 143.499,144.999 L303.46,144.999 C304.841,144.999 305.96,143.88 305.96,142.499 L305.96,2.5 C305.96,1.774 305.645,1.084 305.096,0.609 C304.548,0.134 303.821,-0.078 303.1,0.026 L143.139,23.301 C141.91,23.48 140.999,24.534 140.999,25.775 L140.999,25.775 Z" id="XMLID_109_" fill="#0078d6"></path>
                <path d="M123.501,279.948 C124.102,279.948 124.687,279.732 125.145,279.332 C125.689,278.857 126.001,278.17 126.001,277.448 L126.001,162.5 C126.001,161.119 124.882,160 123.501,160 L3.592,160 C2.929,160 2.293,160.263 1.824,160.732 C1.355,161.201 1.092,161.837 1.092,162.5 L1.098,261.015 C1.098,262.265 2.021,263.322 3.258,263.492 L123.161,279.926 C123.274,279.94 123.388,279.948 123.501,279.948 L123.501,279.948 Z" id="XMLID_110_" fill="#0078d6"></path>
                <path d="M3.609,144.999 L123.501,144.999 C124.882,144.999 126.001,143.88 126.001,142.499 L126.001,28.681 C126.001,27.959 125.689,27.273 125.146,26.798 C124.603,26.323 123.885,26.105 123.165,26.204 L3.164,42.5 C1.923,42.669 0.999,43.728 1,44.98 L1.109,142.501 C1.111,143.881 2.23,144.999 3.609,144.999 L3.609,144.999 Z" id="XMLID_138_" fill="#0078d6"></path>
                <path d="M303.46,305 C304.059,305 304.642,304.785 305.1,304.387 C305.646,303.912 305.96,303.224 305.96,302.5 L306,162.5 C306,161.837 305.737,161.201 305.268,160.732 C304.799,160.263 304.163,160 303.5,160 L143.499,160 C142.118,160 140.999,161.119 140.999,162.5 L140.999,279.996 C140.999,281.242 141.917,282.298 143.15,282.472 L303.111,304.976 C303.228,304.992 303.344,305 303.46,305 L303.46,305 Z" id="XMLID_169_" fill="#0078d6"></path>
            </svg>
            <a onclick="downloadFile(this); return false;" href="download.php?os=windows" class="button">
                <span>Windows</span>
                <div class="button-details">Version 1.0.1</div>
            </a>
        </div>
        <div class="item">
            <svg width="50px" height="60px" viewBox="0 0 50 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M36.2342105,0 L36.6605263,0 C37.0026316,4.22631579 35.3894737,7.38421053 33.4289474,9.67105263 C31.5052632,11.9421053 28.8710526,14.1447368 24.6105263,13.8105263 C24.3263158,9.64473684 25.9421053,6.72105263 27.9,4.43947368 C29.7157895,2.31315789 33.0447368,0.421052632 36.2342105,0 L36.2342105,0 Z" id="Shape" fill="#aaa"></path>
                <path d="M49.1315789,43.9894737 L49.1315789,44.1078947 C47.9342105,47.7342105 46.2263158,50.8421053 44.1421053,53.7263158 C42.2394737,56.3447368 39.9078947,59.8684211 35.7447368,59.8684211 C32.1473684,59.8684211 29.7578947,57.5552632 26.0710526,57.4921053 C22.1710526,57.4289474 20.0263158,59.4263158 16.4605263,59.9289474 L15.2447368,59.9289474 C12.6263158,59.55 10.5131579,57.4763158 8.97368421,55.6078947 C4.43421053,50.0868421 0.926315789,42.9552632 0.273684211,33.8289474 L0.273684211,31.1473684 C0.55,24.6157895 3.72368421,19.3052632 7.94210526,16.7315789 C10.1684211,15.3631579 13.2289474,14.1973684 16.6368421,14.7184211 C18.0973684,14.9447368 19.5894737,15.4447368 20.8973684,15.9394737 C22.1368421,16.4157895 23.6868421,17.2605263 25.1552632,17.2157895 C26.15,17.1868421 27.1394737,16.6684211 28.1421053,16.3026316 C31.0789474,15.2421053 33.9578947,14.0263158 37.7526316,14.5973684 C42.3131579,15.2868421 45.55,17.3131579 47.55,20.4394737 C43.6921053,22.8947368 40.6421053,26.5947368 41.1631579,32.9131579 C41.6263158,38.6526316 44.9631579,42.0105263 49.1315789,43.9894737 L49.1315789,43.9894737 Z" id="Shape" fill="#aaa"></path>
            </svg>
            <a onclick="downloadFile(this); return false;" href="download.php?os=mac" class="button">
                <span>Mac</span>
                <div class="button-details">Version 1.0.1</div>
            </a>
        </div>
        <div class="item">
            <svg width="431px" height="507px" viewBox="0 0 431 507" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M419.698,413.044 C406.346,407.565 395.345,398.937 396.143,382.413 C396.92,365.911 384.344,354.975 384.344,354.975 C384.344,354.975 395.345,318.844 385.121,289.012 C374.918,259.136 341.16,211.271 315.253,175.161 C289.39,139.03 311.349,97.398 287.815,44.032 C264.238,-9.334 203.02,-6.206 170.039,16.572 C137.036,39.308 147.239,95.823 148.792,122.571 C150.367,149.232 149.504,168.236 146.462,175.139 C143.356,182.042 122.13,207.366 107.98,228.548 C93.851,249.731 83.648,293.713 73.402,311.768 C63.199,329.823 70.274,346.303 70.274,346.303 C70.274,346.303 63.199,348.633 57.698,360.475 C52.197,372.209 41.218,377.71 21.589,381.593 C1.96,385.519 1.96,398.138 6.662,412.267 C11.386,426.374 6.684,434.269 1.183,452.281 C-4.318,470.293 23.164,475.836 49.847,478.921 C76.552,482.092 106.384,499.37 131.536,502.498 C156.623,505.647 164.496,485.241 164.496,485.241 C164.496,485.241 192.754,478.921 222.565,478.187 C252.419,477.389 280.634,484.464 280.634,484.464 C280.634,484.464 286.135,497.018 296.338,502.497 C306.563,507.998 328.543,508.796 342.672,493.912 C356.822,478.963 394.507,460.154 415.689,448.355 C436.933,436.535 433.05,418.502 419.698,413.044 L419.698,413.044 Z M235.958,66.812 C249.418,66.812 260.29,80.164 260.29,96.623 C260.29,108.314 254.833,118.388 246.873,123.284 C244.845,122.4 242.71,121.494 240.445,120.523 C245.234,118.15 248.642,112.046 248.642,104.927 C248.642,95.652 242.904,88.123 235.807,88.123 C228.797,88.123 223.037,95.673 223.037,104.927 C223.037,108.357 223.857,111.657 225.259,114.353 C221.074,112.692 217.213,111.139 214.193,109.996 C212.554,105.984 211.626,101.454 211.626,96.622 C211.626,80.164 222.498,66.812 235.958,66.812 L235.958,66.812 Z M234.211,129.669 C240.941,131.999 248.426,136.378 247.65,140.713 C246.852,145.07 243.314,145.07 234.211,150.636 C225.087,156.158 205.328,168.41 199.007,169.208 C192.644,170.006 189.106,166.447 182.376,162.111 C175.646,157.754 162.984,147.421 166.176,141.921 C166.176,141.921 176.034,134.371 180.37,130.424 C184.727,126.455 195.815,116.985 202.545,118.215 C209.275,119.358 227.481,127.296 234.211,129.669 L234.211,129.669 Z M173.532,71.536 C184.145,71.536 192.773,84.176 192.773,99.772 C192.773,102.641 192.493,105.294 191.953,107.861 C189.365,108.745 186.733,110.169 184.188,112.326 C182.894,113.383 181.75,114.375 180.65,115.367 C182.333,112.218 183.001,107.731 182.246,103.007 C180.822,94.487 175.149,88.274 169.519,89.159 C163.911,90.13 160.524,97.787 161.948,106.351 C163.393,114.915 169.045,121.127 174.653,120.199 C174.977,120.134 175.279,120.048 175.602,119.94 C172.863,122.572 170.339,124.837 167.772,126.756 C160.007,123.154 154.312,112.433 154.312,99.749 C154.313,84.155 162.919,71.536 173.532,71.536 L173.532,71.536 Z M152.803,468.244 C150.301,479.504 137.121,487.679 137.121,487.679 C125.171,491.432 91.952,477.023 76.895,470.703 C61.86,464.469 23.572,462.528 18.546,456.962 C13.563,451.267 21.048,438.735 22.968,426.849 C24.823,414.877 19.215,407.392 21.07,399.217 C22.968,391.085 47.429,391.085 56.813,385.455 C66.239,379.782 68.116,363.474 75.644,359.096 C83.172,354.674 96.956,370.356 102.607,379.178 C108.237,387.914 129.57,425.577 138.35,434.982 C147.151,444.387 155.305,456.984 152.803,468.244 L152.803,468.244 Z M291.654,358.837 C289.389,369.903 289.389,409.895 289.389,409.895 C289.389,409.895 265.057,443.61 227.33,449.132 C189.646,454.654 170.793,450.685 170.793,450.685 L149.61,426.375 C149.61,426.375 166.068,423.981 163.739,407.501 C161.366,391.021 113.501,368.242 104.851,347.815 C96.244,327.431 103.298,292.853 114.299,275.574 C125.279,258.317 132.311,220.655 143.312,208.057 C154.313,195.546 162.92,168.841 158.994,157.042 C158.994,157.042 182.549,185.321 199.008,180.64 C215.488,175.916 252.439,148.413 257.896,153.159 C263.375,157.883 310.486,261.487 315.166,294.469 C319.89,327.429 312.017,352.538 312.017,352.538 C312.017,352.538 293.983,347.836 291.654,358.837 L291.654,358.837 Z M412.148,432.803 C404.814,439.533 364.002,456.013 351.771,468.869 C339.605,481.617 323.707,491.993 313.979,488.973 C304.186,485.888 295.665,472.493 299.936,452.95 C304.185,433.472 307.874,412.117 307.27,399.907 C306.666,387.698 304.185,371.196 307.27,368.759 C310.312,366.386 315.165,367.573 315.165,367.573 C315.165,367.573 312.771,390.718 326.77,396.866 C340.769,402.906 360.917,394.428 367.021,388.281 C373.147,382.22 377.418,373.074 377.418,373.074 C377.418,373.074 383.501,376.159 382.897,385.887 C382.293,395.637 387.146,409.701 396.336,414.555 C405.461,419.365 419.482,426.116 412.148,432.803 L412.148,432.803 Z" id="Shape" fill="#333"></path>
            </svg>
            <a onclick="downloadFile(this); return false;" href="download.php?os=linux" class="button">
                <span>Linux</span>
                <div class="button-details">Version 1.0.0</div>
            </a>
        </div>
    </div>
    <div class="download-count">
        <div class="highlight"><span id="count"><?php
                $c = @file_get_contents('count.txt');
                if($c) echo $c;
                else echo 428;
                ?></span> Downloads</div> and counting..
    </div>
    <div class="releases-link">
        <a href="releases">Other Versions &amp; Platforms</a>
    </div>
    <div class="share">
        <div class="buttons">
            <a href="#" class="button" onclick="socialShare('facebook'); return false;">
                <svg width="202px" height="431px" viewBox="0 0 202 431" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M44.081,83.3 L44.081,142.518 L0.696,142.518 L0.696,214.93 L44.081,214.93 L44.081,430.113 L133.203,430.113 L133.203,214.936 L193.008,214.936 C193.008,214.936 198.609,180.215 201.324,142.251 L133.54,142.251 L133.54,92.74 C133.54,85.34 143.257,75.386 152.861,75.386 L201.418,75.386 L201.418,0.001 L135.397,0.001 C41.878,-0.004 44.081,72.48 44.081,83.3 L44.081,83.3 Z" fill="#fff"></path>
                </svg>
            </a>
            <a href="#" class="button google" onclick="socialShare('google'); return false;">
                <svg width="74px" height="47px" viewBox="0 0 74 47" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M0.531,23.608 C0.078,11.681 10.525,0.659 22.464,0.516 C28.549,-0.003 34.469,2.36 39.074,6.214 C37.185,8.291 35.263,10.344 33.21,12.266 C29.156,9.803 24.275,7.926 19.537,9.593 C11.895,11.769 7.267,20.792 10.095,28.268 C12.437,36.076 21.934,40.361 29.377,37.081 C33.231,35.701 35.772,32.145 36.887,28.324 C32.47,28.236 28.052,28.291 23.635,28.169 C23.624,25.541 23.613,22.923 23.624,20.295 C30.99,20.284 38.367,20.262 45.744,20.328 C46.197,26.767 45.247,33.658 41.061,38.826 C35.329,46.203 24.739,48.368 16.124,45.474 C6.981,42.471 0.332,33.26 0.531,23.608 L0.531,23.608 Z" fill="#FFFFFF"></path>
                    <path d="M60.102,13.668 L66.672,13.668 C66.684,15.866 66.705,18.075 66.717,20.272 C68.914,20.294 71.123,20.305 73.321,20.316 L73.321,26.898 C71.124,26.909 68.915,26.92 66.717,26.931 C66.695,29.14 66.684,31.337 66.672,33.546 C64.475,33.535 62.276,33.546 60.09,33.546 C60.069,31.337 60.069,29.14 60.046,26.942 C57.849,26.919 55.64,26.909 53.442,26.897 L53.442,20.315 C55.64,20.304 57.838,20.293 60.046,20.271 C60.057,18.075 60.079,15.866 60.102,13.668 L60.102,13.668 Z" fill="#FFFFFF"></path>
                </svg>
            </a>
            <a href="#" class="button twitter" onclick="socialShare('twitter'); return false;">
                <svg width="66px" height="54px" viewBox="0 0 66 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M65.461,6.316 C63.057,7.382 60.471,8.103 57.759,8.425 C60.528,6.766 62.653,4.141 63.656,1.008 C61.065,2.545 58.194,3.66 55.141,4.261 C52.695,1.656 49.21,0.028 45.351,0.028 C37.947,0.028 31.942,6.033 31.942,13.437 C31.942,14.488 32.061,15.511 32.291,16.493 C21.147,15.934 11.266,10.596 4.652,2.481 C3.498,4.461 2.836,6.766 2.836,9.223 C2.836,13.874 5.205,17.98 8.801,20.384 C6.604,20.315 4.535,19.712 2.728,18.705 C2.727,18.762 2.727,18.819 2.727,18.875 C2.727,25.372 7.351,30.791 13.484,32.022 C12.36,32.33 11.173,32.493 9.952,32.493 C9.086,32.493 8.247,32.41 7.429,32.254 C9.135,37.58 14.086,41.457 19.955,41.566 C15.365,45.163 9.584,47.306 3.3,47.306 C2.22,47.306 1.15,47.243 0.103,47.118 C6.034,50.924 13.084,53.143 20.656,53.143 C45.32,53.143 58.808,32.711 58.808,14.99 C58.808,14.409 58.795,13.83 58.769,13.256 C61.391,11.366 63.664,9.005 65.461,6.316 L65.461,6.316 L65.461,6.316 Z" fill="#FFFFFF"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<footer>
    <ul>
        <li><a onclick="smoothScroll('download')">Download</a></li>
        <li><a href="//github.com/codefoxes/firebase-admin" target="_blank">GitHub</a></li>
        <li><a href="changelog.html">Changelog</a></li>
    </ul>
    <div class="copyright">
        &copy; 2016 &middot; Codefoxes &middot; All Rights Reserved
    </div>
</footer>
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
    section h2{
        text-align: center;
        font-size: 32px;
        font-weight: 300;
        padding-top: 80px;
    }
    .details{
        color: rgba(51, 51, 51, 0.8);
        font-weight: 300;
        font-size: 18px;
    }
    #features{
        background-color: #fdfdfd;
        height: initial;
    }
    .features-details, .download-details{
        display: flex;
        padding: 30px 20px;
        flex-wrap: wrap;
        align-items: center;
        flex-direction: column;
    }
    .features-details .item, .download-details .item{
        line-height: 1.6;
        box-sizing: border-box;
        margin-bottom: 20px;
    }
    .features-details svg{
        width: 100px;
        height: 80px;
        max-width: 100%;
    }
    .features-details h3{
        margin: 15px 0 5px;
    }
    .item-description{
        max-width: 500px;
        margin: auto;
    }
    #download{
        height: initial;
    }
    .item .button{
        background: #4dd467;
        border: 1px solid #3cb854;
        color: #fff;
        border-radius: 8px;
        padding: 12px 40px;
        font-weight: 400;
        display: block;
        margin: auto;
    }
    .download-details svg{
        width: 50px;
        height: 50px;
    }
    .download-details .button{
        max-width: 150px;
        line-height: 18px;
        margin-top: 20px;
    }
    .download-details .button.current{
        box-shadow: 0 0 10px rgba(255, 177, 0, 0.38);
    }
    .button-details{
        font-size: 12px;
        opacity: .8;
        letter-spacing: 1px;
    }
    .download-count {
        font-weight: 300;
    }
    .highlight {
        display: inline;
        font-size: 24px;
        padding-right: 5px;
    }
    .releases-link{
        font-weight: 300;
        padding-top: 3%;
        color: #666;
    }
    .share{
        padding-top: 5%;
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
    window.onscroll = function() {
        var header = document.getElementsByTagName('header')[0];
        if (document.body.scrollTop > 50) {
            header.classList.add('scroll');
        } else {
            header.classList.remove('scroll');
        }
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

    var os = "Unknown";
    if (navigator.userAgent.indexOf("Windows") != -1) os="windows";
    if (navigator.userAgent.indexOf("Mac")!=-1) os="mac";
    if (navigator.userAgent.indexOf("Linux")!=-1) os="linux";
    var but = document.querySelectorAll('[href="download.php?os='+os+'"]')[0];
    but.classList.add('current');
</script>
</html>
