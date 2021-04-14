<?php

function searchUser($searchArray)
{
return function($taskItem) use ($searchArray)
{
$sanitizedSearchName = strtolower($searchArray['firstName']);
$sanitizedItemName = strtolower($taskItem['firstName']);
$sanitizedSearchLastName = strtolower($searchArray['lastName']);
$sanitizedItemLastName = strtolower($taskItem['lastName']);
};
if ($sanitizedItemName === $sanitizedSearchName){
    if ($sanitizedItemLastName ===  $sanitizedSearchLastName)
    {
    return true;
    } else 
    {
    return false;
    }
    
}

};

