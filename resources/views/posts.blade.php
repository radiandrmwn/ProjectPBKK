<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

@foreach ($posts as $post  )
  

<article class="py-8 max-w-screen-md border-b border-gray-300">
  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
  <div class="text-base text-gray-500">
    <a href="#">Radian Try Darmawan</a> | 1 January 2024
  </div>
  <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae beatae nostrum tempore recusandae quam, sequi alias eaque odio consectetur labore
     officia veritatis! Sequi, eaque doloribus! Consequuntur, ipsa. Iusto, amet similique?
  </p>
  <a href="" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
</article>

<article class="py-8 max-w-screen-md border-b border-gray-300">
  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
  <div class="text-base text-gray-500">
    <a href="#">{{ $post['author'] }}</a> | 2 February 2024
  </div>
  <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}
  </p>
  <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
</article>
@endforeach

</x-layout>