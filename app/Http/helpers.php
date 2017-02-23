<?php
function getFacebookPicture($id)
{
    return "http://graph.facebook.com/v2.8/$id/picture?height=200&width=200";
}