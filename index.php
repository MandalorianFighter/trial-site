<?php

if ($_SERVER['REQUEST_URI'] === '/') {
echo '<a href="/welcome">welcome</a>
<br>
<a href="/not-found">not-found</a>';
} elseif ($_SERVER['REQUEST_URI'] === '/welcome') {
echo '<a href="/">main</a>';
} else {
header("HTTP/1.1 404 Not Found");
echo 'Page not found. <a href="/">main</a>';
}
