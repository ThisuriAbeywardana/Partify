<style>
    .username button{
        margin: 5px 15px;
        
        
    }
    .username a{
        text-decoration: none;
        padding: 15px;
        margin: 15px 0;
        
    }
</style>


<div class="head">
    <div class="username">
        <p >Logged In As <?php echo $_SESSION['username'];?><button type="submit"><a href="../Controls/logoutControl.php">LogOut</a></button></p>
        
    </div>
</div>