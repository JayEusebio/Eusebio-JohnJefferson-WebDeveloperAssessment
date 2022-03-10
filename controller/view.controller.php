<?php

    $viewDataObj = new users();
    $resultData = $viewDataObj->readLatestInserted();
    foreach ($resultData as $dataValue) {
        
    }