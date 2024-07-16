<div class="my-5">
    <select id="taskStatus" onchange="filterStatus()" class="bg-gray-50 border border-gray-300 text-gray-700">
        <option value="all" @if ($status=='all') selected

        @endif>All</option>
        <option value="completed" @if ($status=='completed') selected

        @endif>Completed</option>
        <option value="pending" @if ($status=='pending') selected

        @endif>Pending</option>
    </select>

    <script>
        function filterStatus() {
            let status=document.getElementById('taskStatus').value;
            if(status=='all'){
                // location.href="/tasks"
                location.href="{{ route('tasks.index') }}"
            }else{
                location.href="/tasks?status="+status
            }
        }
    </script>

</div>
