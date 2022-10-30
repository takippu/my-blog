<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Posts') }} 
        </h2>
        <button onclick="location.href='{{route('blog-post.create')}}'" id="createNew" class="button button2">Create new post</button>
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
                <table id="customers">
                    <tr class="text-center">
                        <th>User ID</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                    @forelse($blog_posts as $post)
                    <tr>
                        <td>
                            {{
                                $post->user_id
                            }}
                            </td>
                        <td>
                            <a href="{{route('blog-post.show',[$post->id])}}">{{ // " [$post->id] after route is the ID to be used in controller"
                                ucfirst( $post->title)
                            }}</a>
                        
                        </td>
                        <td>
                            {{
                                $post->body
                            }}
                            </td>
                    </tr>
                    @empty
                        <p> no blog post </p>

                    @endforelse

                </table>
            </div>
            
        </div>
    </div>
</x-app-layout>
