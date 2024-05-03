{{-- Pagination styling according to template --}}

@if($paginator->hasPages()) {{--checks if there are multiple pages available for pagination. --}}

<nav class="page-section">
    <ul class="pagination">
        @if($paginator->onFirstPage()){{-- checks if the current page is the first page. If it is, it adds a disabled class to the previous page link to indicate that it's inactive. --}}
        <li class="page-item  disabled">
            <a class="page-link" href="javascript:void(0)" aria-label="Previous" style="color:#6c757d;">
                <span aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>{{--  adds an icon for the "Previous" button, likely an arrow pointing left. --}}
                </span>
            </a>
        </li>
        @else  {{--  If the current page is not the first page, it adds a regular previous page link. --}}
        <li class="page-item">{{-- This starts a list item for the previous page link. --}}
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">{{-- This creates an anchor tag for the previous page link with a URL retrieved from $paginator->previousPageUrl(). --}}
                <span aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>{{--  adds an icon for the "Previous" button, likely an arrow pointing left. --}}
                </span>
            </a>
        </li>


        @endif

        @foreach ($elements as $element){{--In Laravel's pagination system, $elements is a variable provided by Laravel within the pagination views.loop iterates over the pagination elements, which can include page numbers, "Previous" and "Next" buttons, etc. --}}

         @if (is_string($element)){{--  If the pagination element is a string, it adds a disabled class to the list item to indicate that it's inactive.This condition checks if the current element is a string. If it is, it likely represents ellipsis (...) for skipping pages. --}}

         <li class="page-item disabled">{{-- This creates a list item for the ellipsis, and it's disabled. --}}
            <a class="page-link" href="javascript:void(0)">{{ $element }}</a>{{-- , if you have an anchor tag with href="javascript:void(0)", clicking on the link will do nothing because the JavaScript code void(0) doesn't perform any action --}}
        </li>

         @endif

         @if(is_array($element)){{-- If the pagination element is an array, it iterates over the array to create pagination links for each page.$elemnent is text indicating the current page range, like "Page 1 of 10". --}}
           @foreach($element as $page=>$url){{-- $page represents the page number,$url represents the URL to navigate to the corresponding page --}}
              @if($page==$paginator->currentPage()){{--  checks if the page number being processed in the loop matches the page number currently being viewed by the user. --}}
              <li class="page-item active"> {{-- This starts a list item for the active page link. --}}
                <a class="page-link" href="javascript:void(0)">{{ $page }}</a>{{-- creates an anchor tag for the active page link with the page number. --}}
            </li>
               @else
               <li class="page-item">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
              @endif
           @endforeach
         @endif


        @endforeach


        @if($paginator->hasMorePages()){{-- This method checks if there are additional pages beyond the current page in the pagination. --}}
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">{{--  creates an anchor tag for the next page link with a URL retrieved from $paginator->nextPageUrl(). --}}
                <span aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </a>
        </li>
        @else{{-- : If there are no more pages available, it adds a disabled class to the next page link to indicate that it's inactive. --}}
        <li class="page-item disabled">
            <a href="javascript:void(0)" class="page-link" aria-label="Next" style="color:#6c757d;" >
                <span aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif