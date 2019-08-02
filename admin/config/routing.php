<?php 

foreach (glob("controllers/*.php") as $filename)
{
	$filename = basename($filename, ".php");
	$app->bindClass(ucfirst($filename));
}

$app->bind('/', function () {
  return $this->invoke('Home', 'index');
});

$app->post('/api/year-image', function () {
  return $this->invoke('API', 'getYearImage');
});

$app->get('/api/censored-default', function () {
  return $this->invoke('API', 'isEnableCensoredDefault');
});