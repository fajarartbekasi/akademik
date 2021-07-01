<div class="col-md-3">
    <ul class="list-group">
        @role('admin')
        <li class="list-group-item border-0">
            <a href="{{route('grades')}}" class="lable-menu">
                Grades
            </a>
        </li>
        <li class="list-group-item border-0">
            <a href="{{route('schedules')}}" class="lable-menu">
                Schedules
            </a>
        </li>
        @endrole
        @role('walas')

            <li class="list-group-item border-0 lable-menu">

                <a href="{{route('students')}}" class="lable-menu">
                    Students
                </a>

            </li>

        @endrole
    </ul>
</div>