
<?php
require './vendor/autoload.php';
use Jenssegers\Blade\Blade;
use AshleyDawson\SimplePagination\Paginator;

$blade = new Blade('views', 'cache');

$ObjExemplo = select();

// Instantiate a new paginator service
$paginator = new Paginator();

// Set some parameters (optional)
$paginator
    ->setItemsPerPage(6) // Give us a maximum of 10 items per page
    ->setPagesInRange(5) // How many pages to display in navigation (e.g. if we have a lot of pages to get through)
;

// Pass our item total callback
$paginator->setItemTotalCallback(function () use ($ObjExemplo ) {
    return count($ObjExemplo );
});

// Pass our slice callback
$paginator->setSliceCallback(function ($offset, $length) use ($ObjExemplo ) {
    return array_slice($ObjExemplo , $offset, $length);
});

		$page=1;
	    if(isset($_GET['page']) && !empty($_GET['page'])){
	    	$page = $_GET['page'];
	    }

// Paginate the item collection, passing the current page number (e.g. from the current request)
 $pagination = $paginator->paginate((int) $page);
// print_r($pagination->getItems());
echo $blade->make('home', compact('pagination'));