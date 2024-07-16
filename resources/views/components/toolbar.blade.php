<div>

    @if($showToolbar)

    <x-task-status :status="request()->get('status') "/>

    <p class="mt-5 text-3xl font-bold">
        Total Task = {{ $tasks->count() }}
    </p>
    @else
    <a href="{{ route('tasks.index') }}" class=" px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">All Task</a>

    @endif
</div>
