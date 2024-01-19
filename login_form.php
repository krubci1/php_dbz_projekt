<form action="login_process.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-dark-grey w3-margin">
    <h2 class="w3-center">Login</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" type="text" name="username" placeholder="Username" required>
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" type="password" name="password" placeholder="Password" required>
        </div>
    </div>
    <button type="submit" class="w3-button w3-block w3-section w3-teal w3-ripple">Login</button>
</form>