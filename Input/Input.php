<?php

function input($name)
{
   echo "$name";
   $result = fgets(STDIN);
   return $result;
}
