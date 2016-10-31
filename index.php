<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Link Portal</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat|Telex">

    <style>
        body {
            background: #DDD;
        }

        table {
            margin: 0 auto;
        }

        a.button {
            font-size: 30px;
            color: #000;
            text-decoration: none;
            font-family: 'Yanone Kaffeesatz', Arial, serif;
            display: block;
            width: 280px;
            height: 80px;
            line-height: 80px;
            padding: 10px;
            border: 1px solid #EEE;
            text-align: center;

            margin: 10px 10px 10px 10px;

            background: #FFFFFF;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#BBB));
            background: -moz-linear-gradient(0% 90% 90deg, #BBB, #FFF);

            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
        }

        a.button:hover {
            color: #222;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#AAA));
            background: -moz-linear-gradient(0% 90% 90deg, #AAA, #EEE);
        }

        .container {
            padding-top: 100px;
        }

        .outer-center {
            float: right;
            right: 50%;
            position: relative;
        }

        .inner-center {
            float: left;
            left: 50%;
            padding: 0px 30px 30px 30px;
            position: relative;
            background-color: #333;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
        }

        .clear {
            clear: both;
        }

        .text {
            padding: 20px 0px 10px 20px;
        }

        .head {
            font-size: 2em;
        }

        .head a {
            text-decoration: none;
            color: #EEE;
            font-weight: bold;
            font-family: 'Telex', Arial, serif;
        }

        .head a:hover {
            color: #CCC;
        }

        .small {
            color: #888;
            font-size: 14px;
            font-weight: bold;
            font-family: 'Telex', Arial, serif;
            text-transform: uppercase;
        }

        .small a {
            text-decoration: none;
            color: #888;
            font-weight: bold;
            font-family: 'Telex', Arial, serif;
            text-transform: uppercase;
        }

        .small a:hover {
            color: #4096EE;
        }

        p {
            display: block;
            margin: 30px 20px 10px 20px;
            font-family: 'Telex', Arial, serif;
            font-size: 16px;
            color: #aaa;
        }

        span {
            display: block;
            width: 200px;
            margin: 0px 20px 0px 20px;
            font-family: 'Yanone Kaffeesatz', Arial, serif;
            font-size: 14px;
            color: #ccc;
            text-align: left;
        }

        div.footer {
            text-align: center;
            padding: 10px 30px 30px 30px;
            position: relative;
            color: #AAA;
            font-size: 10px;
            font-weight: bold;
            font-family: 'Telex', Arial, serif;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="outer-center">
        <div class="product inner-center">
            <div class="text">
                <div class="head"><a href="#">Link Portal Name</a></div>
                <div class="small"><a href="#">Project Name</a></div>
            </div>

            <p>Gold versions</p>
            <table>
                <tr>
                    <td><span>No versions where listed.</span></td>
                </tr>
            </table>

            <p>Beta versions</p>
            <table>
                <tr>
                    <td><a href="v0.1/" class="button">Version 0.1</a></td>
                </tr>
                <tr>
                    <td><a href="v0.2/" class="button">Version 0.2</a></td>
                </tr>
                <tr>
                    <td><a href="v0.3/" class="button">Version 0.3</a></td>
                </tr>
                <tr>
                    <td><a href="v0.4/" class="button">Version 0.4</a></td>
                </tr>
                <tr>
                    <td><a href="v0.5/" class="button">Version 0.5</a></td>
                </tr>
            </table>

            <p>Alpha versions</p>
            <table>
                <tr>
                    <td><span>No versions where listed.</span></td>
                </tr>
            </table>

        </div>

    </div>

    <div class="clear"></div>

    <div class="footer">
        &copy; Copyright 2012-<?php echo date('Y'); ?> | Nathan Burgerhout
    </div>
</div>

</body>
</html>
