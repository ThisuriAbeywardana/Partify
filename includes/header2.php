<style>
    .username button{
        margin: 5px 15px;
        
        
    }
    .username a{
        text-decoration: none;
        padding: 15px;
        margin: 15px 0;
        
    }

    .subbtn{
    font-family:Verdana, Tahoma, sans-serif;
    font-weight:bold;
    font-size:15px;
    background-color:#ffffff;
    color:#2c2c2c;
    padding: 10px 16px;
    border: none;
    cursor: pointer;
    opacity: 0.9;
    }

    .subbtn:hover{
        background-color:black;
        color:red;

    }
</style>


<div class="head">
    <div class="username">
        <p >Logged In As <?php echo $_SESSION['username'];?><button type="submit" class="subbtn"><a href="../Controls/logoutControl.php">LogOut</a></button></p>
        
    </div>
</div>