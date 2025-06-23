<a {{ $attributes }}
   class="{{ $active ? 'bg-light-brown text-dark-brown' : 'text-light-brown hover:bg-white hover:text-dark-brown' }} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
