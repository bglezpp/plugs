<h1 class="page-title"><?php echo TEXT_PLUGIN_HELLO_WORLD ?> </h1>

<?php

echo '<a class="btn btn-primary" href="javascript: open_dialog(\'' . url_for('hello/my_page/form') . '\')">' . TEXT_PLUGIN_SEND_MESSAGE. '</a>';

echo '<hr>';

echo  my_class::get_user_info();