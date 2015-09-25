<?php
return array(
    'Status\\V1\\Rest\\Status\\Controller' => array(
        'description' => 'Create, manipulate, and retrieve status messages.',
        'collection' => array(
            'description' => 'Manipulate lists of status messages.',
            'GET' => array(
                'description' => 'Retrieve a paginated list of status messages.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status"
       },
       "first": {
           "href": "/status?page={page}"
       },
       "prev": {
           "href": "/status?page={page}"
       },
       "next": {
           "href": "/status?page={page}"
       },
       "last": {
           "href": "/status?page={page}"
       }
   }
   "_embedded": {
       "status": [
           {
               "_links": {
                   "self": {
                       "href": "/status[/:status_id]"
                   }
               }
              "message": "A status message of no more than 140 characters",
              "user": "The user submitting the status message.",
              "timestamp": "The timestamp when the status message was last modified."
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Create a new status messages.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
        ),
        'entity' => array(
            'description' => 'Manipulate and retrieve individual status messages.',
            'GET' => array(
                'description' => 'Retrieve a status message.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
            'PATCH' => array(
                'description' => 'Update a status message.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
            'PUT' => array(
                'description' => 'Replace a status message.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
            'DELETE' => array(
                'description' => 'Delete a status message.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
        ),
    ),
);
