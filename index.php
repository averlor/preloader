<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="preloader">
            <div class="loader"></div>
        </div>

        <form id="loginform" method="get">
            <div class="well">
                <div data-cid="PHONE">
                    <p>89008887766</p>
                </div>
                <div class="crm-client-contacts-block">
                    <p>89008887766</p>
                </div>
                <div class="crm-client-contacts-block">
                    <p>89008887766</p>
                </div>
                <div class="crm-client-contacts-block">
                    <p>89008887766</p>
                </div>
                <div class="crm-client-contacts-block">
                    <p>89008887766</p>
                </div>
                <div class="crm-client-contacts-block">
                    <p>89008887766</p>
                </div>
				
				<div>ЕЕЕ, нас убрали!</div>
            </div>
        </form>

        <script>

            window.onload = function() {
				
				var preload = document.querySelector('.preloader');
				
				setTimeout(function(){
                    preload.className += ' fade';
                    },600);
			}
        </script>
        
        <script>

            var xhr = new XMLHttpRequest();
            var params = 'well';

            xhr.open('GET', 'details.php?' + params, true);

            xhr.onload = function() {
                
                var phone = document.querySelector('div[data-cid = "PHONE"]');
                phone.classList.add('hide');

                var contactList = document.querySelectorAll('div.crm-client-contacts-block');

                for (var i = 0; i < contactList.length; i++) {
                    contactList[i].classList.add('hide')
                }
            }

            xhr.send();

        </script>
    </body>
</html>