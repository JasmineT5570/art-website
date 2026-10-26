<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); ?>

    <main>
        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/notify_page.php"); ?>

        <div class="container">
            <form action="https://splitforms.com/api/submit" method="post">
                <input type="hidden" name="access_key" value="acc84fecdb574e59af50fa5dc67bde5f">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your first name">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="email@example.com">

                <label for="comments">Comments</label>
                <textarea id="comments" name="comments" placeholder="Comments"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>