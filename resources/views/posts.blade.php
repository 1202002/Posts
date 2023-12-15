 <x-layout>

      <x-_posts-head :categories="$categories" :currentCategory="$currentCategory" />

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            
           @if($posts->count())

  
            <x-posts-grid :posts="$posts" />
            
      
             @else
              <p class="text-center">  No Posts  published yet.                    </p>
            
              @endif   




          


        </main>
</x-layout>





