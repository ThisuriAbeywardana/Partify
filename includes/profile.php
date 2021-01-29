<div class="profile">
    <?php 
        // require_once('../Controls/general.php') 
        // getUse
    ?>
    <h2>My Profile</h2>
    <div class="lable">Name  <span></span></div>
    <div class="lable">Userame  <span></span></div>
    <div class="lable">Address  <span></span></div>
    <div class="lable">Email Address  <span></span></div>
    <div class="lable">Account Type  <span></span></div>
    <div class="lable">Contact Number  <span></span></div>

    <div class="forms">
        <form action="../Controls/deleteAccount.php" method="POST">
            <button type="submit" id="delete" class="btn" name="btnDelete">Delete Account</button>
        </form>
        <form action="../Controls/logoutControl.php" method="post">
            <button type="submit" id="logout" class="btn">Logout</button>
        </form>
    </div>
    

</div>