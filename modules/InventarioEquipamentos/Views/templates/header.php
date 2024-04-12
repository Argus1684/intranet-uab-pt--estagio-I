<!DOCTYPE html>
<html lang="<?= service('language')->getLocale() ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Intranet da UAb</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="icon" href="<?= base_url('favicons/favicon_512x512-150x150.png') ?>" sizes="32x32">
    <link rel="icon" href="<?= base_url('favicons/favicon_512x512.png') ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?= base_url('favicons/favicon_512x512.png') ?>">
    <meta name="msapplication-TileImage" content="<?= base_url('favicons/favicon_512x512.png') ?>">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;

            display: flex;
            flex-direction: row;
            align-items: center;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:is(:hover,:focus),
        header li.menu-item.active a {
            color: rgba(221, 72, 20, 1);
        }
        header li.menu-item a:is(:hover,:focus) {
            background-color: rgba(221, 72, 20, .2);
        }
        header .logo {
            text-align: left;
            flex-grow: 1;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header .logo{
                flex-grow: 0;
                width: calc(100% - 88px);
            }

            header ul {
                padding: 0;
                align-items: stretch;
                flex-wrap: wrap;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: 100%;
                flex-grow: 1;
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>


<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <svg id="logo" class="logo img-fluid" style="width: 100%; max-width: 236px; height: auto;" role="img" aria-labelledby="logo-desc" xmlns="http://www.w3.org/2000/svg" version="1.1" width="236" height="61"><desc id="logo-desc">Universidade Aberta</desc><symbol id="logo-inner-contents" viewBox="0 0 235.9576 60.98"><polygon style="fill:currentColor;" points="266.01,78.04 222.98,78.04 222.98,53.7 266.01,53.7 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:none;stroke:currentColor;stroke-width:0.5552;stroke-miterlimit:3.8637;" d="m 228.42,11.59 h 7.26 V 35.6 h -7.26 z m -50.39,0 h 7.26 v 24.06 h -7.26 z m 7.26,24.04 h 43.12 v 7.35 h -43.12 z"></path><path style="fill:currentColor;" d="m 91.52,0.74 v 4.32 c 0,1.21 -0.43,2 -1.37,2.51 -0.48,0.25 -1.02,0.39 -1.58,0.39 -1.64,0 -2.86,-1.09 -2.86,-2.57 V 0.75 H 84.86 V 0.33 h 2.7 v 0.42 h -0.85 v 4.29 c 0,1.37 0.8,2.27 2.06,2.27 1.29,0 2.17,-0.92 2.17,-2.28 V 0.75 H 90.09 V 0.33 h 2.28 v 0.42 h -0.85 z"></path><polygon style="fill:currentColor;" points="137.21,50.31 132.85,44.33 132.85,49.77 133.72,49.77 133.72,50.19 131.43,50.19 131.43,49.77 132.29,49.77 132.29,43.56 131.98,43.13 131.2,43.13 131.2,42.71 132.84,42.71 137,48.4 137,43.13 136.13,43.13 136.13,42.71 138.41,42.71 138.41,43.13 137.56,43.13 137.56,50.31 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="140.6,49.77 140.6,43.13 139.75,43.13 139.75,42.71 142.45,42.71 142.45,43.13 141.6,43.13 141.6,49.77 142.45,49.77 142.45,50.19 139.75,50.19 139.75,49.77 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="146.83,50.38 143.97,43.13 143.3,43.13 143.3,42.71 146.11,42.71 146.11,43.13 145.05,43.13 147.25,48.69 149.42,43.13 148.68,43.13 148.68,42.71 150.62,42.71 150.62,43.13 150.05,43.13 147.21,50.38 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="152.32,49.77 152.32,43.13 151.46,43.13 151.46,42.71 155.99,42.71 155.99,42.39 156.51,42.39 156.51,44.19 156,44.19 156,43.23 153.31,43.23 153.31,46.13 155.46,46.13 155.46,45.28 155.98,45.27 155.98,47.5 155.46,47.51 155.46,46.64 153.31,46.64 153.31,49.68 156.1,49.68 156.1,48.68 156.63,48.68 156.63,50.19 151.46,50.19 151.46,49.77 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 125.97,7.8 c -0.67,0 -0.79,-0.07 -1.17,-0.67 l -1.69,-2.69 h -0.89 v 2.94 h 0.85 V 7.8 h -2.7 V 7.38 h 0.85 V 0.73 h -0.85 V 0.31 h 3.15 c 1.1,0 1.72,0.31 2.06,1.01 0.15,0.31 0.23,0.65 0.23,1.01 0,1.1 -0.61,1.8 -1.7,1.96 l 1.63,2.52 c 0.27,0.42 0.45,0.56 0.74,0.56 h 0.44 V 7.8 Z m -2.68,-6.96 h -1.06 v 3.08 h 1.09 c 0.86,0 1.46,-0.64 1.46,-1.56 -0.01,-0.98 -0.54,-1.52 -1.49,-1.52 z"></path><path style="fill:currentColor;" d="m 130.3,7.95 c -0.71,0 -1.18,-0.15 -1.75,-0.51 V 7.9 h -0.53 V 5.86 h 0.53 v 0.9 c 0.69,0.47 1,0.58 1.5,0.58 0.91,0 1.52,-0.48 1.52,-1.19 0,-0.65 -0.44,-1.12 -1.67,-1.76 -1.43,-0.75 -1.92,-1.32 -1.92,-2.24 0,-1.12 0.95,-1.96 2.23,-1.96 0.57,0 0.99,0.1 1.35,0.32 V 0.1 h 0.52 v 1.94 h -0.52 V 1.23 c -0.58,-0.39 -0.86,-0.5 -1.32,-0.5 -0.77,0 -1.27,0.47 -1.27,1.17 0,0.58 0.33,0.91 1.75,1.72 1.42,0.82 1.83,1.32 1.83,2.25 0.01,1.17 -0.97,2.08 -2.25,2.08 z"></path><polygon style="fill:currentColor;" points="172.7,49.77 172.7,43.13 171.85,43.13 171.85,42.71 174.54,42.71 174.54,43.13 173.69,43.13 173.69,49.77 174.54,49.77 174.54,50.19 171.85,50.19 171.85,49.77 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 141.72,7.8 h -3.33 V 7.38 h 0.85 V 0.73 h -0.85 V 0.31 h 3.34 c 2.04,0 3.71,1.68 3.71,3.73 0,2.1 -1.63,3.76 -3.72,3.76 z m -0.1,-6.91 h -1.38 v 6.34 h 1.36 c 1.55,0 2.73,-1.37 2.72,-3.18 0,-1.74 -1.21,-3.16 -2.7,-3.16 z"></path><path style="fill:currentColor;" d="M 150.95,7.8 V 7.38 h 0.91 l -0.79,-2.04 -2.9,-0.01 -0.83,2.04 h 0.94 V 7.8 h -2.17 V 7.37 h 0.59 l 2.95,-7.29 h 0.41 l 2.84,7.29 h 0.65 V 7.8 Z m -1.29,-6.19 -1.28,3.19 h 2.5 z"></path><path style="fill:currentColor;" d="M 157.73,7.8 H 154.4 V 7.38 h 0.85 V 0.73 H 154.4 V 0.31 h 3.34 c 2.04,0 3.71,1.68 3.71,3.73 0,2.1 -1.63,3.76 -3.72,3.76 z m -0.1,-6.91 h -1.38 v 6.34 h 1.36 c 1.55,0 2.73,-1.37 2.72,-3.18 0,-1.74 -1.2,-3.16 -2.7,-3.16 z"></path><polygon style="fill:currentColor;" points="201.32,49.77 201.32,43.13 200.47,43.13 200.47,42.71 205,42.71 205,42.39 205.52,42.39 205.52,44.19 205.01,44.19 205.01,43.23 202.32,43.23 202.32,46.13 204.46,46.13 204.46,45.28 204.98,45.27 204.98,47.5 204.46,47.51 204.46,46.64 202.32,46.64 202.32,49.68 205.11,49.68 205.11,48.68 205.63,48.68 205.63,50.19 200.47,50.19 200.47,49.77 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 20.08,43.22 v -1.74 h 3.77 L 20.56,33.01 8.52,32.96 5.08,41.43 h 3.91 v 1.79 H 0 V 41.43 H 2.45 L 14.68,11.17 h 1.69 l 11.76,30.26 h 2.68 v 1.79 z M 14.72,17.53 9.4,30.75 h 10.35 z"></path><path style="fill:currentColor;" d="m 42.2,43.83 c -2.07,0 -3.81,-0.28 -6.59,-0.99 V 11.64 H 31.52 V 10.37 L 38.3,8.53 h 0.85 v 32.52 c 1.55,0.61 2.21,0.8 3.39,0.8 4.61,0 7.86,-4 7.86,-9.65 0,-5.13 -2.3,-8.33 -6.07,-8.33 H 40.9 v -1.55 c 2.4,-0.8 3.53,-0.99 4.8,-0.99 5.13,0 8.75,4.38 8.75,10.54 -0.02,7.21 -4.86,11.96 -12.25,11.96 z"></path><polygon style="fill:currentColor;" points="98.46,83.87 98.46,56.29 94.94,56.29 94.94,54.55 113.71,54.55 113.71,53.23 115.87,53.23 115.87,60.72 113.76,60.72 113.76,56.72 102.61,56.72 102.61,68.76 111.5,68.76 111.5,65.23 113.66,65.19 113.66,74.46 111.5,74.5 111.5,70.88 102.61,70.88 102.61,83.49 114.18,83.49 114.18,79.35 116.35,79.35 116.35,85.61 94.94,85.61 94.94,83.87 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 107.79,43.22 c -2.78,0 -3.29,-0.28 -4.85,-2.78 L 95.93,29.29 h -3.67 v 12.19 h 3.53 v 1.74 h -11.2 v -1.74 h 3.53 V 13.9 h -3.53 v -1.74 h 13.08 c 4.56,0 7.15,1.27 8.56,4.19 0.61,1.27 0.94,2.68 0.94,4.19 0,4.56 -2.54,7.48 -7.06,8.14 l 6.78,10.45 c 1.13,1.74 1.88,2.31 3.06,2.31 h 1.84 v 1.79 h -4 z M 96.69,14.33 h -4.42 v 12.8 h 4.52 c 3.58,0 6.07,-2.64 6.07,-6.49 -0.01,-4.05 -2.22,-6.31 -6.17,-6.31 z"></path><polygon style="fill:currentColor;" points="165.15,56.91 165.15,83.87 169.86,83.87 169.86,85.61 156.3,85.61 156.3,83.87 161.01,83.87 161.01,56.91 151.6,56.91 151.6,60.67 149.34,60.67 149.34,53.23 151.6,53.23 151.6,54.55 174.56,54.55 174.56,53.23 176.82,53.23 176.82,60.67 174.56,60.67 174.56,56.91 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 157.4,43.22 v -1.74 h 3.76 l -3.29,-8.47 -12.05,-0.05 -3.44,8.47 h 3.91 v 1.79 h -8.99 v -1.79 h 2.45 l 12.23,-30.26 h 1.69 l 11.76,30.26 h 2.68 v 1.79 z m -5.37,-25.69 -5.32,13.22 h 10.35 z"></path><polygon style="fill:currentColor;" points="126.44,98.67 126.46,98.67 128.49,92.03 129.61,92.03 131.57,98.65 131.6,98.65 133.55,92.03 134.82,92.03 132.2,100.23 131,100.23 129.04,93.61 129.01,93.61 127.01,100.23 125.81,100.23 123.25,92.03 124.52,92.03 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="138.66,98.67 138.68,98.67 140.71,92.03 141.83,92.03 143.78,98.65 143.82,98.65 145.77,92.03 147.04,92.03 144.42,100.23 143.22,100.23 141.26,93.61 141.23,93.61 139.23,100.23 138.02,100.23 135.47,92.03 136.74,92.03 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="150.88,98.67 150.9,98.67 152.93,92.03 154.05,92.03 156,98.65 156.04,98.65 157.99,92.03 159.26,92.03 156.64,100.23 155.43,100.23 153.48,93.61 153.45,93.61 151.45,100.23 150.25,100.23 147.69,92.03 148.96,92.03 " transform="translate(-37.68,-42.39)"></polygon><polygon style="fill:currentColor;" points="161.14,100.2 159.82,100.2 159.82,98.29 161.14,98.29 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 125.71,55.28 v -5.65 h 1.22 v 5.19 c 0,1.45 0.7,2.08 1.79,2.08 1.22,0 2.3,-0.93 2.3,-2.47 v -4.8 h 1.2 v 8.17 h -1.17 v -1.42 h -0.03 c -0.57,1.07 -1.59,1.61 -2.69,1.61 -1.74,0.01 -2.62,-1.16 -2.62,-2.71 z"></path><path style="fill:currentColor;" d="m 134.35,55.61 c 0,-1.77 1.61,-2.46 3.03,-2.46 h 2.33 v -1.14 c 0,-1.17 -0.78,-1.59 -1.95,-1.59 -0.96,0 -1.94,0.34 -1.94,1.27 v 0.28 h -1.11 v -0.24 c 0,-1.66 1.56,-2.26 3.09,-2.26 1.64,0 3.12,0.57 3.12,2.41 v 3.95 c 0,0.45 0.06,1.66 0.11,1.99 h -1.19 c -0.03,-0.24 -0.06,-0.94 -0.08,-1.16 h -0.03 c -0.68,1.12 -1.66,1.33 -2.67,1.33 -1.53,-0.01 -2.71,-0.87 -2.71,-2.38 z m 5.35,-0.78 v -0.78 h -2.11 c -1.04,0 -2.03,0.28 -2.03,1.5 0,0.99 0.85,1.48 1.84,1.48 1.62,-0.01 2.3,-0.92 2.3,-2.2 z"></path><path style="fill:currentColor;" d="m 144.37,56.5 h -0.05 v 1.3 h -1.15 V 46.2 h 1.2 v 4.77 h 0.05 c 0.55,-1.09 1.64,-1.51 2.52,-1.51 1.74,0 2.96,1.11 2.96,2.91 v 2.49 c 0,2.2 -1.55,3.16 -3.16,3.16 -1,0 -2.01,-0.59 -2.37,-1.52 z m 4.29,-1.53 v -2.6 c 0,-1.09 -0.8,-1.87 -2.08,-1.87 -1.04,0 -2.21,0.91 -2.21,2.47 v 1.69 c 0,1.41 1.04,2.31 2.24,2.31 1,0.01 2.05,-0.6 2.05,-2 z"></path><polygon style="fill:currentColor;" points="190.85,100.2 189.53,100.2 189.53,98.29 190.85,98.29 " transform="translate(-37.68,-42.39)"></polygon><path style="fill:currentColor;" d="m 155.5,49.64 h 1.17 v 1.33 h 0.03 c 0.59,-1.07 1.69,-1.51 2.57,-1.51 1.74,0 2.96,1.09 2.96,2.9 v 2.51 c 0,2.2 -1.51,3.16 -3.11,3.16 -1.02,0 -2.02,-0.59 -2.37,-1.51 h -0.05 v 4.46 h -1.2 z m 5.5,5.33 V 52.4 c 0,-1.09 -0.8,-1.9 -2.08,-1.9 -1.04,0 -2.21,0.86 -2.21,2.42 v 1.74 c 0,1.41 1.04,2.31 2.25,2.31 0.98,0.01 2.04,-0.6 2.04,-2 z"></path><path style="fill:currentColor;" d="m 164.77,56.1 v -5.47 h -1.42 v -0.98 h 1.42 V 47.1 h 1.2 v 2.55 h 2.26 v 0.98 h -2.26 v 5.16 c 0,0.81 0.42,1.06 1.15,1.06 0.42,0 0.8,-0.07 1.19,-0.15 v 1.04 c -0.5,0.16 -1.17,0.21 -1.51,0.21 -1.07,0 -2.03,-0.45 -2.03,-1.85 z"></path></symbol><use id="logo-inner-contents-usage" href="#logo-inner-contents" x="0" y="0" fill="currentColor"></use></svg>
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden <?= url_is('/inventario-equipamentos')?'active':'' ?>"><a href="<?= url_to('inventario-equipamentos-index') ?>"><?= lang('InventarioEquipamentos.home') ?></a></li>
            <li class="menu-item hidden <?= url_is('/inventario-equipamentos/lista')?'active':'' ?>"><a href="<?= url_to('inventario-equipamentos-list') ?>"><?= lang('InventarioEquipamentos.list') ?></a></li>
        </ul>
    </div>

</header>