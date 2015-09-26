<?php
//This deployment script changes file permission for /data/statuslib.php file to enable modifications after deployment
if (! chmod(getenv("ZS_APPLICATION_BASE_DIR") . "/data", 0777) || ! chmod(getenv("ZS_APPLICATION_BASE_DIR") . "/data/statuslib.php", 0777))
    throw new Exception("chmod for " . getenv("ZS_APPLICATION_BASE_DIR") . "/data/statuslib.php failed.");
