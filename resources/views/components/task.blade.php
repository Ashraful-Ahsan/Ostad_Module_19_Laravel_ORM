{{-- <div class="max-w-screen-2xl mx-auto my-6 p-6 bg-white rounded-lg shadow-md border border-gray-200">
    <div class="mt-4">
        <h2 class="text-xl font-semibold mb-2">{{ $task->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $task->description }}</p>
        <p class="text-gray-500 mb-4">{{ \Carbon\Carbon::parse($task->due_date)->diffForHumans() }}</p>
        <p class="text-red-400 font-medium">{{ $task->status }}</p>
    </div>
</div>
 --}}


<div class="max-w-screen-2xl mx-auto my-6 p-6 bg-white rounded-lg shadow-md border border-gray-200">
    <div class="mt-4">
        <!-- Title and Status -->


        <div class="flex justify-between items-center mb-2">
            <a href="{{ route('tasks.show', $task) }}">
                <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
            </a>

            <p class="text-red-400 font-medium">{{ $task->status }}</p>
        </div>

        <!-- Due Date -->
        <p class="text-gray-500 mb-4">{{ \Carbon\Carbon::parse($task->due_date)->diffForHumans() }}</p>

        <!-- Description -->
        <p class="text-gray-700 mb-4">{{ $task->description }}</p>

        <!-- Buttons -->
        <div class="flex justify-end space-x-4">
            {{-- <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Mark as Completed</button>
            <button class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Mark as Pending</button> --}}

            <form action="{{ route('tasks.update',$task) }}" method="POST">
                @method('PATCH')
                @csrf
                <input type="hidden" name="status" value="{{ $task->status=='completed' ? 'pending' : 'completed' }}">

            <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Mark as {{ $task->status=='completed' ? 'Pending' : 'Completed' }}</button>

            </form>

        </div>
    </div>
</div>
