@extends('layouts.master')
<head>
    <style>
        .sidebar {
            background-color: #1A1C22;
            height: 100%;
            width: 15%;
        }
        .links {
            width: 100%;
        }
        #links {
            text-decoration: none;
            list-style-type: none;
            width: 100%;
            padding: 0;
        }
        #links a {
            color: #fff;
            position: relative;
            width: 100%;
            height: 100%;
            text-decoration:none;
            z-index:10;
            opacity: 1;
            filter: alpha(opacity=1);
            display:inline-block;
        }
        #links li {
            width: 100%;
            height: 15%;
            text-align: center;
        }
        #links li:hover {
            background-color: #393D4A;
        }
        #links .active {
            background-color: #121418;
        }
        #links p {
            display:inline-block;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="links">
            <ul id="links">
                <li class="active"><a href="#"><p>Home</p></a></li>
                <li><a href="#"><p>Search</p></a></li>
                <li><a href="#"><p>Settings</p></a></li>
                <li><a href="#"><p>Logout</p></a></li>
            </ul>
        </div>
    </div>
</body>