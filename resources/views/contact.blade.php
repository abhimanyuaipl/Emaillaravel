<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="bg-gray-100 flex item-center justify-center h-full">
    <div class="container">
    <form action="/contact"
    method="post"
        class="bg-whiite p-6 rounded shadow-md"
        style="width: 300px;"  
        >
        @csrf
        <div class=mb-5>
         <label 
         for="email"
         class="block text-xs uppercase font-semibold    mb-1">Email Address
        </label>
        <input type="text"
        id="name"
        name="email"
        class="border px-2 py-1 text-sm w-full">
        <div class="text-red text-sm">
        @error('email')
        {{ $message }}
            
        @enderror

        </div>

        </div>
        <button type="submit"
        class="bg-blue-500 py-2 btn btn-primary rounded-full text-sm w-full">send</button>

        @if (session('msg'))
        <div>
            {{ session('msg') }}
        </div>
        @endif
    </form>  
    </div>  
</body>
