<html>
  <head></head>
<body>
<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-login="Sample2000bot" data-size="large" data-onauth="onTelegramAuth(user)" data-request-access="write"></script>
  <script type="text/javascript">
    function onTelegramAuth(user) {
      alert('Logged in as ' + user.first_name + ' ' + user.last_name + ' (' + user.id + (user.username ? ', @' + user.username : '') + ')');
    }
  </script>
  </body>
  </html>