<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .nav ul{
                list-style: none;
            }
            .nav ul li{
                padding: 15px;
                position: relative;
                width: 200px;
                background-color: lightcoral;
                border-top:3px solid lightgray;
            }
            .nav ul ul{
                transition: all 0.3s;
                opacity: 0;
                visibility: hidden;
                position: absolute;  
                left: 80%;
                top:-2%;    
            }
            li:hover ul {display: block;}
            
            .nav ul li a{
                color: #fff;
                text-decoration: none;
            }
        </style> 
    </head>
    <body>
        <div class="nav">
            <ul>
                <li><a href="">UM</a></li>
                <li> <a href="">DOIS</a></li>
                <ul>
                    <li>Aa</li>
                    <li>Bb</li>
                    <li>Cc</li>
                    
                </ul>
                
                <li><a href="">TRES</a></li>
                <li><a href="">QUATRO</a></li>
                <li><a href="">CINCO</a></li>
            </ul>
            
            
           
        </div>
    </body>    
</html>