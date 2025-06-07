@if($rating)
    <div class="flex">
        @for($i = 1; $i <= 5; $i++)
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ $i <= $rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15l-3.09 1.63.59-3.43L5 10l3.41-.49L10 6l1.59 3.51L15 10l-2.5 2.2.59 3.43L10 15z"/>
            </svg>
        @endfor
    </div>
@else
    No ratings yet
@endif
