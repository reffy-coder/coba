@extend('layout.app')
@section('content')

<!-- MAIN SECTION -->
<article class="container mt-28">
    <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
        Fasilitas B-University
    </h1>
    <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
        Menciptakan lingkungan pembelajaran yang nyaman dan lengkap
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 mt-8">
    @if($facilities->isEmpty())
        <p class="text-center text-xneutral-200 text text-montserrat text-lg">
          no data available
        </p>

      @else
        @foreach ( $facilities as $facility )
         <img src="{{ asset('storage/' . $facility->image)}}" 
         alt="Laboratorium Sistem dan Teknologi Informasi" 
         class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
        <div class="sm:col-span-7">
        {!! $berita->content !!}
        </div>   
        @endforeach
        
    @endif
    </div>
    <style>
/* Gaya untuk heading */
h1, h2, h3, h4, h5, h6 {
    color: #333;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold; /* Pastikan heading tampil tebal */
}

/* Gaya untuk numbering dan bullet list */
ul {
    list-style-type: disc; /* Menggunakan bullet */
    padding-left: 20px;
    margin-bottom: 1em;
}

ol {
    list-style-type: decimal; /* Menggunakan numbering */
    padding-left: 20px;
    margin-bottom: 1em;
}

li {
    margin-bottom: 0.5em;
}

p {
    margin-bottom: 1em;
    color: #555;
}
</style>

   
</article>

@endsection