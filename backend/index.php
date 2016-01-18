<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;


# First, instantiate the SDK with your API credentials and define your domain. 
$mg = new Mailgun("key-8ugjnk82unvt9bjpzk3e006zcrd9jbx6");
$domain = "sandboxc5983c65c5ff4710a88874afdd9f3c72.mailgun.org";

# Now, compose and send your message.
$mg->sendMessage($domain, array('from'    => 'colinluzio@yahoo.co.uk', 
                                'to'      => 'colin.luzio@ogilvy.com', 
                                'subject' => 'The PHP SDK is awesome!', 
                                'text'    => 'No I didnt.'));

