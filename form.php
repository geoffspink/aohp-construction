            <!-- jQuery drop-down contact form -->
            <a class='contact-link' href='#'>Contact me <span>&#x25BC;</span></a>
            <div class='contact-form'>
                <form name='contact-form' id='contact-form' method='POST' action='processForm.php'>
                    <div>
                        <label for='name'>Name: </label>
                        <input type='text' name='name' id='name' />
                    </div>
                    <div>
                        <label for='email'>Email: </label>
                        <input type='text' name='email' id='email' />
                    </div>
                    <div>
                        <label for='message'>Message: </label>
                        <textarea name='message' rows='4' cols='16' id='message'></textarea>
                    </div>
                    <div>
                        <input type='submit' value="Send" class='submit' />
                    </div>
                </form>
            </div>
        <!-- form validator object -->
        <script  type="text/javascript">
            var formValidCheck = new Validator("contact-form");

            formValidCheck.addValidation("name","req","Please enter your Name");
            formValidCheck.addValidation("name","maxlen=40",
                "Too many characters.\nThe maximum length for name\nis 40 chars");

            formValidCheck.addValidation("email","maxlen=50");
            formValidCheck.addValidation("email","req");
            formValidCheck.addValidation("email","email");
        </script>
