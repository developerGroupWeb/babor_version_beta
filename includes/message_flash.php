<?php
    if(($validate->message_flash('row_email'))){

      echo   '<div class="alert alert-danger text-center">'.$validate->message_flash('row_email').'</div>';
    }


