<nav aria-label="Page navigation">
 		<ul class="pagination">
 			@if( $pagination->getCurrentPageNumber() > 1 )
				<li><a href="?page={{$pagination->getPreviousPageNumber()}}"><<<</a></li>
 			@endif

			@foreach ($pagination->getPages() as $page)
 				<li><a href="?page={{$page}}">{{$page}}</a></li>
 			@endforeach;

 			@if( $pagination->getTotalNumberOfPages() > $pagination->getCurrentPageNumber() )
				<li><a href="?page={{$pagination->getNextPageNumber()}}">>>></a></li>
 			@endif
 		</ul>
</nav>