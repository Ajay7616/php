<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Realtime Chat App</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Not yet sign in? <a href="index.php">Sign In!</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>