<?php
    session_start();
    $t=date("1,d-m-y h:i:s",time()+20);

    if($_REQUEST["name"]=="prasad" && $_REQUEST["pwd"]=="06112000")
    {
            ?>
        <html>
            <body>
                <h1>  <u><center>Enter Your Details</center></u>  </h1>
                <form action="slip4.2.php" method=get>
                    <center><div>   
                    <input type='hidden' name='etime' value="<?php echo $t?>"><br>
                    <h2> Enter Name : &nbsp;<input type=textbox name=uname></h2><br>
                    <h2> Enter City : &nbsp;&nbsp;<input type=textbox name=city>   </h2><br>
                    <h2> Enter Phone No :&nbsp; <input type=textbox name=pno></h2><br>
                    <input type=submit class=btn name=submit value=DISPLAY>
                    </div> </center>
                </form>
            </body>
        </html>
        <style>
            div
            {
                width: 400px;
                border: 3px;
                background-color: palegreen;
                border-radius: 20px;
            }
            .btn
            {
            border-width: 2px;
            height: 30px;
            margin-bottom: 20px;
            }
        </style>    
<?php
}
 else echo "<center><h1>Invalid Username Or Password</h1></center>";
?>