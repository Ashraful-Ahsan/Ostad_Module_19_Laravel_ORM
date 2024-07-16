<x-layout>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-8 text-3xl font-bold">
            All Tasks
        </div>
        <div class="mt-6 my-4 text-gray-500">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque minus sequi dignissimos enim molestiae repudiandae, voluptatibus architecto id, corporis, optio maxime! Possimus explicabo quaerat quo nobis harum! Illum, id quod!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque minus sequi dignissimos enim molestiae repudiandae, voluptatibus architecto id, corporis, optio maxime! Possimus explicabo quaerat quo nobis harum! Illum, id quod!
        </div>

        <x-toolbar show-toolbar="{{ $showToolbar }}/>

    </div>


    <div class="container mx-auto">

        @foreach ($tasks as $task)
        {{-- <x-task :task="$task"/> --}}
        <x-task :$task/>
        @endforeach

</div>
</x-layout>
