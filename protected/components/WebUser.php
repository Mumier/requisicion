<?php

class WebUser extends CWebUser
{

             public function isAdmin()
        {
                // When Users are implemented, change this to check roles.
                return ( $this->getName() == 'admin' );
        }
    

}