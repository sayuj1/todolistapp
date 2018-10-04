<!DOCTYPE html>
<html>

<head>
    <title>todolist
    </title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="todolist.css" type="text/css">
    <script>

        $(document).ready(function(){
            $("#remove_element").click(function(){
                $("#todoList").empty();
            });
            $("#btn1").click(function(){
                if(document.getElementById("todoInput").value=='')
                    {
                        window.alert("empty string");
                    }
                else
                    {
                
                    var item=document.getElementById("todoInput").value; //getting text value from input text box
                    var text=document.createTextNode(item); //creating a text node of the input text
                    var newItem=document.createElement("li"); //creating an element and giving its type
                    newItem.appendChild(text); //appending value of text in the element type li
                    document.getElementById("todoList").appendChild(newItem); //appending text value to ordered list tag
                 
                        document.getElementById("todoInput").value='';
                    }
                
            });
            $("#btn2").click(function(){
                document.getElementById("todoList").style.display="none";
            });
            $("#btn3").click(function(){
               document.getElementById("todoList").style.display="block";
            });
        });
        
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" #style="border: 2px solid blue;">
                <div id="main">
                    <div class="row">
                        <div class="col-md-12" #style="border: 2px solid yellow;">
                            <h1>To Do List App</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" #style="border:2px solid pink;">

                            <form id="todoForm">
                                <div class="row">
                                    <div class="col-md-12 col-xs-6" #style="border:2px solid red;">
                                        <input type="text" id="todoInput" placeholder="Write your list here..." class="col-md-12 col-lg-12 col-xs-6" style="min-width:350px; max-width:400px;"><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6" #style="border:2px solid purple;">
                                        <button id="btn1" type="button">Save</button>
                                        <button id="btn2" type="button" onclick="hide_all()">Hide all</button>
                                    </div>
                                    <div class="col-md-6 col-lg-6" #style="border:2px solid purple;">
                                        <button id="btn3" type="button" onclick="show_all()">Show all</button>
                                        <button id="remove_element" type="button">Delete all</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <ol id="todoList">
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="todolist.js">
    </script>
</body>

</html>