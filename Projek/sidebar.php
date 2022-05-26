<!DOCTYPE html>
<html>
    <style>
        #sidebar{
            background-color: black;
            border-color: 1px black;
        }
        #sidebarbox{
            background-color: white;
            color: black;
            text-align: center;
        }
        #sidebutton{
            background-color: white;
            color: black;
            border:none;
            cursor: pointer;
            text-decoration: none;
            padding: 10px 20px;
            width: 150px;
        }
        #sidebutton:hover{
            background-color: grey;
        }
    
        
    </style>
    <head>
    <link rel="stylesheet" href="css/Background.css">

    </head>
    <body>
        <table id="sidebar">
            <tr>
                <td>
                    <img src="css/Logo.png" alt="logo">
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">My profile</button>
                </td>    
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">Main Page</button>
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">My Restaurant</button>
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">Order List</button>
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">Settings</button>
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">Help Center</button>
                </td>
            </tr>
            <tr>
                <td id="sidebarbox">
                <button id="sidebutton" onclick="document.location=''">Log Out</button>
                </td>
            </tr>
            <tr>
                <td style="color:white ;text-align:center">
                    ver.1.0
                </td>
            </tr>
        </table>
    </body>
</html>