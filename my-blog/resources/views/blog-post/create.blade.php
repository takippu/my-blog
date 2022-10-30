

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }} 
        </h2>
    </x-slot>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #516de8;
          color: white;
        }
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 2px 2px;
        cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */ 
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
        .button5 {background-color: #555555;} /* Black */
        </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <form method="POST" action="{{route('blog-post.store')}}">
                @csrf
                <div class="row pt-3">
                    <div class="control-group col-12">
                        <label for="title">Post Title</label>
                        <input type="text" id="title" class="form-control" name="title"
                               placeholder="Enter Post Title" required>
                    </div>
                    <div class="control-group col-12 mt-2 pt-3">
                        <label for="body">Post Body</label>
                        <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                  rows="" required></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="control-group col-12 text-center">
                        <button id="btn-submit" class="button2">
                            Create Post
                        </button>
                    </div>
                </div>
            </form>
                </div>
            
        </div>
    </div>
</x-app-layout>
